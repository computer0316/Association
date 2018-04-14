<?php
namespace backend\components;

use Yii;
use yii\base\ActionFilter;
use yii\helpers\Url;
use backend\models\User;

/*
 * 中文
*/
class AccessFilter extends yii\base\Model
{
    public static function check($action, $user)
    {
        //var_dump($action->controller->module->requestedRoute);
        if($user){
        	return true;
        }
        else{        	
        	return false;
        }
    }
}