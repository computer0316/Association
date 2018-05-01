<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\data\Pagination;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\UploadedFile;

use common\models\LoginForm;
use common\models\UploadForm;
use common\models\Picture;
use frontend\models\Second;
use frontend\models\BaseCommunity;


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

    public function actionInsert(){
    	echo '<meta charset="utf-8">';
    	ob_start();

    	for($i=0;$i<50;$i++){
	    	$se = new Second();
	    	$community = ['运通家园','华夏经典','新源小区','吉祥小区','东新里','华夏奥韵','外贸宿舍楼','锦绣观邸','幸福城朗园','荣华里','集宁小区','廊坊孔雀城公园海','恒庆公寓','紫金华府','郦水嘉园','廊坊孔雀城大学里(商住楼)','平旺里小区','管道八区','银河领域','管道局新六区','乔治花园','锦绣花苑','万向城','益民花园','旭辉十九城邦','建宏小区','利民小区','憩园新区','逸树家','圣泰新苑南区','金玉源','百殿园','居阳里','康乐小区','天地凤凰城','尚都新苑','博泰公寓','廊坊日报社宿舍','金元小区','幸福城润园','孔雀丹枫园','丰盛小区','群星小区','林苑小区','文明里','东方家园','塞纳荣府','锦盛园小区','苏荷塘','荣盛花语城','建华里小区','华夏铂宫','名人国际','新民小区D区','憩园小区','华夏名筑','宏泰花园','和平花园','阿尔卡迪亚','雅园一区','长安小区','金光小区','新城小区','康顺里小区','董村小区','锦绣名园','盛通国际小区','王寨小区','天泰人和','廊坊孔雀城大学里','晓廊坊','馨钻界','廊坊万达广场北区','幸福城雅园','尚北金街','同乐小区','管道局一区小区','天圆公寓','金安楼','物探家园','金泰花园小区','铁路宿舍','裕华小区','金利苑','恒基惜缘花城','中交香颂','恒盛阳光佳和','空中花园','七中宿舍','蓝水湾小区','清河街小区','移动通信小区','财政局宿舍小区','东日瑞景','乐园小区','盛园小区','凤河公寓','宏泰美树','金桥花园','世锦名城','圣玉百呈','颖丽花园','锦城小区','金地小区东区','圣泰新苑','红星里','光明东里','广阳公寓','太平洋保险公司宿舍楼','聚星苑','金玉里','新民小区C区','新奥小区','曙光小区','气象局家属楼','管道局四区','第七大街小区','嘉都TIME','物产丰盛楼','天域花园','祥泰花园','鼎兴公寓','蓝多廊公寓','新益小区','华腾嘉园','恒盛塞纳河谷','儒苑小区','德源华通小区','管道局第二生活区','迎春小区','曙光道环卫局宿舍','政法小区','群乐里','民政局宿舍楼','北新里','翠林洲','新民小区B区','第八大街东区','馨平公寓','国际花园','燕丰园','建工里','恒基嘉园','富苑小区','紫金城','新星里小区','金华里','安华里小区','新民里','东方大学城二期教师公寓A区','圣泰花园','尚都公馆','大官庄小区','三五三一小区','乡榭郦舍','怡景花园小区','旭景花园','华夏花园','三五三四小区','牡丹苑','华祥里','帼华邨','银河逸景','嘉通名苑小区','华元和庭','锦瑞尚城','骏丰里小区','都市花园','星盛园','富华小区','芳菲苑','今日家园','新明里小区','馨境界西区','淀粉厂宿舍','天域学府','金海公寓','丰华里','翔宇家园','中房馨园','金城里','曙光道供电局宿舍','百殿园','新华南小区','水云间','金源丽都','春和花园(北区)','群安实业小区','第八大街西区','艾力枫社东区','华夏水晶城','新民小区A区','经委楼小区','天和小区','北吉里小区','德安里小区','芳泽园小区','外宾公寓','朝晖里华航小区','新开路管道局宿舍楼','盛泽花城','万城英郡','塞纳荣府(别墅)','银河小区','大学里峰尚(商住楼)','格林郡府','廊坊万达广场南区(商住楼)','东方花园','阳光高第','外贸楼','盛世嘉豪','跃界花园','艾力枫社国际广场','孔雀公馆','帝景天城','幸福城润园(商住楼)','东方之珠','廊和坊金融家','春和花园(南区)','鸿坤凤凰城(别墅)','孔雀丹枫园(商住楼)','华苑小区','康乐花园','荣盛锦绣御府','北京锋巢','世纪花园','中国石油天然气管道局第七生活区...','新世界花园','廊坊孔雀城大公馆','天地凤凰城(别墅)','凤河国际高尔夫别墅','国际花园(别墅)','万康小区','鸿坤凤凰城(商住楼)','廊坊孔雀城大学里(别墅)','廊坊万达广场南区','廊坊孔雀城悦秀园(商住楼)','太阳城','凯创国际公寓','凯旋大道','旭辉十九城邦(别墅)','万怡小区','新世界铜锣湾','盛泰花园','大学城专家公寓','廊坊万达广场北区(商住楼)','锦绣家园','新光里小区','金银湾','梅花公寓','旭辉十九城邦(商住楼)','鸿坤凤凰城','观锦城(二期)','艾力枫社西区','万春园东区','康庄小区东区','廊北小区','双馨嘉园','万乐小区','金地小区西区','雅园二区','上善颐园','盛德金地','新空港孔雀城','安瑞嘉园','采四小区','红新里','先锋小区','新华小区','汇景轩','城市旺点','清都颐园','新华广场','香榭里舍公寓','盛世嘉华小区','雅致花园','京华佳苑','香溪湾','宸阳岛小区','华馨小区','孔雀城公园海','金碧伦温泉公寓','裕西里','粮食局宿舍','群华里','和平丽景','廊坊孔雀城悦秀园','荣盛华府','供电宿舍','第六街区(商住楼)','农兴里','廊坊市电子信息工程学校家属院','大学里峰尚','未来城','凤河孔雀英国宫','颐和佳苑','康庄小区西区','东方大学城教师公寓','香邑廊桥','枫景园','向英里','花语馨苑','畜牧局宿舍楼','五大街外贸楼','金梅苑','建设局宿舍','农行家属楼','廊坊政法小区','金昌综合楼','新安里社区','静怡家园北院','解放道纺织楼','美景嘉园小区','华兴里供电小区','观锦城(一期)','万和南区','紫云轩小区','御泉湾','英伦花园','中央风景小区','壹公馆','物价局宿舍','如意里','万和上品','新财小区','宝石花苑','君正云顶花苑','东方名邸','先锋里小区','华阳小区','孔雀海','廊坊老干部局宿舍','银河公寓','保险公司宿舍楼','上邦尚城','安顺里','文化局宿舍','鑫汇里','富春里','万众里社区','静怡家园南院','华秋里小区西区','中国石油管道公司员工公寓','丫咪公寓','金兰苑','周各庄新区','远景北京荟','万和公馆','银行逸景','秀景花园','金银滩花园','中央峰景','艾力枫社高尔夫花园','金芳苑','君正红石庄园','物产集团丰盛楼','银河领域二期','兴悦花园','中国人民银行家属楼','四季家园','津元里','众贤里','花栖左岸','白家务','正隆家园','锦秀名园','麻营小区','中国石油天然气管道局第四生活区...','新侨国际公寓','春华里','和平郡府','区调队宿舍','中国石油天然气管道局第三生活区...','测绘院小区','金源丽都','都市名园','长虹里','中国石油天然气管道局第五生活区...','城市风景馨领地','馨境界东区','东方花园','新源道地税局宿舍楼','永跃里小区','金安里','华秋里小区东区','幸福城欣园','郡望','兴盛公寓','第七大街商住公寓','农行宿舍','华熙公馆','盛通银河','新财小区','曙光工行宿舍楼','万和北区','安和园','京津花园','润绿公寓','解放8号','祥泰别墅'];
	    	$se->community	= $community[rand(0,399)];
	    	$se->city_id	= '131003';
	    	$se->housetype	= rand(1,7);
	    	$se->constructure= rand(1,4);
	    	$se->position	= '廊坊市' . $se->community;
	    	$se->price		= rand(120, 680);
	    	$se->area		= ($se->price*10000) / rand(14800, 23000);
	    	$se->room		= rand(1,4);
	    	$se->hall		= rand(1,2);
	    	$se->toilet		= rand(1,2);
	    	$se->direction	= rand(1,6);
	    	$se->total_floor		= rand(6,24);
	    	$se->floor= rand(1, $se->total_floor);
	    	$se->decoration	= rand(1,4);
	    	$se->birth		= rand(1990, 2018);
	    	$can_own =[40, 50 , 70];
	    	$se->can_own 	= $can_own[rand(0,2)];
	    	$se->own_type	= rand(1,6);
	    	$se->licence_year=2005;
	    	$se->only_house	= rand(0,1);
	    	$se->house_info	= "一、户型好！布局合理！南北通透，全明格局，餐客分明，采光极好。<br>二、公摊小，实际面积大，阳台面积减半计算，使用面积超大！并且没有浪费空间。<br>三、得天独厚的地理位置：交通便利，出入方便。<br>四、配套设施齐全：周边各大银行一应具全.<br>五、性价比！此房屋在整个片区仅有的几套房源，业主诚心出售！并无涨价意愿，预购还需从速。";
			$se->updatetime = date("Y-m-m H:i:s", time());
			$se->title	= $se->community . $se->birth . '年房' . $se->price . '万' . $se->area . '平米';
			if(!$se->save()){
				var_dump($se->errors);
				die();
			}
			echo $i . ' ' . $se->title . '<br />';
			ob_flush();
			flush();
		}
    }



    /**
     * Lists all Second models.
     * @return mixed
     */
    public function actionIndex()
    {
    	$this->layout = 'view';
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

        /**
     * Lists all Second models.
     * @return mixed
     */
    public function actionList()
    {
    	$this->layout = 'list';
  		$condition = [];
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
		$this->layout = 'list';
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
    	$model = Second::findOne($id);
    	$model->visit = $model->visit + 1;
    	$model->save();
        return $this->render('view', [
            'model' => $model,
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