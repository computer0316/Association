<?php

namespace backend\controllers;

use Yii;
use backend\models\BaseRole;
use backend\models\UserRole;
use backend\models\User;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Url;

/**
 * BaseRoleController implements the CRUD actions for BaseRole model.
 */
class RoleController extends Controller
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
     * Creates a new UserRole model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UserRole();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'userid' => $model->userid, 'roleid' => $model->roleid]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

	// 编辑用户角色
	public function actionEdit($id){

		$user		= User::findOne($id);
		$userRole	= new UserRole();
		$userRoles	= UserRole::find()->where(['userid' => $id])->all();

        if ($userRole->load(Yii::$app->request->post()) && $userRole->save()) {
            Yii::$app->session->setFlash('message', '成功编辑用户角色');
            return $this->redirect(Url::toRoute(['role/edit', 'id' => $id]));
        }
        return $this->render('edit', [
            'user'		=> $user,
            'userRole'	=> $userRole,
            'userRoles'	=> $userRoles,
        ]);

    }
}
