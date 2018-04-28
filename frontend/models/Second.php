<?php

namespace frontend\models;

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
            [['room', 'hall', 'toilet', 'floor', 'total_floor', 'birth', 'visit'], 'integer'],
            [['community', 'position'], 'string', 'max' => 128],
            [['type', 'decoration'], 'string', 'max' => 16],
            [['building_id', 'unit_id', 'room_id', 'direction'], 'string', 'max' => 8],
            [['traffic'], 'string', 'max' => 256],
            [['specialty'], 'string', 'max' => 512],
            [['company', 'property_company'], 'string', 'max' => 64],
            [['updatetime'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'community' => 'Community',
            'position' => 'Position',
            'type' => 'Type',
            'building_id' => 'Building ID',
            'unit_id' => 'Unit ID',
            'room_id' => 'Room ID',
            'price' => 'Price',
            'area' => 'Area',
            'room' => 'Room',
            'hall' => 'Hall',
            'toilet' => 'Toilet',
            'direction' => 'Direction',
            'floor' => 'Floor',
            'total_floor' => 'Total Floor',
            'decoration' => 'Decoration',
            'birth' => 'Birth',
            'traffic' => 'Traffic',
            'specialty' => 'Specialty',
            'property_fee' => 'Property Fee',
            'company' => 'Company',
            'property_company' => 'Property Company',
            'visit'	=> '访问量',
            'updatetime' => '时间',
        ];
    }
}
