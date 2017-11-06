<?php
    /**
     * @var array $categories
     */

use yii\helpers\Html;
print_r($categories);
die();
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
    <li><a href="#">Продукция и бренды</a></li>
    <li><a href="#">О нас</a></li>
    <li><a href="#">Оплата и доставка</a></li>
    <li><a href="#">Новости</a></li>
    <li><a href="#">Контакты</a></li>
    <li class="bg-mob-menu"><a href="#"><span class="modal-link" data-form="callback">перезвонить мне</span></a></li>
</ul>
