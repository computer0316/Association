<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "role_authority".
 * 中文
 * @property integer $roieid
 * @property integer $authorityid
 */
class RoleAuthority extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'role_authority';
    }
	
	/*
	 *
	 */
	public function getBaseRole(){
		return $this->hasOne(BaseRole::className(), ['id' => 'roleid']);
	}
	
	/*
	 *
	 */
	public function getBaseAuthority(){
		return $this->hasOne(BaseAuthority::className(), ['id' => 'authorityid']);
	}
	
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['roleid', 'authorityid'], 'required'],
            [['roleid', 'authorityid'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'roleid' => '角色',
            'authorityid' => '权限',
        ];
    }
}
