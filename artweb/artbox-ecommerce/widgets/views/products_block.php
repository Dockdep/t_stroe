<?php
if (!empty($products)) {
    ?>
    <div class="row">
    <div class="col-xs-12 col-sm-12">
        <h3 class="title-blocks-home"><?= $title?></h3>
    </div>
    <div class="col-xs-12 col-sm-12">
        <div class="slider-news sliders row">
            <?php
                foreach ($products as $item) {
                    echo \yii\helpers\Html::tag(
                        'div',
                        $this->render(
                            'product_smart',
                            [
                                'model' => $item,
                            ]
                        ),
                        [
                            'class' => 'col-xs-12 col-sm-4',
                        ]
                    );
                }
            ?>
        </div>
        <div style="display: none;" class="btn-l_"></div>
        <div style="display: none;" class="btn-r_"></div>
    </div>
    <?php
}
?>