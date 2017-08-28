<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TblbookcoverSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Book Covers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-book-cover-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Book Cover', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'BOOKCOVER_ID',
            'CATEGORY_ID',
            'COLOR_ID',
            'BOOK_TITLE',
            'BOOK_AUTHOR',
            [
                'attribute' => 'BOOKCOVER_IMAGE',
                'format' => 'html', 
                'label' => 'Book Cover',
                'value' => function ($data) {
                return Html::img(Yii::getAlias('@web').'/upload/'.$data['BOOKCOVER_IMAGE'],
                    ['width' => '100', 
                     'height' => '70']);
            },
            
            ],
            // 'BOOK_ILLUSTRATOR',
            // 'BOOK_PUBLISHER',
            // 'BOOK_LANGUAGE',
            // 'BOOK_SUMMARY:ntext',
            // 'BOOK_DESCRIPTION:ntext',
            // 'BOOKCOUNT_PAGES',
            // 'IS_ACTIVE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
