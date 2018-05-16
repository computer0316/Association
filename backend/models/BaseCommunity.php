<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "base_community".
 * 编码
 * @property integer $id
 * @property string $name
 */
class BaseCommunity extends \yii\db\ActiveRecord
{
	public function create(){
		$comm = $this->find()->where("name like '%" . $this->name . "%'")->one();
		if($comm){
			$this->id = $comm->id;
		}
		else{
			$this->save();
		}
		return true;
	}
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'base_community';
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
            'name' => '小区名称',
        ];
    }
}
