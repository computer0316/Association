<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
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

    public function actionAjax(){

    }


}
