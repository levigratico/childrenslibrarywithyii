<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CATEGORY_ID',
            'CATEGORY_TITLE',
            [
                'attribute' => 'CATEGORY_IMAGE',
                'format' => 'html', 
                'label' => 'Icon',
                'value' => function ($data) {
                return Html::img(Yii::getAlias('@web').'/upload_categoryimages/'.$data['CATEGORY_IMAGE'],
                    ['width' => '100', 
                     'height' => '100']);
            },
            
            ],
            'CATEGORY_DESCRIPTION:ntext',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
