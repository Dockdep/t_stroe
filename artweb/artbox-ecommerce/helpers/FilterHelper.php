<?php

namespace artweb\artbox\ecommerce\helpers;

use artweb\artbox\ecommerce\models\BrandLang;
use artweb\artbox\ecommerce\models\CategoryLang;
use artweb\artbox\ecommerce\models\Product;
use artweb\artbox\ecommerce\models\ProductLang;
use artweb\artbox\ecommerce\models\ProductVariant;
use artweb\artbox\ecommerce\models\ProductVariantLang;
use artweb\artbox\ecommerce\models\TaxGroup;
use yii\base\Object;
use yii\db\ActiveQuery;
use yii\db\Query;
use yii\helpers\ArrayHelper;

class FilterHelper extends Object
{

    public static $optionsList = [];

    /**
     * Get TaxGroups
     *
     * @return array
     */
    public static function optionsTemplate()
    {
        if (empty( static::$optionsList )) {
            return static::$optionsList = ArrayHelper::getColumn(
                TaxGroup::find()
                    ->joinWith('lang')
                    ->where([ 'is_filter' => 'TRUE' ])
                    ->all(),
                'lang.alias'
            );
        } else {
            return static::$optionsList;
        }

    }

    /**
     * Return custom filter-option link
     *
     * @param array  $filter
     * @param string $key
     * @param mixed  $value
     * @param bool   $remove
     *
     * @return array
     */
    public static function getFilterForOption(array $filter, string $key, $value, bool $remove = false)
    {

        $optionsTemplate = self::optionsTemplate();
        array_unshift($optionsTemplate, "special", "brands");

        $result = $filter;

        if (is_array($value)) {
            foreach ($value as $value_key => $value_items) {
                if (!is_array($value_items)) {
                    $value_items = [ $value_items ];
                }
                foreach ($value_items as $value_item) {
                    if ($remove && isset( $result[ $key ] ) && ( $i = array_search(
                            $value_item,
                            $result[ $key ][ $value_key ]
                        ) ) !== false
                    ) {
                        unset( $result[ $key ][ $value_key ][ $i ] );
                        if (empty( $result[ $key ][ $value_key ] )) {
                            unset( $result[ $key ][ $value_key ] );
                        }
                    } else {
                        if (!isset( $result[ $key ][ $value_key ] ) || array_search(
                                $value_item,
                                $result[ $key ][ $value_key ]
                            ) === false
                        ) {
                            $result[ $key ][ $value_key ][] = $value_item;
                        }
                    }
                }
            }
        } else {
            if ($remove && isset( $result[ $key ] ) && ( $i = array_search($value, $result[ $key ]) ) !== false) {
                unset( $result[ $key ][ $i ] );
                if (empty( $result[ $key ] )) {
                    unset( $result[ $key ] );
                }
            } else {
                if (!isset( $result[ $key ] ) || array_search($value, $result[ $key ]) === false) {
                    $result[ $key ][] = $value;
                }
            }
        }

        $filterView = [];

        foreach ($optionsTemplate as $optionKey) {
            if (isset( $result[ $optionKey ] )) {
                $filterView[ $optionKey ] = $result[ $optionKey ];
            }

        }

        return $filterView;
    }





    public static function setNewQueryParams(ActiveQuery $query, array $params)
    {
        $last_query = null;
        foreach ($params as $key => $param) {
            switch ($key) {
                case 'special':
                    self::filterSpecial($param, $query);
                    break;
                case 'brands':
                    self::filterBrands($param, $query);
                    break;
                case 'keywords':
                    self::filterKeywords($param, $query);
                    break;
                case 'prices':
                    self::filterPrices($param, $query);
                    break;
                default:
                    self::filterNewOptions($key, $param, $query);
                    break;
            }
        }
    }


    /**
     * @param $key
     * @param array $param
     * @param ActiveQuery $query
     */
    private static function filterNewOptions($key, array $param, &$query)
    {
        $query->andWhere(
            'product.id IN (
                        SELECT DISTINCT products
                        FROM (
                            SELECT id AS products FROM product WHERE id IN(
                            SELECT product_id FROM  product_option
                                INNER JOIN tax_option ON tax_option.id = product_option.option_id
                                INNER JOIN tax_group ON tax_group.id = tax_option.tax_group_id
                                INNER JOIN tax_group_lang ON tax_group.id = tax_group_lang.tax_group_id
                                INNER JOIN tax_option_lang ON tax_option.id = tax_option_lang.tax_option_id
                                WHERE tax_group_lang.alias = \''. $key .'\' AND tax_option_lang.alias IN (\'' . implode('\',\'', $param) . '\'))
                             OR id IN (
                              (SELECT product_id AS products
                                FROM product_variant_option
                                INNER JOIN product_variant ON product_variant_option.product_variant_id = product_variant.id
                                INNER JOIN tax_option ON tax_option.id = product_variant_option.option_id
                                INNER JOIN tax_group ON tax_group.id = tax_option.tax_group_id
                                INNER JOIN tax_group_lang ON tax_group.id = tax_group_lang.tax_group_id
                                INNER JOIN tax_option_lang ON tax_option.id = tax_option_lang.tax_option_id
                                WHERE tax_group_lang.alias = \''. $key .'\' AND tax_option_lang.alias IN (\'' . implode('\',\'', $param) . '\'))
                                )
                            ) AS table_name
                        )'
        );


    }


    /**
     * Fill query with filter conditions
     *
     * @param ActiveQuery $query
     * @param array       $params
     */
    public static function setQueryParams(ActiveQuery $query, array $params)
    {
        $last_query = null;
        foreach ($params as $key => $param) {
            switch ($key) {
                case 'special':
                    self::filterSpecial($param, $query);
                    break;
                case 'brands':
                    self::filterBrands($param, $query);
                    break;
                case 'keywords':
                    self::filterKeywords($param, $query);
                    break;
                case 'prices':
                    self::filterPrices($param, $query);
                    break;
                default:
                    $last_query = self::filterOptions($param, $last_query, false);
                    break;
            }
        }
        // If tax option filters were provided filter query with them
        if (!empty( $last_query )) {
            $query->andWhere([ 'product.id' => $last_query ]);
        }
    }



    /**
     * Tax Option filter
     *
     * @param string[]           $params
     * @param \yii\db\Query|null $last_query
     * @param bool               $in_stock
     *
     * @return \yii\db\Query
     */
    private static function filterOptions(array $params, Query $last_query = null, bool $in_stock = true): Query
    {

        $variant_query = ( new Query() )->distinct()
            ->select('product_variant.product_id as products')
            ->from('product_variant_option')
            ->innerJoin(
                'product_variant',
                'product_variant_option.product_variant_id = product_variant.id'
            )
            ->innerJoin(
                'tax_option',
                'tax_option.id = product_variant_option.option_id'
            )
            ->innerJoin(
                'tax_option_lang',
                'tax_option_lang.tax_option_id = tax_option.id'
            )
            ->where([ 'tax_option_lang.alias' => $params ]);
        if($in_stock) {
            $variant_query->andWhere(['!=', 'product_variant.stock', 0]);
        }
        $product_query = ( new Query() )->distinct()
            ->select('product_option.product_id as products')
            ->from('product_option')
            ->innerJoin('tax_option', 'product_option.option_id = tax_option.id')
            ->innerJoin(
                'tax_option_lang',
                'tax_option_lang.tax_option_id = tax_option.id'
            )
            ->where(
                [ 'tax_option_lang.alias' => $params ]
            )
            ->union($variant_query);
        $query = ( new Query() )->select('products')
            ->from([ 'result_table' => $product_query ]);
        if (!empty( $last_query )) {
            $query->andWhere([ 'product.id' => $last_query ]);
        }
        return $query;
    }

    /**
     * Fill $query with special filters (used in Product)
     *
     * @param array               $params
     * @param \yii\db\ActiveQuery $query
     */
    private static function filterSpecial(array $params, ActiveQuery $query)
    {
        $conditions = [];
        /**
         * @var string $key
         */
        foreach ($params as $key => $param) {
            $conditions[] = [
                '=',
                Product::tableName() . '.' . $key,
                $param,
            ];
        }
        /* If 2 or more special conditions get all that satisfy at least one of them. */
        if (count($conditions) > 1) {
            array_unshift($conditions, 'or');
        } else {
            $conditions = $conditions[ 0 ];
        }
        $query->andFilterWhere($conditions);
    }

    /**
     * Fill query with brands filter
     *
     * @param int[]               $param
     * @param \yii\db\ActiveQuery $query
     */
    private static function filterBrands(array $param, ActiveQuery $query)
    {
        $query->andFilterWhere([ Product::tableName() . '.brand_id' => $param ]);
    }

    /**
     * Fill query with keywords filter
     *
     * @param array               $params
     * @param \yii\db\ActiveQuery $query
     */
    private static function filterKeywords(array $params, ActiveQuery $query)
    {
        $conditions = [];
        if (!empty( $params )) {
            if (!is_array($params)) {
                $params = [ $params ];
            }
            /**
             * @var string $param Inputed keyword
             */
            foreach ($params as $param) {

                if(iconv_strlen($param) >= 3){
                    $conditions[] = [
                        'or',
                        [
                            'ilike',
                            ProductLang::tableName() . '.title',
                            $param,
                        ],
                        [
                            'ilike',
                            BrandLang::tableName() . '.title',
                            $param,
                        ],
                        [
                            'ilike',
                            CategoryLang::tableName() . '.title',
                            $param,
                        ],
                        [
                            'ilike',
                            ProductVariantLang::tableName() . '.title',
                            $param,
                        ],
                        [
                            'ilike',
                            ProductVariant::tableName() . '.sku',
                            $param,
                        ]

                    ];
                }


            }
        }
        if (count($conditions) > 1) {
            array_unshift($conditions, 'or');
        } else {
            $conditions = $conditions[ 0 ];
        }
        $query->andFilterWhere($conditions);
    }

    /**
     * Fill query with price limits filter
     *
     * @param array               $params
     * @param \yii\db\ActiveQuery $query
     */
    private static function filterPrices(array $params, ActiveQuery $query)
    {
        $conditions = [];
        if (!empty( $params[ 'min' ] ) && $params[ 'min' ] > 0) {
            $conditions[] = [
                '>=',
                ProductVariant::tableName() . '.price',
                $params[ 'min' ],
            ];
        }
        if (!empty( $params[ 'max' ] ) && $params[ 'max' ] > 0) {
            $conditions[] = [
                '<=',
                ProductVariant::tableName() . '.price',
                $params[ 'max' ],
            ];
        }
        if (count($conditions) > 1) {
            array_unshift($conditions, 'and');
        } else {
            $conditions = $conditions[ 0 ];
        }
        $query->andFilterWhere($conditions);
    }

}
    