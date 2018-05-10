<?php

namespace frontend\models;

use Yii;

use common\models\Picture;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $name
 * @property string $mobile
 * @property string $password
 * @property string $firsttime
 * @property string $updatetime
 * @property string $ip
 * @property string $company
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }
	public function getPortrait(){
		$pic = Picture::getPic($this->id, '1', 'portrait');
		if($pic){
			return $pic->path;
		}
		else{
			return 'web/images/portrait.jpg';
		}
	}

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'mobile', 'password', 'firsttime', 'updatetime', 'ip'], 'required'],
            [['firsttime', 'updatetime'], 'safe'],
            [['name', 'mobile'], 'string', 'max' => 16],
            [['password', 'company'], 'string', 'max' => 64],
            [['ip'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'mobile' => 'Mobile',
            'password' => 'Password',
            'firsttime' => 'Firsttime',
            'updatetime' => 'Updatetime',
            'ip' => 'Ip',
            'company' => 'Company',
        ];
    }
}
