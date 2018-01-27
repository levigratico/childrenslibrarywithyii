<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\TblCategory;
use app\models\TblCategoryContent;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\TblBookCover */
/* @var $form yii\widgets\ActiveForm */
?>
<div>
    
</div>

<div class="tbl-book-cover-form">


    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); 
        // $catecontent=ArrayHelper::map( TblCategoryContent::find()->all(), 'CATEGORYCONTENT_ID','CATEGORYCONTENT_NAME' );
    ?>

    <?php
        echo $form->field($model, 'CATEGORY_ID')->widget(Select2::classname(), [
            'data' => ArrayHelper::map( TblCategory::find()->all(), 'CATEGORY_ID','CATEGORY_TITLE'),
            'language' => 'de',
            'options' => ['placeholder' => 'Select Category ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>

    <?php
        echo $form->field($model, 'CATEGORYCONTENT_ID')->widget(Select2::classname(), [
            'data' => ArrayHelper::map( TblCategoryContent::find()->all(), 'CATEGORYCONTENT_ID','CATEGORYCONTENT_NAME'),
            'language' => 'de',
            'options' => ['placeholder' => 'Select Subcategory ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>

    <?php
        echo $form->field($model, 'LANGUAGE_ID')->widget(Select2::classname(), [
            'data' => $language,
            'language' => 'de',
            'options' => ['placeholder' => 'Select Subcategory ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>

    <?= $form->field($model, 'COLOR_VALUE')->dropDownList($colors,[
        'multiple'=>'multiple',
        'class' => 'chosen-select',
    ])?>

    <?= $form->field($model, 'BOOK_TITLE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BOOK_AUTHOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BOOK_ILLUSTRATOR')->textInput(['maxlength' => true]) ?> 

    <?= $form->field($model, 'BOOK_PUBLISHER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BOOK_PUBLICATIONDATE')->textInput(['maxlength' => true]) ?>

    

    <?= $form->field($model, 'BOOK_SUMMARY')->textarea(['rows' => 6]) ?>

<!-- -->

   <?= $form->field($model, 'BOOK_DESCRIPTION')->dropDownList($catecontent,[
        'multiple'=>'multiple',
        'class' => 'chosen-select',
    ])?>

    <?= $form->field($model, 'BOOKCOUNT_PAGES')->textInput() ?>

     <?= $form->field($model, 'ISBN')->textInput() ?>
      <?= $form->field($model, 'LOCATION')->textInput() ?>
       <?= $form->field($model, 'CODELIBRARY')->textInput() ?>

    <?= $form->field($model, 'BOOKCOVER_IMAGE')->fileInput() ?>
   

  

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
