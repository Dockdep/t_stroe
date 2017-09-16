<div class="col-xs-12 col-sm-12">

    <div class="row">
        <div class="col-xs-12 col-sm-12 title-card">Товары в вашей корзина</div>

        <?php if (empty( $models )) {
            ?>
            <div class="col-xs-12 col-sm-12 title_empty_basket">
                <?php echo \Yii::t('app', 'basket_empty'); ?><br/>
                <!--                <span>Вы можете выбрать товар в <a href="--><?php //echo Url::to([ 'catalog/index' ]); ?><!--">нашем каталоге</a></span>-->
            </div>
            <?php
        } else {
            ?>
            <div class="row">
                <div class="col-xs-12 col-sm-12 basket_page">
                    <?php echo $this->render(
                        '@frontend/views/basket/basket_table',
                        [
                            'models' => $models,
                            'basket' => $basket,
                            'data'   => $data,
                        ]
                    );
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <?php
                    echo $this->render(
                        ( \Yii::$app->user->isGuest ? '_form_guest' : '_form' ),
                        [
                            'order'      => $order,
                            'deliveries' => $deliveries,
                        ]
                    );
                    ?>
                </div>
            </div>

            <?php
        }
        ?>

    </div>


</div>