<?php
    use artweb\artbox\models\Page;
    use artweb\artbox\seo\widgets\Seo;
    use yii\helpers\Html;
    use yii\web\View;
    
    /**
     * @var View $this
     * @var Page $model
     */
    $this->title = $model->lang->title;
    $this->params[ 'breadcrumbs' ][] = [
        'label'    => Html::tag(
            'span',
            $this->title,
            [
                'itemprop' => 'name',
            ]
        ),
        'template' => "<li itemscope itemprop='itemListElement' itemtype='http://schema.org/ListItem'>{link}<meta itemprop='position' content='3' /></li>\n",
    ];
    $this->params[ 'seo' ][ Seo::TITLE ] = $this->title;
    $this->params[ 'seo' ][ Seo::H1 ] = $this->title;

    $this->registerCssFile('/css/pages-statick.css');
?>
<div class="row">
    <h1 class="col-xs-12 col-sm-12 title-card"><?php
        echo Seo::widget([ 'row' => Seo::H1 ]);
        ?></h1>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 page-view">
        <?php
        echo $model->lang->body;
        ?>
    </div>
</div>
