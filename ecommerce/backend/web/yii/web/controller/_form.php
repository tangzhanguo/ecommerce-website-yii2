<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CATEGORYID')->textInput() ?>

    <?= $form->field($model, 'CREATEBY')->textInput() ?>

    <?= $form->field($model, 'CREATEDATE')->textInput() ?>

    <?= $form->field($model, 'PUBLISHBY')->textInput() ?>

    <?= $form->field($model, 'PUBLISHDATE')->textInput() ?>

    <?= $form->field($model, 'STATUS')->textInput() ?>

    <?= $form->field($model, 'TITLE')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'PRICE')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'DISCOUNT')->textInput() ?>

    <?= $form->field($model, 'STOCK')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'FULLDESCRIPTION')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'TABLEDEFINITION')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'METATITLE')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'METADESCRIPTION')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'METAKEYWORDS')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
