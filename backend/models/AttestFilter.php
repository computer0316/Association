<?php

namespace backend\models;
//中文
use Yii;
use yii\base\ActionFilter;
use yii\helpers\Url;
use backend\models\User;


class AttestFilter extends ActionFilter
{
    public $denyCallback;
    
    public function beforeAction($action)
    {
        $userid = Yii::$app->session->get('userid');
        if(isset($userid) && $userid > 0){
        	$user = User::findOne($userid);        	
        	if($user){      
        		return true;
        	}
        	else{
        		return false;
        	}
        }
        else{
                $denyCallback = null;
		        if ($this->denyCallback !== null) {
	    	        $denyCallback = call_user_func($this->denyCallback, $action, []);
		        }
        		else{
        			return false;
        		}
        }
    }

    public function afterAction($action, $result)
    {
    	return parent::afterAction($action, $result);
    }
}