<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\TblCategoryContent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-category-content-form">

	<p>
		<?= Html::a('Update Image', ['update-image', 'id' => $model->CATEGORYCONTENT_ID], ['class' => 'btn btn-success']) ?>
	</p>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CATEGORY_ID')->dropDownList($category)?>

    <?= $form->field($model, 'CATEGORYCONTENT_NAME')->textInput(['maxlength' => true]) ?>

    <?= $form->errorSummary($model); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
