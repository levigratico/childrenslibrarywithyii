<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TblbookcoverSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = 'Book covers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-book-cover-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Book Cover', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin() ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'BOOKCOVER_ID',
            [
                'attribute' => 'CATEGORY_ID',
                'value' => 'category.CATEGORY_TITLE',
            ],
            [
                'attribute' => 'CATEGORYCONTENT_ID',
                'value' => 'tblCategoryContent.CATEGORYCONTENT_NAME',
            ],
            // [
            //     'attribute' => 'COLOR_VALUE',
            //     'value' => 'color.COLOR_NAME',
            // ],
            'COLOR_VALUE',
            'BOOK_TITLE',
            'BOOK_AUTHOR',
            [
                'attribute' => 'BOOKCOVER_IMAGE',
                'format' => 'html', 
                'label' => 'Book Cover',
                'value' => function ($data) {
                return Html::img(Yii::getAlias('@web').'/upload_bookcover/'.$data['BOOKCOVER_IMAGE'],
                    ['width' => '80', 
                     'height' => '100']);
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
    <?php Pjax::end() ?>
</div>
