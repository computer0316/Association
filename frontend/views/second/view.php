<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use common\models\Picture;

/* @var $this yii\web\View */
/* @var $model backend\models\Second */

$this->title = '房源编号：'. $model->id;
$this->params['breadcrumbs'][] = $this->title;
?>
<style>

</style>
<div class="container">
	<div id="title-div" class="">
		<p class="title">938总站附近大三居仅115万好楼层 无遮挡 全天采光</p>
		<p class="tips single">房源编号：<?= $model->id ?></p>
		<p class="tips">2018-04-27</p><p class="tips">384人浏览</p>
	</div>
	<div class="all">
		<div class="top-img">
			<div class="activeimg">
			<?php
				$pics = Picture::hasPics($model->id,'','second');
				if($pics){
					foreach($pics as $pic){
						echo '<img src="' . $pic->path . '" />' . "\n";
					}
				}
			?>
			</div>
			<div class="left"><img src="images/left.png"> </div>
			<div class="right"><img src="images/right.png"></div>
		</div>
		<!-- 存放缩略图的容器-->
		<div class="bot-img">
			<ul>
				<?php
					$pics = Picture::hasPics($model->id,'','second');
					if($pics){
						foreach($pics as $pic){
							echo '<li><img src="' . $pic->path . '" /></li>' . "\n";
						}
					}
				?>
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
			<p><?= $model->direction ?></p>
		</div>
		<div id="floor">
			<p><?= $model->floor ?> 层 / 共 <?= $model->total_floor ?> 层</p>
			<p><?= $model->decoration ?></p>
			<p><?= $model->birth ?>建</p>
		</div>
		<div id="community">
			<p>小区：<?= $model->community ?> </p>
			<p class="single">位置：<?= $model->position ?></p>
		</div>
	</div>
</div>
<div class="container">
	<p class="spciality-title">描述</p>
	<p class="spciality">
		<?= $model->specialty ?>
	</p>
</div>
