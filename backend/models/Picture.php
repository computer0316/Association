<?php

namespace backend\models;

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
            [['item_id', 'item_sub', 'item_name', 'path'], 'required'],
            [['item_id'], 'integer'],
            [['item_sub', 'item_name'], 'string', 'max' => 16],
            [['path'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'item_id' => 'Item ID',			// 存放照片的项目的 ID 号，比如二手房则是 second 表中的 ID
            'item_sub' => 'Item Sub',		// 存放照片项目的辅助名称，比如二手房源信息里面的实景照片、户型图、位置图等
            'item_name' => 'Item Name',		// 存放照片项目的名称，比如二手房是：second
            'path' => 'Path',
        ];
    }

    public static function create($item_id, $item_sub, $item_name, $path){
    	self::$item_id		= $item_id;
    	self::$item_sub		= $item_sub;
    	self::$item_name	= $item_name;
    	self::$path			= $path;
    	self::save();
    }
}
