<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BookcontentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-book-content-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'BOOKCONTENT_ID') ?>

    <?= $form->field($model, 'BOOKCOVER_ID') ?>

    <?= $form->field($model, 'BOOKPAGES_IMAGE') ?>

    <?= $form->field($model, 'IS_ACTIVE') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
