<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblBookCover */
/* @var $form yii\widgets\ActiveForm */
?>
<div>
    
</div>
<div class="tbl-book-cover-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    
    <?= $form->field($model, 'CATEGORY_ID')->dropDownList($items)?>

    <?= $form->field($model, 'COLOR_ID')->dropDownList($colors)?>

    <?= $form->field($model, 'BOOK_TITLE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BOOK_AUTHOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BOOK_ILLUSTRATOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BOOK_PUBLISHER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BOOK_LANGUAGE')->dropDownList($language) ?>

    <?= $form->field($model, 'BOOK_SUMMARY')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'BOOK_DESCRIPTION')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'BOOKCOUNT_PAGES')->textInput() ?>

    <?= $form->field($model, 'BOOKCOVER_IMAGE')->fileInput() ?>
   

  

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
