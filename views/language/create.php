<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblLanguage */

$this->title = 'Create Tbl Language';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Languages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-language-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
