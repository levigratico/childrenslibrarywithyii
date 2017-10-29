<?php
/**
 * Created by PhpStorm.
 * User: levibeverly
 * Date: 28/10/2017
 * Time: 12:27 PM
 */

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppBookSearchAsset;

AppBookSearchAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style type="text/css" media="screen">
        // TODO: - css styling
        .arrow {
               -o-transition:color .2s ease-out, background 1s ease-in;
               -ms-transition:color .2s ease-out, background 1s ease-in;
               -moz-transition:color .2s ease-out, background 1s ease-in;
               -webkit-transition:color .2s ease-out, background 1s ease-in;
               }
        .arrow:hover {  color: #000000 !important;  }

    </style>
</head>
<body style="background-image: url('images/bg_clouds.png'); background-repeat: repeat-x;  background-position: 50% 0;">
<?php $this->beginBody() ?>
<?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>



