<?php
    
    namespace frontend\controllers;
    
    use artweb\artbox\ecommerce\helpers\FilterHelper;
    use artweb\artbox\ecommerce\models\ProductVariantLang;
    use artweb\artbox\language\models\Language;
    use artweb\artbox\ecommerce\helpers\ProductHelper;
    use artweb\artbox\ecommerce\models\ProductVariant;
    use artweb\artbox\ecommerce\models\ProductFrontendSearch;
    use artweb\artbox\models\Page;
    use common\models\CustomerCategoryDiscount;
    use mihaildev\elfinder\InputFile;
    use Yii;
    use artweb\artbox\ecommerce\models\Brand;
    use artweb\artbox\ecommerce\models\BrandSearch;
    use artweb\artbox\ecommerce\models\Category;
    use artweb\artbox\ecommerce\models\Product;
    use artweb\artbox\ecommerce\models\TaxGroup;
    use yii\data\ActiveDataProvider;
    use yii\helpers\ArrayHelper;
    use yii\helpers\VarDumper;
    use yii\web\NotFoundHttpException;
    
    class CatalogController extends \yii\web\Controller
    {

        public function actionSearch()
        {
            // @todo
        }


        public function actionCategory()
        {
            /** @var Category $category */
            $category = Yii::$app->request->get('category');
            $filter = Yii::$app->request->get('filters', []);
            $filterCheck = $filter;



            if (empty( $category->id ) && empty( $word )) {
                return $this->render('catalog');
            }

            ProductHelper::addLastCategory($category->id);

            $params = [];


            $activeFiltersParams = $filterCheck;

            if (!empty( $filter[ 'brands' ] )) {
                unset( $filterCheck[ 'brands' ] );
                $brands = Brand::find()
                    ->select('id')
                    ->joinWith('lang')
                    ->where(
                        [
                            'in',
                            'alias',
                            $filter[ 'brands' ],
                        ]
                    )
                    ->orderBy('title')
                    ->all();
                $params[ 'brands' ] = [];
                foreach ($brands as $brand) {
                    $params[ 'brands' ][] = $brand->id;
                }
            }


            if (!empty( $filterCheck )) {
                $filter = array_diff_key($filter, $filterCheck);

                Yii::$app->response->redirect(
                    [
                        'catalog/category',
                        'category' => $category,
                        'filters'  => $filter,
                    ],
                    301
                );
            }

            $productModel = new ProductFrontendSearch();

            $productProvider = $productModel->search($category, $params);


            $brands = $category->brands;

            $groups = $category->getActiveFilters()
                ->all();

            foreach ($brands as $brand) {
                array_unshift(
                    $groups,
                    [
                        'group_alias'   => 'brands',
                        'option_alias'  => $brand->lang->alias,
                        'tax_option_id' => $brand->id,
                        'value'         => $brand->lang->title,
                        'alias'         => 'brands',
                        'title'         => 'Бренды',
                    ]
                );
            }

            foreach ($groups as $key => $group) {
                $param = $activeFiltersParams;
                if (isset( $param[ $group[ 'group_alias' ] ] )) {
                    if (!in_array($group[ 'option_alias' ], $param[ $group[ 'group_alias' ] ])) {
                        $param[ $group[ 'group_alias' ] ][] = $group[ 'option_alias' ];
                    } else {
                        continue;
                    }
                } else {
                    $param = array_merge($param, [ $group[ 'group_alias' ] => [ $group[ 'option_alias' ] ] ]);
                }

                $groups[ $key ] = array_merge($groups[ $key ], [ 'cacheKey' => json_encode($param) ]);

            }

            $groups = ArrayHelper::index($groups, NULL, 'title');


            $priceLimits = $productModel->priceLimits($category, $params);

            if(!\Yii::$app->user->isGuest){
                $discountCategory = CustomerCategoryDiscount::find()->where(['category_id'=>$category->id,'customer_id'=>\Yii::$app->user->identity->id]);
                if(!$discountCategory instanceof CustomerCategoryDiscount && isset($category->parentAR))
                {
                    $discountCategory = CustomerCategoryDiscount::find()->where(['category_id'=>$category->parentAR->id,'customer_id'=>\Yii::$app->user->identity->id]);
                    if(!$discountCategory instanceof CustomerCategoryDiscount && isset($category->parentAR->parentAR)){
                        $discountCategory = CustomerCategoryDiscount::find()->where(['category_id'=>$category->parentAR->parentAR->id,'customer_id'=>\Yii::$app->user->identity->id]);
                    }

                }

            } else {
                $discountCategory = null;
            }


            return $this->render(
                'products',
                [
                    'category'        => $category,
                    'filter'          => $filter,
                    'params'          => $params,
                    'productModel'    => $productModel,
                    'productProvider' => $productProvider,
                    'groups'          => $groups,
                    'priceLimits'     => $priceLimits,
                    'discountCategory'=> $discountCategory
                ]
            );
            
        }
        
        public function actionProduct($product, $variant)
        {
            /**
             * @var Product          $product
             * @var ProductVariant   $variant
             * @var ProductVariant[] $allSameNameVariants
             */
            $product = Product::find()
                              ->joinWith('lang')
                              ->where(
                                  [
                                      'product_lang.alias' => $product,
                                  ]
                              )
                              ->one();
            if (!empty($product)) {
                $variant = $product->getVariant()
                                   ->with('variantStocks')
                                   ->joinWith('lang')
                                   ->where([ 'sku' => $variant ])
                                   ->one();
            }

            
            if (empty($product) || empty($variant)) {
                throw new NotFoundHttpException();
            }
            
            $category = NULL;
            if (!empty($last_category = ProductHelper::getLastCategory())) {
                $category = $product->getCategory()
                                    ->where([ 'id' => $last_category ])
                                    ->one();
            }
            if (empty($category)) {
                $category = $product->category;
            }
            
            $colorVariants = $product->getVariants()
                                     ->select('product_variant.*', 'DISTINCT ON (product_variant_lang.title)')
                                     ->joinWith('lang')
                                     ->andWhere(
                                         [
                                             '!=',
                                             'product_variant_lang.title',
                                             $variant->lang->title,
                                         ]
                                     )
                                     ->andWhere(
                                         [
                                             '!=',
                                             'product_variant.stock',
                                             0,
                                         ]
                                     )
                                     ->all();
            
            $allSameNameVariants = $product->getVariants()
                                           ->joinWith('lang')
                                           ->andWhere(
                                               [
                                                   'product_variant_lang.title' => $variant->lang->title,
                                               ]
                                           )
                                           ->andWhere(
                                               [
                                                   '!=',
                                                   'product_variant.stock',
                                                   0,
                                               ]
                                           )
                                           ->all();
            
            $tabVariants = [];
            
            foreach ($allSameNameVariants as $sameNameVariant) {
                $properties = $sameNameVariant->getProperties(
                    [
                        [ 'position' => 1 ],
                    ]
                );
                
                foreach ($properties as $property) {
                    $sameNameVariant->customOption[ $property->lang->alias ] = $sameNameVariant->getOption(
                        [ [ 'tax_group_id' => $property->id ] ]
                    )
                                                                                               ->joinWith('lang')
                                                                                               ->one();
                    $tabVariants[ $property->lang->alias ][] = $sameNameVariant;
                    $tabVariants[ $property->lang->alias ][ 'title' ] = $property->lang->title;
                    $sortKey = $property->lang->alias;
                }
                if (!empty($tabVariants)) {
                    ArrayHelper::multisort(
                        $tabVariants[ $sortKey ],
                        function($item) use ($sortKey) {
                            if (is_object($item)) {
                                return $item->customOption[ $sortKey ]->sort;
                            } else {
                                return 100;
                            }
                        }
                    );
                }
            }
            
            $listVariants = [];
            
            foreach ($allSameNameVariants as $sameNameVariant) {
                $properties = $sameNameVariant->getProperties(
                    [
                        [ 'position' => 2 ],
                    ]
                );
                
                foreach ($properties as $property) {
                    $sameNameVariant->customOption[ $property->lang->alias ] = $sameNameVariant->getOption(
                        [ [ 'tax_group_id' => $property->id ] ]
                    )
                                                                                               ->joinWith('lang')
                                                                                               ->one();
                    $listVariants[ $property->lang->alias ][] = $sameNameVariant;
                    $listVariants[ $property->lang->alias ][ 'title' ] = $property->lang->title;
                    $sortKey = $property->lang->alias;
                }
                if (!empty($listVariants)) {
                    ArrayHelper::multisort(
                        $listVariants[ $sortKey ],
                        function($item) use ($sortKey) {
                            if (is_object($item)) {
                                return $item->customOption[ $sortKey ]->sort;
                            } else {
                                return 100;
                            }
                        }
                    );
                }
            }
            




            ProductHelper::addLastProducts($product->id);

            if(!\Yii::$app->user->isGuest){
                $discountCategory = CustomerCategoryDiscount::find()->where(['category_id'=>$category->id,'customer_id'=>\Yii::$app->user->identity->id]);
                if(!$discountCategory instanceof CustomerCategoryDiscount && isset($category->parentAR))
                {
                    $discountCategory = CustomerCategoryDiscount::find()->where(['category_id'=>$category->parentAR->id,'customer_id'=>\Yii::$app->user->identity->id]);
                    if(!$discountCategory instanceof CustomerCategoryDiscount && isset($category->parentAR->parentAR)){
                        $discountCategory = CustomerCategoryDiscount::find()->where(['category_id'=>$category->parentAR->parentAR->id,'customer_id'=>\Yii::$app->user->identity->id]);
                    }

                }
            } else {
                $discountCategory = null;
            }

            return $this->render(
                'card',
                [
                    'product'         => $product,
                    'variant'         => $variant,
                    'category'        => $category,
                    'colorVariants'   => $colorVariants,
                    'tabVariants'     => $tabVariants,
                    'listVariants'    => $listVariants,
                    'discountCategory' => $discountCategory

                ]
            );
        }
        
        public function actionBrands()
        {
            $dataProvider = new ActiveDataProvider(
                [
                    'query'      => Brand::find()
                                         ->orderBy('name'),
                    'pagination' => [
                        'pageSize' => -1,
                    ],
                ]
            );
            
            return $this->render(
                'brands',
                [
                    'dataProvider' => $dataProvider,
                ]
            );
        }
        
        public function actionBrand($brand)
        {
            $brand = BrandSearch::findByAlias($brand);
            
            $params = [
                'brands' => $brand->brand_id,
            ];
            
            $productModel = new ProductFrontendSearch();
            $productProvider = $productModel->search(NULL, $params);
            
            $priceLimits = $productModel->priceLimits(NULL, $params);
            
            return $this->render(
                'brand',
                [
                    'productModel'    => $productModel,
                    'productProvider' => $productProvider,
                    'brand'           => $brand,
                    'priceLimits'     => $priceLimits,
                ]
            );
        }
        
    }
