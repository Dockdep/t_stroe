<?php
    /**
     * @var array $categories
     */

use yii\helpers\Html;
?>

<ul>
    <?php foreach ($categories as $category) {?>
            <li>


                <?php if (isset( $category[ 'children' ] )) {?>
                    <?= Html::a(
                        $category[ 'lang' ][ 'title' ],
                        [
                            'category/index',
                            'slug' => $category[ 'lang' ][ 'alias' ]
                        ],
                        ['title' => $category[ 'lang' ][ 'title' ]]
                    ) ?>
                    <ul>
                        <?php foreach ($category[ 'children' ] as $child) { ?>
                            <li>


                                <?php if (isset( $child[ 'children' ] )) {?>

                                    <?= Html::a(
                                        $child[ 'lang' ][ 'title' ],
                                        [
                                            'category/index',
                                            'slug' => $child[ 'lang' ][ 'alias' ]
                                        ],
                                        ['title' => $child[ 'lang' ][ 'title' ]]
                                    ) ?>

                                    <ul>
                                        <?php foreach ($child[ 'children' ] as $sub_child) { ?>
                                            <li>
                                                <?= Html::a(
                                                    $sub_child[ 'lang' ][ 'title' ],
                                                    [
                                                        'catalog/category',
                                                        'category' => $sub_child[ 'lang' ][ 'alias' ],
                                                    ],
                                                    ['title' => $sub_child[ 'lang' ][ 'title' ]]
                                                ) ?>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php } else { ?>
                                    <?= Html::a(
                                        $child[ 'lang' ][ 'title' ],
                                        [
                                            'catalog/category',
                                            'category' => $child[ 'lang' ][ 'alias' ],
                                        ],
                                        ['title' => $child[ 'lang' ][ 'title' ]]
                                    ) ?>
                                <?php }?>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } else {?>
                    <?= Html::a(
                        $category[ 'lang' ][ 'title' ],
                        [
                            'catalog/category',
                            'category' => $category[ 'lang' ][ 'alias' ],
                        ],
                        ['title' => $category[ 'lang' ][ 'title' ]]
                    ) ?>
                <?php }?>
            </li>

   <?php } ?>
</ul>
