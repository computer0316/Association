<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "base_authority".
 * 中文
 * @property integer $id
 * @property string $name
 * @property string $function
 */
class BaseAuthority extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'base_authority';
    }

	/*
	 * 引用 role-authority 表内容
	 */
	public function getRoleAuthority(){
		return $this->hasMany(RoleAuthority::className(), ['authorityid' => 'id']);
	}
	
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'function'], 'required'],
            [['name', 'function'], 'string', 'max' => 64],
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
            'function' => 'Function',
        ];
    }
}
