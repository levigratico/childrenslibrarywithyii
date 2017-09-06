<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblBookContent */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'Create Book Content';
$this->params['breadcrumbs'][] = ['label' => 'Book Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="tbl-book-content-form">
	<h1><?= Html::encode($this->title) ?></h1>
	<br/>
    
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($upload, 'BOOKCOVER_ID')->dropDownList($bookcover) ?>

    <?= $form->field($upload, 'BOOKPAGES_IMAGE[]')->fileInput(['multiple'=>true]) ?>

    
    <div class="form-group">
        <?= Html::submitButton('Upload', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
