<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\TblBookCover */

$this->title = $model->BOOKCOVER_ID;
$this->params['breadcrumbs'][] = ['label' => 'Book Covers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-book-cover-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update Book Information', ['update', 'id' => $model->BOOKCOVER_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Update Image', ['update-image', 'id' => $model->BOOKCOVER_ID], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->BOOKCOVER_ID], [
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
            [
                'attribute' => 'BOOKCOVER_IMAGE',
                'format' => 'html', 
                'label' => 'Book Cover',
                'value' => function ($data) {
                return Html::img(Yii::getAlias('@web').'/upload_bookcover/'.$data['BOOKCOVER_IMAGE'],
                    ['width' => '200', 
                     'height' => '300']);
            },
            ],
            'BOOKCOVER_ID',
            'category.CATEGORY_TITLE',
            'tblCategoryContent.CATEGORYCONTENT_NAME',
            'color.COLOR_NAME',
            'BOOK_TITLE',
            'BOOK_AUTHOR',
            'BOOK_ILLUSTRATOR',
            'BOOK_PUBLISHER',
            'LANGUAGE_ID',
            'BOOK_SUMMARY:ntext',
            'BOOK_DESCRIPTION:ntext',
            'BOOKCOUNT_PAGES',
            
        ],
    ]) ?>

    <br/>

    <?= Html::a('Delete All Pages', ['delete', 'id' => $model->BOOKCOVER_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'BOOKCONTENT_ID',
            // [
            //     'attribute' => 'BOOKCOVER_ID',
            //     'value' => 'bookcover.BOOK_TITLE',
            // ],
            [
                'attribute' => 'BOOKPAGES_IMAGE',
                'format' => 'html', 
                'label' => 'Book Cover',
                'value' => function ($data) {
                return Html::img(Yii::getAlias('@web').'/upload_bookcontentimages/'.$data['BOOKPAGES_IMAGE'],
                    ['width' => '80', 
                     'height' => '100']);
            },
            
            ],
            // 'IS_ACTIVE',

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
