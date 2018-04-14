<?php

namespace backend\models;

use Yii;
use backend\models\UserRole;

/**
 * This is the model class for table "base_role".
 * 中文
 * @property integer $id
 * @property string $name
 */
class BaseRole extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'base_role';
    }

	// 关联 UserRold 表
	public function getUserRole(){
		return $this->hasMany(UserRold::className(), ['id' => 'roleid']);
	}

	/**
	 *
	 */
	public function getRoleAuthority(){
		return $this->hasMany(RoleAuthority::className(), ['roleid' => 'id']);
	}
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 64],
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
        ];
    }
}
