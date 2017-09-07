<?php

namespace app\controllers;


use Yii;
use app\models\TblBookCover;
use app\models\TblbookcoverSearch;
use app\models\TblCategory;
use app\models\TblLanguage;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;   
use yii\web\UploadedFile; 
use yii\data\ActiveDataProvider;


/**
 * TblbookcoverController implements the CRUD actions for TblBookCover model.
 */
class TblbookcoverController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all TblBookCover models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TblbookcoverSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        // // // show data where IS_ACTIVE = 1
        // $query = TblbookcoverSearch::find()->andWhere([ 'IS_ACTIVE' => 1 ]);

        // //Pagination by 5 data
        // $dataProvider = new ActiveDataProvider([
        //             'query' => $query,
        //             'pagination' => [ 'pageSize' => 5 ],    // data rows to show
        //             'sort' => [                             // Sorting of data to Descending order
        //                 'defaultOrder' => [                
        //                     'BOOKCOVER_ID' => SORT_DESC,    // Sort by column_name BOOKCOVER_ID 
        //                 ],

        //             ],
        //         ]);
        

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblBookCover model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TblBookCover model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TblBookCover();


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $image = UploadedFile::getInstance($model,'BOOKCOVER_IMAGE');
            $basepath = Yii::getAlias('@app');
            $imagepath= $basepath.'/web/upload_bookcover/';
            $rand_name=rand(10,100);

            if ($image)
            {
                $model->BOOKCOVER_IMAGE = "category_{$rand_name}-{$image}"; // change random name of image
            }

                if($model->save()):
                    if($image):
                     $image->saveAs($imagepath.$model->BOOKCOVER_IMAGE);
                    endif;
                endif;             

            return $this->redirect(['view', 'id' => $model->BOOKCOVER_ID]);
        } else {
            $query = new \yii\db\Query;
            $query->select('CATEGORY_ID, CATEGORY_TITLE')
            ->from('tbl_category');
            $command    = $query->createCommand();
            $rows       = $command->queryAll();
            $items      = ArrayHelper::map($rows, 'CATEGORY_ID', 'CATEGORY_TITLE');

            $query1 = new \yii\db\Query;
            $query1->select('COLOR_ID, COLOR_NAME')
            ->from('tbl_color');
            $command1   = $query1->createCommand();
            $rows1      = $command1->queryAll();
            $colors     = ArrayHelper::map($rows1, 'COLOR_ID', 'COLOR_NAME');

            $query2 = new \yii\db\Query;
            $query2->select('LANGUAGE_ID, LANGUAGE')
            ->from('tbl_language');
            $command2   = $query2->createCommand();
            $rows2      = $command2->queryAll();
            $language     = ArrayHelper::map($rows2, 'LANGUAGE_ID', 'LANGUAGE');


            return $this->render('create', [
                'model' => $model,
                'items' =>  $items,
                'colors' => $colors,
                'language' => $language,
            ]);
        }
    }

    /**
     * Updates an existing TblBookCover model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
            $query = new \yii\db\Query;
            $query->select('CATEGORY_ID, CATEGORY_TITLE')
            ->from('tbl_category');
            $command = $query->createCommand();
            $rows = $command->queryAll();
            $items = ArrayHelper::map($rows, 'CATEGORY_ID', 'CATEGORY_TITLE');

            $query1 = new \yii\db\Query;
            $query1->select('COLOR_ID, COLOR_NAME')
            ->from('tbl_color');
            $command1   = $query1->createCommand();
            $rows1      = $command1->queryAll();
            $colors     = ArrayHelper::map($rows1, 'COLOR_ID', 'COLOR_NAME');

            $query2 = new \yii\db\Query;
            $query2->select('LANGUAGE_ID, LANGUAGE')
            ->from('tbl_language');
            $command2   = $query2->createCommand();
            $rows2      = $command2->queryAll();
            $language     = ArrayHelper::map($rows2, 'LANGUAGE_ID', 'LANGUAGE');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->BOOKCOVER_ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'items' =>  $items,
                'colors' => $colors,
                'language' => $language,
            ]);
        }
    }


    public function actionUpdateImage($id)
    {
        $model = $this->findModel($id);
        $model->scenario = "update-image";
         
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $image = UploadedFile::getInstance($model,'BOOKCOVER_IMAGE');

            $basepath = Yii::getAlias('@app');
            $imagepath= $basepath.'/web/upload_bookcover/';

            $rand_name=rand(10,100);

            if ($image)
            {
                $model->BOOKCOVER_IMAGE = "category_{$rand_name}-{$image}"; // change random name of image
            }

                if($model->save()):
                    if($image):
                     $image->saveAs($imagepath.$model->BOOKCOVER_IMAGE);
                    endif;
                endif;             

            return $this->redirect(['view', 'id' => $model->BOOKCOVER_ID]);
        } else {
            return $this->render('update-image', [
                'model' => $model,
                
            ]);
        }
    }


    /**
     * Deletes an existing TblBookCover model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblBookCover model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TblBookCover the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TblBookCover::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


}
