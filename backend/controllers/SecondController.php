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
use backend\models\AttestFilter;
use common\models\UploadForm;
use common\models\PictureManager;


/**
 * SecondController implements the CRUD actions for Second model.
 */
class SecondController extends Controller
{
	public function behaviors(){
		return [
			'attestFilter' => [
				'class'			=> AttestFilter::className(),
				'except'		=> [],
				'denyCallback'	=> function($rule, $action){
					return $this->redirect(Url::toRoute('user/login'));
				}
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


    /**
     * Creates a new Second model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
		$model		= new Second();
        $upload		= new UploadForm();
        $community	= new BaseCommunity();
		$userid = yii::$app->session->get('userid');

		$post = Yii::$app->request->post();

		if($community->load($post) && $community->create() && $model->load($post)){
			$model->community_id	= $community->id;
        	$model->userid			= Yii::$app->session->get('userid');
        	if(!$model->save()){
        		echo '<meta charset="utf-8">';
        		var_dump($model->errors);
        	}
        	$upload->imageFiles = UploadedFile::getInstances($upload, 'imageFiles');
        	PictureManager::saveImages($model->id, $upload, 'second');
			Yii::$app->session->setFlash('message', '房源添加成功');
            return $this->redirect(Url::toRoute('second/create'));
		}


        return $this->render('create', [
        	'community'	=> $community,
            'model'		=> $model,
            'upload'	=> $upload,
        ]);
    }
    public function actionEdit($id = '')
    {
    	if($id <> ''){
			$model = Second::findOne($id);
			$community = BaseCommunity::findOne($model->community_id);
			$userid = yii::$app->session->get('userid');
	        if ($model->load(Yii::$app->request->post()) && $model->save()) {
	        	Yii::$app->session->setFlash("message", '成功编辑房源');
	            return $this->redirect(Url::toRoute('second/edit'));
	        }
	        return $this->render('edit', [
	        	'community'	=> $community,
    	        'model'		=> $model,
        	]);
	    }
	    else{
	    	return $this->redirect(Url::toRoute('second/list'));
	    }
    }

    public function actionDelete($id = '')
    {
    	if($id <> ''){
			$model = Second::findOne($id);
			$user = User::findOne(Yii::$app->session->get('userid'));
			if(isset($user) && $model->userid = $user->id){
				$model->delete();
        		Yii::$app->session->setFlash("message", '房源已删除');
        	}
        	else{
        		Yii::$app->session->setFlash("message", '房源删除失败');
        	}
	        return $this->redirect(Url::toRoute('second/edit'));
	    }
	    else{
	    	return $this->redirect(Url::toRoute('second/list'));
	    }
    }


            /**
     * Lists all Second models.
     * @return mixed
     */
    public function actionList()
    {
    	$user = User::findOne(Yii::$app->session->get('userid'));
    	if(!$user){
			Yii::$app->session->setFlash('message', '请先登录系统');
			return $this->redirect(Url::toRoute('user/login'));
    	}
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
