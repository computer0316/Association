<?php
namespace frontend\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use frontend\models\Second;
use frontend\models\Condition;
use frontend\models\BaseCommunity;

/**
 * Site controller
 */
class TestController extends Controller
{
	public function actionIndex(){
		$a['a']= false;
		var_dump($a['a']);
		if(true){
			$a['a'] = 'b';
			var_dump($a['a']);
		}
		var_dump($a['a']);
	}
}
