<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblbookcoverSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-book-cover-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'BOOKCOVER_ID') ?>

    <?= $form->field($model, 'CATEGORY_ID') ?>

    <?= $form->field($model, 'COLOR_ID') ?>

    <?= $form->field($model, 'BOOK_TITLE') ?>

    <?= $form->field($model, 'BOOK_AUTHOR') ?>

    <?php // echo $form->field($model, 'BOOK_ILLUSTRATOR') ?>

    <?php // echo $form->field($model, 'BOOK_PUBLISHER') ?>

    <?php // echo $form->field($model, 'BOOK_LANGUAGE') ?>

    <?php // echo $form->field($model, 'BOOK_SUMMARY') ?>

    <?php // echo $form->field($model, 'BOOK_DESCRIPTION') ?>

    <?php // echo $form->field($model, 'BOOKCOUNT_PAGES') ?>

    <?php // echo $form->field($model, 'IS_ACTIVE') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
