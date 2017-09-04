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
            'CATEGORY_ID',
            'CATEGORYCONTENT_NAME',
            'CATEGORYCONTENT_IMAGE',
            'IS_ACTIVE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
