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
	public function actionTest(){
		$seconds = Second::find()->where("community_id =''")->all();
		$i=1;
		echo count($seconds);
		echo '<meta charset="utf-8">';
		ob_start();
		foreach($seconds as $s){
			$comm = BaseCommunity::find()->where(['name' => $s->community])->one();
			$s->community_id = $comm->id;
			$s->save();
			echo $i++ . ' ' . $s->community . '<br />';
			ob_flush();
			flush();
		}
	}
}
