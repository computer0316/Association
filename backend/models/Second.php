<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "second".
 *
 * @property integer $id
 * @property string $community
 * @property string $position
 * @property string $type
 * @property string $building_id
 * @property string $unit_id
 * @property string $room_id
 * @property string $price
 * @property string $area
 * @property integer $room
 * @property integer $hall
 * @property integer $toilet
 * @property string $direction
 * @property integer $floor
 * @property integer $total_floor
 * @property string $decoration
 * @property integer $birth
 * @property string $traffic
 * @property string $specialty
 * @property string $property_fee
 * @property string $company
 * @property string $property_company
 */
class Second extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'second';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['community'], 'required'],
            [['price', 'area', 'property_fee'], 'number'],
            [['room', 'hall', 'toilet', 'floor', 'total_floor', 'birth'], 'integer'],
            [['community', 'position'], 'string', 'max' => 128],
            [['type', 'decoration'], 'string', 'max' => 16],
            [['building_id', 'unit_id', 'room_id', 'direction'], 'string', 'max' => 8],
            [['traffic', 'specialty'], 'string', 'max' => 256],
            [['company', 'property_company'], 'string', 'max' => 64],
        ];
    }


	// 房屋的类型
	public function getHouseType(){
		return [
			"高层",
			"洋房",
			"公寓",
			"写字楼",
			"商住楼",
			"别墅",
			"平房",
			"四合院",
			"排屋",			
		];
	}
	
	public function getDecoration(){
		return [
			'毛坯',
			'普通装修',
			'精装修',
			'豪华装修',
		];
	}
	
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'community' => '小区',
            'position' => '位置',
            'type' => '房屋类型',
            'building_id' => '楼号',
            'unit_id' => '单元号',
            'room_id' => '房号',
            'price' => '价格',
            'area' => '面积',
            'room' => '室',
            'hall' => '厅',
            'toilet' => '卫',
            'direction' => '朝向',
            'floor' => '第几层',
            'total_floor' => '共几层',
            'decoration' => '装修程度',
            'birth' => '建成年份',
            'traffic' => '交通信息',
            'specialty' => '其他特点',
            'property_fee' => '物业费',
            'company' => '开发商',
            'property_company' => '物业公司',
		];
    }
}
