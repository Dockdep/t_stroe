<?php
use artweb\artbox\seo\widgets\Seo;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Ошибка 404';

$this->params[ 'seo' ][ Seo::TITLE] = $this->title = 'Ошибка 404'
?>
<div class="container">
    <div class="row">
<!--        <div class="col-xs-12 col-sm-6 _404_"><img src="/images/img/404.jpg" alt=""></div>-->
        <div class="col-xs-12 col-sm-6 404_">
            <h1 class="style txt_404">404</h1>
            <div class="style welcome_404">
                <p>
                    Страница не найдена
                </p>
            </div>
            <div class="style xz-xz">
               <p>
                   Возможно, она была удалена или вы перешли по устаревшей ссылке.
               </p>
            </div>
            <div class="style link_home-error">
                <?= Html::a(Yii::t('app', \Yii::t('app','error6')), Url::to(['/']));?>
            </div>
        </div>
    </div>
</div>