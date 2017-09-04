<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblCategoryContent */

$this->title = 'Update Tbl Category Content: ' . $model->CATEGORYCONTENT_ID;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Category Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CATEGORYCONTENT_ID, 'url' => ['view', 'id' => $model->CATEGORYCONTENT_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-category-content-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'category' => $category,
    ]) ?>

</div>
