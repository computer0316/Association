<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use common\models\Picture;
use frontend\models\BaseCommunity;
use frontend\models\BaseDecoration;
use frontend\models\BaseHousetype;
use frontend\models\BaseDirection;
use frontend\models\BaseConstructure;
/* @var $this yii\web\View */
/* @var $model backend\models\Second */

$this->title = '房源编号：'. $model->id;
$this->params['breadcrumbs'][] = $this->title;
?>
<style>

</style>
<div class="container">
	<div id="title-div" class="">
		<p class="title"><?php echo BaseCommunity::findOne($model->community_id)->name . $model->birth . '年' . $model->decoration . '房' . $model->price . '万' . $model->area . '平米'; ?></p>
		<p class="tips single">房源编号：<?= $model->id ?></p>
		<p class="tips"><?= date("m-d", strtotime($model->updatetime)) ?></p><p class="tips"><?= $model->visit ?>人浏览</p>
	</div>

	<div class="all">
		<div class="top-img">
			<div class="activeimg">
			<img src="images/1.jpg" />
			<img src="images/2.jpg" />
			<img src="images/3.jpg" />
			<img src="images/4.jpg" />
			<img src="images/5.jpg" />
			<img src="images/1.jpg" />
			<img src="images/2.jpg" />
			<img src="images/3.jpg" />
			<img src="images/4.jpg" />
			<img src="images/5.jpg" />
			</div>
			<div class="left"><img src="images/left.png"> </div>
			<div class="right"><img src="images/right.png"></div>
		</div>
		<!-- 存放缩略图的容器-->
		<div class="bot-img">
			<ul>
				<li><img src="images/1.jpg" /></li>
				<li><img src="images/2.jpg" /></li>
				<li><img src="images/3.jpg" /></li>
				<li><img src="images/4.jpg" /></li>
				<li><img src="images/5.jpg" /></li>
				<li><img src="images/1.jpg" /></li>
				<li><img src="images/2.jpg" /></li>
				<li><img src="images/3.jpg" /></li>
				<li><img src="images/4.jpg" /></li>
				<li><img src="images/5.jpg" /></li>
			</ul>
		</div>
	</div>
	<div id="detail-div">
		<div id="detail-price">
			<span style="color:orangered;font-size:27px;"><?= floor($model->price) ?></span><span style="color:orangered;">万</span>
			<span>&nbsp;&nbsp;&nbsp;<?= floor($model->price * 10000/$model->area) ?></span><span> 元/平米</span>
		</div>
		<div id="area">
			<p><?= $model->room ?>室<?= $model->hall ?>厅<?= $model->toilet ?>卫</p>
			<p><?= $model->area ?>平</p>
			<p><?= BaseDirection::findOne($model->direction)->name ?></p>
		</div>
		<div id="floor">
			<p><?= $model->floor ?> 层 / 共 <?= $model->total_floor ?> 层</p>
			<p><?= BaseDecoration::findOne($model->decoration)->name ?></p>
			<p><?= $model->birth ?>建</p>
		</div>
		<div id="community">
			<p>小区：<?= BaseCommunity::findOne($model->community_id)->name ?> </p>
			<p class="single">位置：<?= $model->position ?></p>
		</div>
	</div>
</div>
<div class="container">
	<div class="content-left">
		<p class="spciality-title">概况</p>
		<div class="content-div">
			<p class="label">房屋总价</p><p class="content-p"><?= $model->price ?>（单价<?= floor($model->price* 10000/$model->area) ?>元㎡）</p>
			<p class="label">所在楼层</p><p class="content-p"><?= $model->floor ?> 层 / 共 <?= $model->total_floor ?> 层</p>
		</div>
		<div class="content-div">
			<p class="label">房屋户型</p><p class="content-p"><?= $model->room ?>室<?= $model->hall ?>厅<?= $model->toilet ?>卫</p>
			<p class="label">装修情况</p><p class="content-p"><?= BaseDecoration::findOne($model->decoration)->name ?></p>
		</div>
		<div class="content-div">
			<p class="label">房本面积</p><p class="content-p"><?= $model->area ?></p>
			<p class="label">产权年限</p><p class="content-p"><?= $model->birth ?></p>
		</div>
		<div class="content-div">
			<p class="label">房屋朝向</p><p class="content-p"><?= BaseDirection::findOne($model->direction)->name ?></p>
			<p class="label">建筑年代</p><p class="content-p"><?= $model->birth ?></p>
		</div>

		<p class="spciality-title">描述</p>
		<p class="spciality">
			<?= $model->house_info ?>
		</p>
	</div>
	<div class="content-right">
		2222222
	</div>
</div>
