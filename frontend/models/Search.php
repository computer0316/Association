<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use frontent\models\BaseCommunity;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class Search extends Model
{
    public $text;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['text'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'text'		=> '文本',
        ];
    }

}
