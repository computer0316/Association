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
class Search extends \yii\base\Model
{
	public $text;

	public function rules(){
		return [
			['text', 'string', 'max' => 40 ],
		]
	}
}
