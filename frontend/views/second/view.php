<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use common\models\Picture;

/* @var $this yii\web\View */
/* @var $model backend\models\Second */

$this->title = '房源编号：'. $model->id;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
<?php
	$labels = $model->attributeLabels();
	foreach($model as $key => $value){
		echo $labels[$key] . ' ' . myecho($value) . '<br />';
	}
	$pics = Picture::hasPics($model->id,'','second');
	if($pics){
		foreach($pics as $pic){
			echo '<img src="' . $pic->path . '" />';
		}
	}
?>
</div>
<?php

	function myecho($var){
		if($var){
			return $var;
		}
	}