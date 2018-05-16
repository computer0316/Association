<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\imagine\Image;
use common\models\UploadForm;
use common\models\Download;
use backend\models\Test;
use backend\models\AttestFilter;
use backend\models\Captcha;
use backend\models\BaseCompany;
use backend\models\BaseCommunity;



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
			'timer' => [
				'class' => AttestFilter::className(),
				'only' => ['test'],
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
        ];
    }


	public function actionIndex(){
		$community = new BaseCommunity();
		$community->name = "华夏经典";
		echo '<meta charset="utf-8">';
		var_dump($community);
		$community->create();
		var_dump($community);
	}

	public function actionImage(){
    	//生成一张填充模式200 x 200 的缩略图
    	Image::thumbnail('web/images/girls1.jpg', 585 , 400, 'inset')
        ->save(Yii::getAlias('web/images/girls11.jpg'),
        ['quality' => 100]);
    	//生成一张填充模式200 x 200 的缩略图
    	Image::thumbnail('web/images/girls2.jpg', 585 , 400, 'inset')
        ->save(Yii::getAlias('web/images/girls21.jpg'),
        ['quality' => 100]);

        $waterFile = "web/images/watermark.gif";
            //在一张图片的100,100 的位置开始打一个水印
	    Image::watermark('web/images/girls11.jpg', $waterFile, [410,300])
	    ->save(Yii::getAlias('web/images/girls12.jpg'),
	    ['quality' => 100]);
	    Image::watermark('web/images/girls21.jpg', $waterFile, [410,300])
	    ->save(Yii::getAlias('web/images/girls22.jpg'),
	    ['quality' => 100]);
        echo '<img src="web/images/girls11.jpg" />';
        echo '<img src="web/images/girls21.jpg" />';

        echo '<img src="web/images/girls12.jpg" />';
        echo '<img src="web/images/girls22.jpg" />';

	}
}
