<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblColor */

$this->title = 'Update Tbl Color: ' . $model->COLOR_ID;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Colors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->COLOR_ID, 'url' => ['view', 'id' => $model->COLOR_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-color-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
