<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use yii\widgets\LinkPager;

use common\models\Picture;

use frontend\models\BaseDecoration;

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
.item{
	color:#999;
}
.active{
	color:red;
}
.normal{
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
<?php
	$district = [
		'0' => '不限', 
		'131003' => '广阳', 
		'131002' => '安次', 
		'131001' => '开发区'
	];
	$price = [
		'0'	=> '不限',
		'1' => '30万以下', 
		'2' => '30-40万', 
		'3' => '40-50万', 
		'4' => '50-60万', 
		'5' => '60-80万', 
		'6' => '80-100万', 
		'7' => '100-120万', 
		'8' => '120-160万', 
		'9' => '160-200万', 
		'10' => '200万以上'
	] ;
	$area = [
		'0' => '不限', 
		'1' => '50㎡以下', 
		'2' => '50-70㎡', 
		'3' => '70-90㎡', 
		'4' => '90-110㎡', 
		'5' => '110-130㎡', 
		'6' => '130-150㎡', 
		'7' => '150-200㎡', 
		'8' => '200-300㎡', 
		'9' => '300-500㎡', 
		'10' => '500㎡以上'
	];
	$room = [
		'0' => '不限', 
		'1' => '一室', 
		'2' => '两室', 
		'3' => '三室', 
		'4' => '四室', 
		'5' => '四室以上'
	];
?>
<div class="container">
	<div class="line">
		
		<p class="label">区域：</p>
		<?php
			foreach($district as $key => $value){
				echo '<p class="item">';
				if($key == $d){
					echo '<a class="active" href="' . Url::current(['d' => $key]) . '">' . $value . '</a>';
				}
				else{
					echo '<a class="normal" href="' . Url::current(['d' => $key]) . '">' . $value . '</a>';
				}
				echo '</p>';
			}
		?>
	</div>
	<div class="line">
		<p class="label">总价：</p>
		<?php
			foreach($price as $key => $value){
				echo '<p class="item">';
				if($key == $p){
					echo '<a class="active" href="' . Url::current(['p' => $key]) . '">' . $value . '</a>';
				}
				else{
					echo '<a class="normal" href="' . Url::current(['p' => $key]) . '">' . $value . '</a>';
				}
				echo '</p>';
			}
		?>
	</div>
	<div class="line">
		<p class="label">面积：</p>
		<?php
			foreach($area as $key => $value){
				echo '<p class="item">';
				if($key == $a){
					echo '<a class="active" href="' . Url::current(['a' => $key]) . '">' . $value . '</a>';
				}
				else{
					echo '<a class="normal" href="' . Url::current(['a' => $key]) . '">' . $value . '</a>';
				}
				echo '</p>';
			}
		?>
	</div>
	<div class="line">
		<p class="label">厅室：</p>
		<?php
			foreach($room as $key => $value){
				echo '<p class="item">';
				if($key == $ro){
					echo '<a class="active" href="' . Url::current(['ro' => $key]) . '">' . $value . '</a>';
				}
				else{
					echo '<a class="normal" href="' . Url::current(['ro' => $key]) . '">' . $value . '</a>';
				}
				echo '</p>';
			}
		?>
	</div>
</div>
<div class="container">
		<?php
		if($seconds){
			foreach($seconds as $second){
			?>
				<div class="list">
					<div class="list-price">
						<p class="price"><?= floor($second->price) ?></p>
						<p class="price-unit">万元</p>
						<p class="perprice"><?= floor(($second->price * 10000) / $second->area) ?>元/㎡</p>
					</div>

					<img src="<?= smallPic(1) ?>" />
					<div class="list-first-line">
						<?php echo '<a href="?r=second/view&id=' . $second->id . '"><p class="list-title">' . $second->community . $second->birth . '年' . $second->decoration . '房' . $second->price . '万' . $second->area . '平米</p></a>'; ?>
					</div>
					<div class="list-line">
						<p class="item"><?= $second->room ?>室<?= $second->hall ?>厅<?= $second->toilet ?>卫</p>
						<p class="item"><?= $second->area ?>㎡</p>
						<p class="item"><?= BaseDecoration::findOne($second->decoration)->name ?></p>
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
		}
		else{
			echo '<p style="margin:100px;">没有找到符合条件的房源</p>';
		}
		?>
</div>

<?php
	function smallPic($id){
		return Html::encode("uploads/1/2018/04/13-48-12-00.jpg");
	}
?>