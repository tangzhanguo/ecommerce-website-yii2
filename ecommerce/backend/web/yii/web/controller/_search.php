<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SearchProducts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'PRODUCTID') ?>

    <?= $form->field($model, 'CATEGORYID') ?>

    <?= $form->field($model, 'CREATEBY') ?>

    <?= $form->field($model, 'CREATEDATE') ?>

    <?= $form->field($model, 'PUBLISHBY') ?>

    <?php // echo $form->field($model, 'PUBLISHDATE') ?>

    <?php // echo $form->field($model, 'STATUS') ?>

    <?php // echo $form->field($model, 'TITLE') ?>

    <?php // echo $form->field($model, 'PRICE') ?>

    <?php // echo $form->field($model, 'DISCOUNT') ?>

    <?php // echo $form->field($model, 'STOCK') ?>

    <?php // echo $form->field($model, 'FULLDESCRIPTION') ?>

    <?php // echo $form->field($model, 'TABLEDEFINITION') ?>

    <?php // echo $form->field($model, 'METATITLE') ?>

    <?php // echo $form->field($model, 'METADESCRIPTION') ?>

    <?php // echo $form->field($model, 'METAKEYWORDS') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
