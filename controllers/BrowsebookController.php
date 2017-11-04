<?php
/**
 * Created by PhpStorm.
 * User: levibeverly
 * Date: 28/10/2017
 * Time: 11:15 AM
 */

namespace app\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use yii\web\Controller;
use yii\helpers\Url;
use app\models\TblColor;
use app\models\TblCategory;
use app\models\TblBookCover;


class BrowsebookController extends Controller
{


    public function actionIndex()
     {
         Yii::$app->view->title = "Childrens Library";
         $this->layout = "browsebooklayout";
         $colors = TblColor::find()->select([
                                                "id" => "COLOR_ID",
                                              "name" =>"COLOR_NAME",
                                             "value" => "COLOR_VALUE"
                                            ])
                                   ->where(["IS_ACTIVE" => 1])
                                   ->all();
         $category = TblCategory::find()->select([
                                                      "id" => "CATEGORY_ID",
                                                   "title" => "CATEGORY_TITLE",
                                                   "image" => "CATEGORY_IMAGE",
                                             "description" => "CATEGORY_DESCRIPTION"
                                                 ])
                                        ->where(["IS_ACTIVE" => 1])
                                        ->all();


         return $this->render("browse", [
                                                  "colors"  => $colors,
                                              "categories"  => $category
                                              ]);
     }



     function actionPaginatebook()
     {
         $request = Yii::$app->request;
         $query = TblBookCover::find()->select([
                                                     "id" => "BOOKCOVER_ID",
                                                  "image" => "BOOKCOVER_IMAGE",
                                                  "title" => "BOOK_TITLE",
                                                 "author" => "BOOK_AUTHOR"
                                               ])
                                     ->where(["IS_ACTIVE" => 1]);
         $countQuery = clone $query;
         $pages = new Pagination(['totalCount' => $countQuery->count()]);
         $pages->pageSize = 6;
         $offset = count($request->bodyParams) > 0 ? $request->getBodyParams("offset") : 0;
         $models = $query->offset($offset)->limit($pages->limit)->all();
         echo json_encode($models);
     }


     function actionBookdescription() {
        Yii::$app->view->title = "Childrens Library";
        $this->layout = "bookdescriptionlayout";
        return $this->render("description");
        
     }
}



