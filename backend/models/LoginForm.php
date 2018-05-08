<?php

namespace backend\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class LoginForm extends Model
{
    public $mobile;
    public $smsCode;
    public $verifyCode;
    public $password;
    public $password1;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['mobile', 'verifyCode'], 'required', 'on' => 'mobile'],
            [['password', 'password1', 'smsCode'], 'required', 'on' => 'password'],
            [['smsCode', 'verifyCode', 'password', 'password1'], 'string'],
            ['password', 'compare', 'compareAttribute' => 'password1'],
            
        ];
    }

    public function scenarios()
    {
    	$scenarios = parent::scenarios();
        $scenarios['mobile'] = ['mobile', 'verifyCode'];
        $scenarios['password'] = ['smsCode', 'password'];
        return $scenarios;
	}

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mobile'		=> '手机号',
            'smsCode'		=> '短信验证码',
            'verifyCode'	=> '验证码',
            'password1'	=> '密码',
            'password'	=> '确认密码',
        ];
    }

}
