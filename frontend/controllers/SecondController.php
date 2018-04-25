<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\data\Pagination;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

use frontend\models\Second;
use common\models\Picture;

/**
 * Site controller
 */
class SecondController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    /**
     * Lists all Second models.
     * @return mixed
     */
    public function actionIndex()
    {
  		$condition = [];
  		$query = Second::find()->where($condition)->orderBy('id desc');
        $count	= $query->count();
        $pagination = new Pagination(['totalCount' => $count]);
        $pagination->pageSize = 18;
        $seconds	= $query->offset($pagination->offset)
                    ->limit($pagination->limit)
                    ->all();
        return $this->render('index', [
                    'seconds'     => $seconds,
                    'pagination'    => $pagination,
                    ]);
    }

	// 提供小区名称动态下拉的ajax数据
    public function actionCommunityAjax($str){
    	$result = "";
		$communities = BaseCommunity::find()->where("name like '%" . $str . "%'")->limit(10)->all();
		foreach($communities as $c){
			$result .= '<p class="hitp">' . $c->name . '</p>';
		}
		//echo $result;
		return $result;
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

            foreach($filepaths as $filepath){
            	$pic = new Picture();
				$pic->create($model->id, "1", "second", $filepath);
            }
            return $this->redirect(Url::toRoute(['second/view', 'id' => $model->id]));
        }

        return $this->render('create', [
            'model' => $model,
            'upload'=> $upload,
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
        return $this->render('view', [
            'model' => Second::findOne($id),
        ]);
    }

    /**
     * Updates an existing Second model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

}
