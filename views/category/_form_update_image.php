<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblCategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CATEGORY_IMAGE')->fileInput() ?>   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
