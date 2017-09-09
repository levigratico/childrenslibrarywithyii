<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblLanguage */

$this->title = 'Update Tbl Language: ' . $model->LANGUAGE_ID;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Languages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->LANGUAGE_ID, 'url' => ['view', 'id' => $model->LANGUAGE_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-language-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
