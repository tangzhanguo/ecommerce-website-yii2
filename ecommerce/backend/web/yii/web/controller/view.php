<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Products */

$this->title = $model->TITLE;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->PRODUCTID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->PRODUCTID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'PRODUCTID',
            'CATEGORYID',
            'CREATEBY',
            'CREATEDATE',
            'PUBLISHBY',
            'PUBLISHDATE',
            'STATUS',
            'TITLE',
            'PRICE',
            'DISCOUNT',
            'STOCK',
            'FULLDESCRIPTION:ntext',
            'TABLEDEFINITION:ntext',
            'METATITLE',
            'METADESCRIPTION',
            'METAKEYWORDS:ntext',
        ],
    ]) ?>

</div>
