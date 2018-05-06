<?php

namespace backend\models;

use Yii;
use yii\base\ActionFilter;

class AttestFilter extends ActionFilter
{
    
    public function beforeAction($action)
    {
        return false;
    }

    public function afterAction($action, $result)
    {
    }
}