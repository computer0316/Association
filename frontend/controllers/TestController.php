<?php
namespace frontend\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use frontend\models\Second;
use frontend\models\Condition;

/**
 * Site controller
 */
class TestController extends Controller
{
	public function actionTest(){
		echo Condition::createRoom(3);
	}
}
