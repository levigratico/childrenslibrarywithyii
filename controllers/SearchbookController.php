<?php 

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;




class SearchbookController extends Controller {




	public function actionIndex()
    {
    	$this->layout = 'levislayout';
        return $this->render('search');
    }
}


 ?>