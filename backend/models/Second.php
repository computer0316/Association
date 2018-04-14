<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "second".
 *
 * @property integer $id
 * @property integer $community_id
 * @property string $position
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
 * @property integer $company
 * @property integer $property_company
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
            [['community_id', 'price', 'area', 'room', 'hall', 'toilet', 'direction', 'floor', 'total_floor', 'decoration', 'birth', 'traffic', 'specialty', 'property_fee', 'company', 'property_company'], 'required'],
            [['community_id', 'room', 'hall', 'toilet', 'floor', 'total_floor', 'birth', 'company', 'property_company'], 'integer'],
            [['price', 'area', 'property_fee'], 'number'],
            [['position', 'traffic', 'specialty'], 'string', 'max' => 128],
            [['direction'], 'string', 'max' => 8],
            [['decoration'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'community_id' => '小区',
            'position' => '位置',
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
