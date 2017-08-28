<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblBookCover */

$this->title = 'Create Book Cover';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Book Covers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-book-cover-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
         'items' => $items,
    ]) ?>

</div>
