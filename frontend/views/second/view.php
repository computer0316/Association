<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use common\models\Picture;
use frontend\models\BaseDecoration;
use frontend\models\BaseHousetype;
use frontend\models\BaseDirection;
use frontend\models\BaseConstructure;
use frontend\models\User;

/* @var $this yii\web\View */
/* @var $model backend\models\Second */

$this->title = '房源编号：'. $model->id;
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
.bigpic{
	float:left;
	margin-top:20px;
	margin-right:20px;
	width:480px;
	height:360px;
}
.content-right{
	width:180px;
}
#broker{
	width:100%;
	height:160px;
	margin-top:20px;
}
#broker .username{
	margin:30px 20px;
	font-size:20px;
	clear:right;
	width:100%;
}
#broker .company{
	margin:0 20px;
}
#mobile{
	width:100%;
	height:88px;
	margin-top:10px;
	line-height:88px;
	background:orange;
	text-align:center;
	font-size:36px;
}
#portrait{
	width:108px;
	height:160px;
}
</style>
<div class="container">
	<div id="title-div" class="">
		<p class="title"><?php echo $model->community . $model->birth . '年' . $model->decoration . '房' . $model->price . '万' . $model->area . '平米'; ?></p>
		<p class="tips single">房源编号：<?= $model->id ?></p>
		<p class="tips"><?= date("m-d", strtotime($model->updatetime)) ?></p><p class="tips"><?= $model->visit ?>人浏览</p>
	</div>

	<div class="all">
		<div class="top-img">
			<div class="activeimg">
				<?php
					$pics = Picture::getPics($model->id, '', 'second');
					if($pics){
						foreach($pics as $p){
							echo '<img src="' . $p->path . '" />';
						}
					}
				?>
			</div>
			<div class="left"><img class="img-icon" src="web/images/left.png"> </div>
			<div class="right"><img class="img-icon" src="web/images/right.png"></div>
		</div>
		<!-- 存放缩略图的容器-->
		<div class="bot-img">
			<ul>
				<?php
					if($pics){
						foreach($pics as $p){
							echo '<li><img src="' . $p->path . '" /></li>';
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
		<div id="broker">
		<?php
			$user = User::findOne($model->userid);
			echo '<img id="portrait" src="' . $user->getPortrait() . '" />';
			echo '<div>';
				echo '<p class="username">' . $user->name . '</p>';
				echo '<p class="company">所属公司：' . '中介公司' . '</p>';
			echo '</div>';

		?>
		</div>
		<?php echo '<p id="mobile">' . $user->mobile . '</p>'; ?>
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

		<p class="spciality-title">房源描述</p>
		<p class="spciality">
			<?= $model->house_info ?>
		</p>
		<p class="spciality-title">业主心态</p>
		<p class="spciality">
			<?= $model->mood ?>
		</p>
		<p class="spciality-title">公司服务</p>
		<p class="spciality">
			<?= $model->service ?>
		</p>
		<p class="spciality-title">户型</p>
		<?php
			$pictures = Picture::getPics($model->id, '', 'second');
			if($pictures){
				foreach($pictures as $p){
					echo '<img class="bigpic" src="' . $p->path . '" />';
				}
			}
		?>
	</div>
	<div class="content-right">

	</div>
</div>
