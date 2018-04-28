<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use common\models\Picture;

/* @var $this yii\web\View */
/* @var $model backend\models\Second */

$this->title = '房源列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
	.line{
		width:100%;
		margin-top:10px;
	}
.label{
	font-size:12px;
	color:#666;
	width:40px;
}
.item{
	font-size:12px;
	margin-left:20px;
	color:#999;
}
</style>
<div class="container">
	<div class="line">
		<p class="label">区域：</p><p class="item">不限</p><p class="item">广阳</p><p class="item">安次</p><p class="item">开发区</p>
	</div>
	<div class="line">
		<p class="label">总价：</p><p class="item">不限</p><p class="item">30万以下</p><p class="item">30-40万</p><p class="item">40-50万</p><p class="item">50-60万</p><p class="item">60-80万</p><p class="item">80-100万</p><p class="item">100-120万</p><p class="item">120-160万</p><p class="item">160-200万</p><p class="item">200万以上</p>
	</div>
	<div class="line">
		<p class="label">面积：</p><p class="item">不限</p><p class="item">50㎡以下</p><p class="item">50-70㎡</p><p class="item">70-90㎡</p><p class="item">90-110㎡</p><p class="item">110-130㎡</p><p class="item">130-150㎡</p><p class="item">150-200㎡</p><p class="item">200-300㎡</p><p class="item">300-500㎡</p><p class="item">500㎡<以上/p>
	</div>
	<div class="line">
		<p class="label">厅室：</p><p class="item">不限</p><p class="item">一室</p><p class="item">二室</p><p class="item">三室</p><p class="item">四室</p><p class="item">四室以上</p>
	</div>
</div>
<div class="container">
		<?php
		foreach($seconds as $second){
		?>
			<div clsss="list">
				<?= ?>
			echo '<tr>';
			echo '<td>' . $second->community . '</td>';
			echo '<td>' . $second->position . '</td>';
			echo '<td>' . $second->price . '</td>';
			echo '<td>' . $second->area . '</td>';

			echo '<td>' . $second->room . '室' . $second->hall . '厅' . $second->toilet . '卫</td>';
			echo '<td>' . $second->direction . '</td>';
			echo '<td>' . $second->floor . '/' . $second->total_floor . '</td>';
			echo '<td>' . $second->decoration . '</td>';
			echo '<td>' . $second->birth . '</td>';
			echo '<td>' . $second->company . '</td>';
			echo '<td>' . $second->property_company . '</td>';
			echo '</tr>';

			</div>
		<?php
		}
		?>
</div>

<?php
	function smallPic($id){

	}
?>