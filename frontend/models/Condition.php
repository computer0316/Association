<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use frontend\models\BaseCommunity;

/**
 * Create condition string use in mysql where field
 *
 * @property User|null $user This property is read-only.
 *
 */
class Condition extends Model
{
	// join two conditions to one
    public static function join($old, $new){
    	if($old <> ''){
    		if($new <> ''){
    			return $old . ' and ' . $new;
    		}
    		else{
    			return $old;
    		}
    	}
    	else{
    		return $new;
    	}
    }

    public static function createCommunity($c){
    	if($c > 0){
   			return 'community_id = ' . $c;
    	}
    	else{
			return '';
    	}
    }

	public static $priceLevel = [
		'1'	=> ['小于30万', 'price < 30'],
    	'2' => ['30-50万', 'price > 30 and price < 50'],
    	'3' => ['50-70万', 'price > 50 and price < 70'],
    	'4' => ['70-90万', 'price > 70 and price < 90'],
    	'5' => ['90-120万', 'price > 90 and price < 120'],
    	'6' => ['120-150万', 'price > 120 and price < 150'],
    	'7' => ['150-200万', 'price > 150 and price < 200'],
    	'8' => ['200-300万', 'price > 200 and price < 300'],
    	'9' => ['300-500万', 'price > 300 and price < 500'],
    	'10' => ['500万以上', 'price > 500'],
	];

	// return the price condition string according to the given price index
	public static function createPrice($priceNum){
		if($priceNum >= 1 and $priceNum <= 10){
			return self::$priceLevel[$priceNum][1];
		}
		else{
			return '';
		}
	}

	public static $areaLevel = [
		'1' => ['小于50㎡', 'area < 50'],
		'2' => ['50-70㎡', 'area >50  and area < 70'],
		'3' => ['70-90㎡', 'area > 70 and area < 90'],
		'4' => ['90-110㎡', 'area > 90 and area < 110'],
		'5' => ['110-130㎡', 'area > 110 and area < 130'],
		'6' => ['130-150㎡', 'area > 130 and area < 150'],
		'7' => ['150-200㎡', 'area > 150 and area < 200'],
		'8' => ['200-300㎡', 'area > 200 and area < 300'],
		'9' => ['300-500㎡', 'area > 300 and area < 500'],
		'10' => ['大于500㎡', 'area > 500'],
	];

	// return the area condition string according to the given area index
	public static function createArea($areaNum){
		if($areaNum >= 1 and $areaNum <= 10){
			return self::$areaLevel[$areaNum][1];
		}
		else{
			return '';
		}
	}

	public static $roomLevel = [
		'1' => ['一室', 'room = 1'],
		'2' => ['二室', 'room = 2'],
		'3' => ['三室', 'room = 3'],
		'4' => ['四室', 'room = 4'],
		'5' => ['四室以上', 'room > 4'],
	];

	// return the room condition string according to the given room index
	public static function createRoom($roomNum){
		if($roomNum >= 1 and $roomNum <= 10){
			return self::$roomLevel[$roomNum][1];
		}
		else{
			return '';
		}
	}

}
