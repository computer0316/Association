<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "second".
 *
 * @property integer $id
 * @property string $title
 * @property integer $inner_id
 * @property integer $city_id
 * @property string $community
 * @property string $position
 * @property integer $type
 * @property integer $constructure
 * @property string $building_id
 * @property string $unit_id
 * @property string $room_id
 * @property string $price
 * @property string $area
 * @property string $inner_area
 * @property integer $room
 * @property integer $hall
 * @property integer $toilet
 * @property string $direction
 * @property integer $floor
 * @property integer $total_floor
 * @property integer $decoration
 * @property integer $birth
 * @property integer $can_own
 * @property integer $own_type
 * @property integer $licence_year
 * @property integer $only_house
 * @property string $house_info
 * @property string $mood
 * @property string $service
 * @property string $property_fee
 * @property integer $visit
 * @property string $updatetime
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
			[['title', 'community',  'room', 'hall', 'toilet', 'floor', 'total_floor', 'area', 'birth', 'price', 'only_house', 'licence_year'], 'required'],
			[['housetype', 'constructure', 'decoration', 'direction','can_own', 'own_type'], 'integer', 'message' => '{attribute}必须选择'],
            [['inner_id', 'city_id', 'room', 'hall', 'toilet', 'floor', 'total_floor', 'birth', 'licence_year', 'only_house', 'visit'], 'integer'],
            [['price', 'area', 'inner_area', 'property_fee'], 'number'],
            [['updatetime'], 'safe'],
            [['title', 'community', 'position'], 'string', 'max' => 128],
            [['building_id', 'unit_id', 'room_id'], 'string', 'max' => 8],
            [['house_info', 'mood', 'service'], 'string', 'max' => 512],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
             'id' => 'ID',
            'title' => '标题',
            'inner_id' => '公司内部编号',
            'city_id' => '城市编号',
            'community' => '小区名称',
            'position' => '坐落位置',
            'housetype' => '房屋类型',
            'constructure' => '结构类型',
            'building_id' => '栋号',
            'unit_id' => '单元',
            'room_id' => '房号',
            'price' => '价格',
            'area' => '建筑面积',
            'inner_area' => '套内面积',
            'room' => '室',
            'hall' => '厅',
            'toilet' => '卫',
            'direction' => '朝向',
            'floor' => '楼层',
            'total_floor' => '总层数',
            'decoration' => '装修程度',
            'birth' => '建成年份',
            'can_own' => '产权年限',
            'own_type' => '产权类型',
            'licence_year' => '房本年份',
            'only_house' => '唯一住房',
            'house_info' => '房源介绍',
            'mood' => '房主心情',
            'service' => '服务介绍',
            'visit' => 'Visit',
            'property_fee' => '物业费',
            'updatetime' => '提交时间',
        ];
    }
}
