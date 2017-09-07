<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TblCategoryContent */

$this->title = $model->CATEGORYCONTENT_ID;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Category Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-category-content-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Another Content', ['create'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Update Image', ['update-image', 'id' => $model->CATEGORYCONTENT_ID], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Update', ['update', 'id' => $model->CATEGORYCONTENT_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->CATEGORYCONTENT_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'CATEGORYCONTENT_ID',
            'CATEGORY_ID',
            'CATEGORYCONTENT_NAME',
            [
                'attribute' => 'CATEGORYCONTENT_IMAGE',
                'format' => 'html', 
                'label' => 'Book Cover',
                'value' => function ($data) {
                return Html::img(Yii::getAlias('@web').'/upload_categorycontentimages/'.$data['CATEGORYCONTENT_IMAGE'],
                    ['width' => '100', 
                     'height' => '70']);
            },

            ],
            'IS_ACTIVE',
        ],
    ]) ?>

</div>
