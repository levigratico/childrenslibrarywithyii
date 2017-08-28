<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblBookCover */

$this->title = 'Update Tbl Book Cover: ' . $model->BOOKCOVER_ID;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Book Covers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->BOOKCOVER_ID, 'url' => ['view', 'id' => $model->BOOKCOVER_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-book-cover-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'items' => $items
    ]) ?>

</div>
