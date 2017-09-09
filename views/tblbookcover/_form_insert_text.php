<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\TblCategory;
use app\models\TblCategoryContent;

/* @var $this yii\web\View */
/* @var $model app\models\TblBookCover */
/* @var $form yii\widgets\ActiveForm */
?>
<div>
    
</div>

<div class="tbl-book-cover-form">


    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>


    <?= $form->field($model, 'CATEGORY_ID')->dropDownList(
                            ArrayHelper::map( TblCategory::find()->all(), 'CATEGORY_ID','CATEGORY_TITLE'),
                            [
                                'prompt'=>'Select Category',
                                'onchange'=>'
                                    $.post( "index.php?r=categorycontent/lists&id='.'"+$(this).val(), function(data) {
                                        $( "select#tblbookcover-categorycontent_id" ).html(data);
                                    });'
                                
                            ]);?>

    <?= $form->field($model, 'CATEGORYCONTENT_ID')->dropDownList(
                            ArrayHelper::map( TblCategoryContent::find()->all(), 'CATEGORYCONTENT_ID','CATEGORYCONTENT_NAME'),
                            [
                                'prompt'=>'Select Category Content',
                                
                                
                            ]);?>

    <?= $form->field($model, 'COLOR_ID')->dropDownList($colors)?>

    <?= $form->field($model, 'BOOK_TITLE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BOOK_AUTHOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BOOK_ILLUSTRATOR')->textInput(['maxlength' => true]) ?> 

    <?= $form->field($model, 'BOOK_PUBLISHER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BOOK_PUBLICATIONDATE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LANGUAGE_ID')->dropDownList($language) ?>

    <?= $form->field($model, 'BOOK_SUMMARY')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'BOOK_DESCRIPTION')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'BOOKCOUNT_PAGES')->textInput() ?>

    <?= $form->field($model, 'BOOKCOVER_IMAGE')->fileInput() ?>
   

  

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
