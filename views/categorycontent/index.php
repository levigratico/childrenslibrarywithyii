<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategorycontentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Category Contents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-category-content-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Category Content', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CATEGORYCONTENT_ID',
            [
                'attribute' => 'CATEGORY_ID',
                'value' => 'category.CATEGORY_TITLE',
            ],
            'CATEGORYCONTENT_NAME',
            [
                'attribute' => 'CATEGORYCONTENT_IMAGE',
                'format' => 'html', 
                'label' => 'Icon',
                'value' => function ($data) {
                return Html::img(Yii::getAlias('@web').'/upload_categorycontentimages/'.$data['CATEGORYCONTENT_IMAGE'],
                    ['width' => '100', 
                     'height' => '70']);
            },
            
            ],
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
