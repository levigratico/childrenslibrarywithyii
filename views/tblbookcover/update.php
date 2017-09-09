<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblBookCover */

$this->title = 'Update Book Cover: ' . $model->BOOKCOVER_ID;
$this->params['breadcrumbs'][] = ['label' => 'Book Covers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->BOOKCOVER_ID, 'url' => ['view', 'id' => $model->BOOKCOVER_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-book-cover-update">

    <h4><?= Html::encode($this->title) ?></h4>
    <?= Html::a('Update Image', ['update-image', 'id' => $model->BOOKCOVER_ID], ['class' => 'btn btn-success']) ?>
    

    <?= $this->render('_form', [
        'model' => $model,
        'items' => $items,
        'colors' => $colors,
        'language' => $language,
        'catecontent' => $catecontent,
    ]) ?>

</div>
