<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use common\models\Picture;
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
		<p class="title"><?php echo $model->community . $model->birth . '年' . $model->decoration . '房' . $model->price . '万' . $model->area . '平米'; ?></p>
		<p class="tips single">房源编号：<?= $model->id ?></p>
		<p class="tips">2018-04-27</p><p class="tips">384人浏览</p>
	</div>

	<div class="all">
		<div class="top-img">
			<div class="activeimg">
			<img src="uploads/1/2018/04/16-53-06-00.jpg" />
<img src="uploads/1/2018/04/16-53-06-01.jpg" />
<img src="uploads/1/2018/04/16-53-06-02.jpg" />
<img src="uploads/1/2018/04/16-53-06-03.jpg" />
<img src="uploads/1/2018/04/16-53-06-04.jpg" />
			</div>
			<div class="left"><img src="images/left.png"> </div>
			<div class="right"><img src="images/right.png"></div>
		</div>
		<!-- 存放缩略图的容器-->
		<div class="bot-img">
			<ul>
				<li><img src="uploads/1/2018/04/16-53-06-00.jpg" /></li>
<li><img src="uploads/1/2018/04/16-53-06-01.jpg" /></li>
<li><img src="uploads/1/2018/04/16-53-06-02.jpg" /></li>
<li><img src="uploads/1/2018/04/16-53-06-03.jpg" /></li>
<li><img src="uploads/1/2018/04/16-53-06-04.jpg" /></li>
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
			<p>小区：<?= $model->community ?> </p>
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
