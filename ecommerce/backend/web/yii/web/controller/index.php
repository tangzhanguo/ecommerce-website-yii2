<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchProducts */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'PRODUCTID',
            'CATEGORYID',
            'CREATEBY',
            'CREATEDATE',
            'PUBLISHBY',
            // 'PUBLISHDATE',
            // 'STATUS',
            // 'TITLE',
            // 'PRICE',
            // 'DISCOUNT',
            // 'STOCK',
            // 'FULLDESCRIPTION:ntext',
            // 'TABLEDEFINITION:ntext',
            // 'METATITLE',
            // 'METADESCRIPTION',
            // 'METAKEYWORDS:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
