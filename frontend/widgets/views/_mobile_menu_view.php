<?php
    /**
     * @var array $categories
     */

use artweb\artbox\models\Page;
use yii\helpers\Html;
$pages = Page::find()
    ->with('lang')
    ->where(['in_menu'=> true])
    ->indexBy('id')
    ->all();

?>

<ul>
    <li><a href="#">Каталог</a>
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
    </li>
    <?php
    foreach ($pages as $page){
        ?>
        <li><?= Html::a(
                $page->lang->title,
                [
                    'site/page',
                    'slug' => $page->lang->alias,
                ]
            ); ?></li>
    <?php }?>
    <li class="bg-mob-menu"><a href="#"><span class="modal-link" data-form="callback">перезвонить мне</span></a></li>
</ul>
