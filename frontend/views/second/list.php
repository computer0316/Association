<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\LinkPager;

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
.list{
	width:84%;
	padding:30px 0;
	border-bottom:1px solid #f1f1f1;
}
.list:hover{
	background:#f1f1f1;
}
.list img{
	width:146px;
}
.list-first-line{
	width:700px;
}
.list-line{
	width:700px;
	margin-top:10px;
}
.list-title{
	font-size:20px;
	font-weight:bold;
	margin-left:20px;
}
.list-item{
	font-size:12px;
	color:#666;
}
.list-price{
	float:right;
	width:150px;
	height:120px;
}
.price{
	font-size:24px;
	color:orangered;
	margin-top:32px;

}
.price-unit{
	font-size:12px;
	margin-top:44px;
	color:orangered;

}
.perprice{
	font-size:12px;
	color:#666;
	clear:left;
}
        .pagination{
        	list-style-type:none;
        	margin:0;
        	padding:0;
        }
        .pagination li{
        	border:1px solid deepskyblue;
        	margin:0 10px;
        	float:left;
        }
        .pagination li a{
        	display:block;
        	padding:2px 8px;
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
		<p class="label">面积：</p><p class="item">不限</p><p class="item">50㎡以下</p><p class="item">50-70㎡</p><p class="item">70-90㎡</p><p class="item">90-110㎡</p><p class="item">110-130㎡</p><p class="item">130-150㎡</p><p class="item">150-200㎡</p><p class="item">200-300㎡</p><p class="item">300-500㎡</p><p class="item">500㎡以上</p>
	</div>
	<div class="line">
		<p class="label">厅室：</p><p class="item">不限</p><p class="item">一室</p><p class="item">二室</p><p class="item">三室</p><p class="item">四室</p><p class="item">四室以上</p>
	</div>
</div>
<div class="container">
		<?php
		foreach($seconds as $second){
		?>
			<div class="list">
				<div class="list-price">
					<p class="price"><?= floor($second->price) ?></p><p class="price-unit">万元</p>
					<p class="perprice"><?= floor(($second->price * 10000) / $second->area) ?>元/㎡</p>
				</div>

				<img src="<?= smallPic(1) ?>" />
				<div class="list-first-line">
					<?php echo '<a href="?r=second/view&id=' . $second->id . '"><p class="list-title">' . $second->community . $second->birth . '年' . $second->decoration . '房' . $second->price . '万' . $second->area . '平米</p></a>'; ?>
				</div>
				<div class="list-line">
					<p class="item"><?= $second->room ?>室<?= $second->hall ?>厅<?= $second->toilet ?>卫</p>
					<p class="item"><?= $second->area ?>㎡</p>
					<p class="item"><?= $second->direction ?></p>
					<p class="item"><?= $second->floor ?> 层 / 共 <?= $second->total_floor ?> 层</p>
				</div>
				<div class="list-line">
					<p class="item"><?= $second->community ?></p>
						<p class="item"><?= $second->position ?></p>
				</div>
			</div>
		<?php
		}
		echo LinkPager::widget(['pagination' => $pagination,]);
		?>
</div>

<?php
	function smallPic($id){
		return Html::encode("uploads/1/2018/04/13-48-12-00.jpg");
	}
?>