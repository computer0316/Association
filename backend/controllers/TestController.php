<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use common\models\UploadForm;
use backend\models\Test;





/**
 * 中文
 * Site controller
 */
class TestController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

	public function actionIndex(){
		$test = new Test();
		if($test->load(yii::$app->request->post()) && $test->save()){
			return $this->redirect(Url::toRoute('test/index'));
		}
		return $this->render('index', ['test' => $test]);

	}
	
	

    public function actionAjax($str){
    	$result = "";
		$communities = BaseCommunity::find()->where("name like '%" . $str . "%'")->limit(10)->all();
		foreach($communities as $c){
			$result .= '<p class="hitp">' . $c->name . '</p>';			
		}
		//echo $result;
		return $result;
    }

    public function actionUpload()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->imageFiles = UploadedFile::getInstances($model, 'imageFiles');
            if ($model->upload()) {
                // 文件上传成功
                foreach($model->imageFiles as $file){
                	echo $file->name . '<br />';
                	echo $file->size . '<br />';
                }
                //return;
            }
        }

        return $this->render('upload', ['model' => $model]);
    }


}
