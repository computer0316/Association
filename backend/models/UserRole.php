<?php

namespace backend\models;

use Yii;
use backend\models\User;

/**
 * This is the model class for table "user_role".
 *
 * @property integer $userid
 * @property integer $roleid
 */
class UserRole extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_role';
    }

	public function getUser(){
		return $this->hasOne(User::className(), ['id' => 'userid']);
	}

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userid', 'roleid'], 'required'],
            [['userid', 'roleid'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userid' => '用户ID',
            'roleid' => '角色ID',
        ];
    }
}
