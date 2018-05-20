<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "second".
 *
 * @property integer $id
 * @property integer $userid
 * @property string $title
 * @property integer $inner_id
 * @property integer $city_id
 * @property integer $community_id
 * @property string $position
 * @property integer $housetype
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
 * @property integer $direction
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
            [['userid', 'title', 'city_id', 'community_id', 'room', 'hall', 'toilet', 'floor', 'total_floor', 'area', 'can_own', 'own_type', 'birth', 'license_year', 'birth', 'only_house', 'price', 'title', 'updatetime'], 'required'],
            [['userid', 'inner_id', 'city_id', 'community_id', 'housetype', 'constructure', 'room', 'hall', 'toilet', 'direction', 'floor', 'total_floor', 'decoration', 'birth', 'can_own', 'own_type', 'license_year', 'only_house', 'visit'], 'integer'],
            [['price', 'area', 'inner_area', 'property_fee'], 'number'],
            [['updatetime'], 'safe'],
            [['title', 'position'], 'string', 'max' => 128],
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
            'userid' => 'Userid',
           'title' => '标题',
            'inner_id' => '公司内部编号',
            'city_id' => '城市编号',
            'community_id' => '小区编号',
            'position' => '位置',
            'housetype' => '房屋类型',
            'constructure' => '结构类型',
            'building_id' => '楼号',
            'unit_id' => '单元',
            'room_id' => '房间',
            'price' => '价格',
            'area' => '建筑面积',
            'inner_area' => '使用面积',
            'room' => '室',
            'hall' => '厅',
            'toilet' => '卫',
            'direction' => '朝向',
            'floor' => '楼层',
            'total_floor' => '总层',
            'decoration' => '装修程度',
            'birth' => '建成年份',
            'can_own' => '产权年限',
            'own_type' => '产权类型',
            'license_year' => '房本时间',
            'only_house' => '唯一住房',
            'house_info' => '房源信息',
            'mood' => '房主心情',
            'service' => '提供服务',
            'property_fee' => '物业费',
            'visit' => '访问次数',
            'updatetime' => '更新时间',
        ];
    }
}
