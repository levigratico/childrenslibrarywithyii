<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/3/17
 * Time: 5:34 AM
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
        .content-slider li, .main-slider li{
            background-color: #ed3020;
            text-align: center;
            color: #FFF;
        }
        .content-slider h3, .main-slider div {
            margin: 0;
        }
        .content-slider h3 {
            padding: 70px 0;
        }

        .main-slider div {
            padding: 70px 0;
            height: 500px;
        }

    </style>
</head>
<body style="background-image: url('images/bg_clouds.png'); background-repeat: repeat-x;  background-position: 50% 0;">
<?php $this->beginBody() ?>
<?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

