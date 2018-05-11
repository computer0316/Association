<?php

/* @var $this yii\web\View */
//use Yii;
use backend\models\User;
use backend\models\Second;

$this->title = 'My Yii Application';
?>
<style>
	.index-box{
		float:left;
		width:300px;
		margin:20px;
		border:1px solid #999;
	}
	.index-box img{
		float:left;
		width:100px;
		margin:10px;
		background:#8899ff;

		border-radius:5px;
	}
	.index-box p{
		float:left;
	}
	.index-number{
		width:150px;
		font-size:36px;
		color:#f68714;
		margin:20px 10px 10px 10px;
	}
	.index-item{
		margin-left:10px;
	}
</style>
<div>
	<div class="index-box">
		<img src="web/icon/house.png" />
		<p class="index-number"><?= Second::find()->where('userid =' . Yii::$app->session->get('userid'))->count() ?></p>
		<p class="index-item">二手房源总量</p>
	</div>
	<div class="index-box">
		<img src="web/icon/house.png" />
		<p class="index-number">0</p>
		<p class="index-item">出租房源总量</p>
	</div>
</div>
