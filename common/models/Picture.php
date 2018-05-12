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
            'item_id' => 'Item ID',			// 存放照片的项目的 ID 号，比如二手房则是 second 表中的 ID
            'item_sub' => 'Item Sub',		// 存放照片项目的辅助名称，比如二手房源信息里面的实景照片、户型图、位置图等
            'item_name' => 'Item Name',		// 存放照片项目的名称，比如二手房是：second
            'path' => 'Path',
        ];
    }

	// 把上传的文件路径存储进数据库
	// itemId 调用本函数的项目的id，比如二手房则是用户ID：$userid
	// itemName 调用本函数的项目的id，比如二手房则是用户ID：'second'
	// itemSub 调用本函数的项目的子编码，比如二手房里面用于区分户型图、环境图等
	// 文件的存储的路径
    public function create($itemId, $itemName, $path, $itemSub = '1'){
    	$this->item_id		= $itemId;
    	$this->item_name	= $itemName;
    	$this->path			= $path;
    	$this->item_sub		= $itemSub;
    	return $this->save();
    }

    public static function getPics($item_id, $item_name, $item_sub=''){
    	$pics = false;
    	if($item_sub<>''){
    		$pics = self::find()->orderBy('id desc')->where(['item_name' => $item_name, 'item_sub' => $item_sub, 'item_id' => $item_id])->all();
    	}
    	else{
    		$pics = self::find()->orderBy('id desc')->where(['item_name' => $item_name, 'item_id' => $item_id])->all();
    	}
    	return $pics;
    }

    public static function getPic($item_id, $item_name, $item_sub=''){
    	$pics = self::getPics($item_id, $item_name, $itemSub='');
    	if($pics){
    		return $pics[0];
    	}
    	else{
    		$pic = new Picture();
    		$pic->path = 'web/images/error.jpg';
    		return $pic;
    	}
    }

}
