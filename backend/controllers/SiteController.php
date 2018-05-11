<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Url;
use yii\filters\VerbFilter;
use common\models\LoginForm;
use yii\Roc\IO;
use backend\models\community;
use backend\models\User;
use backend\components\AccessFilter;

/**
 * 中文
 * Site controller
 */
class SiteController extends Controller
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
    public function beforeAction($action){
    	$user = User::checkLogin();
        if($user){
        	return AccessFilter::check($action, $user);
        }
        else{
        	return $this->redirect(Url::toRoute('user/login'));
        }
    }

    public function actionAdd(){
    	echo '<meta charset="utf-8">';
    	echo "测试";
    	dir();
    	$strs = IO::getStringsFromFile("d:\work\web\advanced\documents\community.txt");
    	foreach($strs as $str){
    		$comm = new Community();
    		$comm->name = $str;
    		if($comm->save()){
    			echo $str . '<br />';
    		}
    	}
    }



    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
    	$user = User::checkLogin();
    	if($user){
        	return $this->render('index');
        }
        else{
        	return $this->redirect(Url::toRoute('user/login'));
        }
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
