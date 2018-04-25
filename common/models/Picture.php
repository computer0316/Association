<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "picture".
 *
 * @property integer $id
 * @property integer $item_id
 * @property string $item_sub
 * @property string $item_name
 * @property string $path
 */
class Picture extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'picture';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id', 'item_name', 'path'], 'required'],
            [['item_id'], 'integer'],
            [['item_sub', 'item_name'], 'string', 'max' => 16],
            [['path'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'item_id' => 'Item ID',			// �����Ƭ����Ŀ�� ID �ţ�������ַ����� second ���е� ID
            'item_sub' => 'Item Sub',		// �����Ƭ��Ŀ�ĸ������ƣ�������ַ�Դ��Ϣ�����ʵ����Ƭ������ͼ��λ��ͼ��
            'item_name' => 'Item Name',		// �����Ƭ��Ŀ�����ƣ�������ַ��ǣ�second
            'path' => 'Path',
        ];
    }

    public function create($item_id, $item_sub='', $item_name, $path){
    	$this->item_id		= $item_id;
    	$this->item_sub		= $item_sub;
    	$this->item_name	= $item_name;
    	$this->path			= $path;
    	return $this->save();
    }

    public static function hasPics($item_id, $item_sub='', $item_name){
    	$pics = [];
    	if($item_sub<>''){
    		$pics = self::find()->where(['item_name' => $item_name, 'item_sub' => $item_sub, 'item_id' => $item_id])->all();
    	}
    	else{
    		$pics = self::find()->where(['item_name' => $item_name, 'item_id' => $item_id])->all();
    	}
    	return $pics;
    }
}
