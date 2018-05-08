<?php

namespace backend\controllers;

use Yii;
use yii\helpers\Url;
use yii\data\Pagination;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;

use backend\models\Second;
use backend\models\User;
use backend\models\BaseCommunity;
use common\models\Picture;
use common\models\UploadForm;



/**
 * SecondController implements the CRUD actions for Second model.
 */
class SecondController extends Controller
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


	// 提供小区名称动态下拉的ajax数据
    public function actionCommunityAjax($str){
    	$result = "";
    	if(strlen($str)>0){
			$communities = BaseCommunity::find()->where("name like '%" . $str . "%'")->limit(10)->all();
			foreach($communities as $c){
				$result .= '<p class="hitp">' . $c->name . '</p>';
			}
		}
		if($result==''){
			return "false";
		}
		else{
			return $result;
		}
    }
public function actionTest(){
	$sec = Second::find()->where('id % 3 =0')->all();
	foreach($sec as $s){
		$s->userid = 1;
		if($s->save()){
			echo $s->community .'<br />';
		}
		else{
			var_dump($s->errors);
		}
	}
}

    /**
     * Creates a new Second model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
		$model = new Second();
        $upload = new UploadForm();
		$userid = yii::$app->session->get('userid');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        	$upload->imageFiles = UploadedFile::getInstances($upload, 'imageFiles');
            $filepaths = $upload->upload($userid);
			if($filepaths){
	            foreach($filepaths as $filepath){
	            	$pic = new Picture();
					$pic->create($model->id, "1", "second", $filepath);
	            }
	        }
            return $this->redirect(Url::toRoute('second/create'));
        }

        return $this->render('create', [
            'model' => $model,
            'upload'=> $upload,
        ]);
    }
    
    
            /**
     * Lists all Second models.
     * @return mixed
     */
    public function actionList()
    {
    	$user = User::findOne(Yii::$app->session->get('userid'));
  		$condition = ['userid' => $user->id];
  		$query = Second::find()->where($condition)->orderBy('id desc');
        $count	= $query->count();
        $pagination = new Pagination(['totalCount' => $count]);
        $pagination->pageSize = 18;
        $seconds	= $query->offset($pagination->offset)
                    ->limit($pagination->limit)
                    ->all();
        return $this->render('list', [
                    'seconds'     => $seconds,
                    'pagination'    => $pagination,
                    ]);
    }
    
         /**
     * Displays a single Second model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
    	$this->layout = "view";
    	$model = Second::findOne($id);
    	$model->visit = $model->visit + 1;
    	$model->save();
        return $this->render('view', [
            'model' => $model,
        ]);
    }
    
    /**
     * Deletes an existing Second model.
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
     * Finds the Second model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Second the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Second::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
