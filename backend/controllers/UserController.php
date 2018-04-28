<?php

namespace backend\controllers;

use Yii;
use yii\helpers\VarDumper;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Tools;
use app\models\LoginForm;
use backend\models\User;
use yii\base\Exception;
use yii\data\Pagination;

use yii\Roc\IO;
use yii\Roc\Session;
use yii\Roc\SMS;

class UserController extends Controller
{
	public $enableCsrfValidation = false;

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
				'fixedVerifyCode' => substr(rand(1000,9999), 0),
                'height' => 50,
                'width' => 100,
                'maxLength' => 4,
                'minLength' => 4,

            ],
        ];
    }

	/*
	 * 用户列表
	 */
	public function actionIndex(){
		$query = User::find()->orderBy('id desc');
        $count	= $query->count();
        $pagination = new Pagination(['totalCount' => $count]);
        $pagination->pageSize = 18;
        $users		= $query->offset($pagination->offset)
                    ->limit($pagination->limit)
                    ->all();
        return $this->render('list', [
                    'users'     => $users,
                    'pagination'    => $pagination,
                    ]);
	}

	// 用户登录
	public function actionLogin(){
		$this->layout	= 'login';
		$loginForm		= new LoginForm();
		$post = Yii::$app->request->post();
		if($loginForm->load($post)){
			$smsCode = rand(100000,999999);
			Yii::$app->session->set('smscode', $smsCode);
			SMS::send($loginForm->mobile, "【房管局公共住房】验证码：" . $smsCode);
			return $this->render('sms', ['loginForm' 	=> $loginForm]);
		}
		return $this->render('login', ['loginForm' => $loginForm]);
	}

	// 修改密码
	public function actionChpass(){
		try{
			$userLoad = new User(['scenario' => 'changepassword']);
			if($userLoad->load(Yii::$app->request->post())){
				$user = User::findOne(Yii::$app->session->get('userid'));
				$user->changePassword($userLoad);
				Yii::$app->session->setFlash('message', '密码修改成功');
			}
		}
		catch(Exception $e){
			Yii::$app->session->setFlash('message', $e->getMessage());
		}
		return $this->render('chpass', [
			'user'	=> $userLoad,
			]);
	}

	public function actionLogout(){
		User::logout();
		$this->redirect(Url::toRoute("/site/index"));
	}

	public function actionMd5(){
		echo '*' . md5('rocisaboy') . '*';

	}
}
