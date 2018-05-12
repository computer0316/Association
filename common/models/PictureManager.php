<?php

namespace common\models;

use Yii;
use common\models\Picture;
use common\models\UploadForm;

/**
 * This is the model class for table "picture".
 *
 * @property integer $id
 * @property integer $item_id
 * @property string $item_sub
 * @property string $item_name
 * @property string $path
 */
class PictureManager extends \yii\base\Model
{
	const MONTH_PATH	= 'month';
	const CURRENT_PATH	= 'current';

	// 把上传的文件存储到硬盘，文件名存储进数据库
	// itemId 调用本函数的项目的id，比如二手房则是用户ID：$userid
	// itemName 调用本函数的项目的id，比如二手房则是用户ID：'second'，头像：'portrait'，身份证：'identification'
	// itemSub 调用本函数的项目的子编码，比如二手房里面用于区分户型图、环境图等
	// 文件的存储的路径
	public static function saveImages($itemid, $images, $itemName, $itemSub = '1'){
		switch($itemName){
			case 'second':
				// 存储文件到磁盘
				$filepaths = $images->upload($itemid, self::MONTH_PATH);
				// 存储文件名到数据库
				if($filepaths){
		            foreach($filepaths as $filepath){
		            	$pic = new Picture();
						$pic->create($itemid, $itemName, $filepath, $itemSub);
		            }
		        }
		        break;
			case 'portrait':
			case 'identification':
				// 存储文件到磁盘
				$filepaths = $images->upload($itemid, self::CURRENT_PATH);
				// 存储文件名到数据库
				if($filepaths){
		            foreach($filepaths as $filepath){
		            	$pic = new Picture();
						$pic->create($itemid, $itemName, $filepath);
		            }
		        }
		        break;
		}
	}

	public static function getImages($itemid, $itemName, $itemSub=''){
		return Picture::getPics($itemid, $itemName, $itemSub='');
	}

	public static function getImage($itemid, $itemName, $itemSub=''){
		return Picture::getPic($itemid, $itemName, $itemSub='');
	}
}
