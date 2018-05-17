<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;
use yii\widgets\LinkPager;

use common\models\PictureManager;

use frontend\models\BaseDecoration;
use frontend\models\Condition;

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
	padding:30px 0;
	border-bottom:1px solid #f1f1f1;
}
.list:hover{
	background:#f1f1f1;
}
.list img{
	width:146px;
	height:110px;
}
.list-first-line{
	width:500px;
}
.list-line{
	width:500px;
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
        #form{
        	border:1px solid #ddd;
        	border-radius:5px;
            width:800px;
        	height:40px;
        	margin:30px 80px;
        }
        #form input{
        	float:left;
        	outline:none;
        	border:0;
        	width:690px;
        	height:30px;
        	margin:3px;
        }
        #form button{
        	float:right;
        	border:1px solid orange;
        	border-radius:0 5px 5px 0;
        	width:90px;
        	height:40px;
        	background:orange;
        	color:white;
        	border:0px;
        }
        #main-left{
        	width:70%;
        }
        #main-right{
        	width:29%;
        	border:1px solid #ddd;
        	border-radius:5px;
        	margin-top:10px;
        }
        .list-adv{
        	width:100%;
        	margin-top:10px;
        	text-align:center;
        }
        .list-adv p{
        	font-size:16px;
        	margin-bottom:20px;
        	float:none;
        }
        .p2{
        	color:orangered;
        }
        .list-adv img{
        	float:none;
        	width:320px;
        	height:240px;
        	margin:10px;
        }
</style>
<?php
	$district = [
		'0' => '不限',
		'131003' => '广阳',
		'131002' => '安次',
		'131001' => '开发区'
	];
?>
<div class="container header">
	<img src="web/images/logo.jpg" />
	<div id="form">
	<?php
    	$form = ActiveForm::begin(['action' => Url::toRoute('second/list')]);
	        echo $form->field($search, 'text')->label(false)->textInput(['placeholder' => "请输入小区名称、地址..."]);
			echo Html::submitButton('搜索房源');
		ActiveForm::end();
	?>
	</div>
</div>
<!--
<div class="nav">
	<div class="container">
		<ul class="nav-ul">
			<li><a href="#">网站首页</a></li>
			<li><a href="#">廊坊新房</a></li>
			<li><a href="#">廊坊二手房</a></li>
			<li><a href="#">廊坊出租</a></li>
			<li><a href="#">房产资讯</a></li>
			<li><a href="#">廊坊求购</a></li>
		</ul>
	</div>
</div>
-->
<div class="container">
		<?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
</div>
<div class="container">
	<div class="line">
		<p class="label">区域：</p>
		<?php
			Url::current($searchUrlArray + ['s' => 'aa']);
			foreach($district as $key => $value){
				echo '<p class="item">';
				if($key == $d){
					echo '<a class="active" href="' . Url::current($searchUrlArray +$searchUrlArray + ['d' => $key]) . '">' . $value . '</a>';
				}
				else{
					echo '<a class="normal" href="' . Url::current($searchUrlArray + ['d' => $key]) . '">' . $value . '</a>';
				}
				echo '</p>';
			}
		?>
	</div>
	<div class="line">
		<p class="label">总价：</p>
		<?php
			foreach(Condition::$priceLevel as $key => $value){
				echo '<p class="item">';
				if($key == $p){
					echo '<a class="active" href="' . Url::current($searchUrlArray + ['p' => $key]) . '">' . $value[0] . '</a>';
				}
				else{
					echo '<a class="normal" href="' . Url::current($searchUrlArray + ['p' => $key]) . '">' . $value[0] . '</a>';
				}
				echo '</p>';
			}
		?>
	</div>
	<div class="line">
		<p class="label">面积：</p>
		<?php
			foreach(Condition::$areaLevel as $key => $value){
				echo '<p class="item">';
				if($key == $a){
					echo '<a class="active" href="' . Url::current($searchUrlArray + ['a' => $key]) . '">' . $value[0] . '</a>';
				}
				else{
					echo '<a class="normal" href="' . Url::current($searchUrlArray + ['a' => $key]) . '">' . $value[0] . '</a>';
				}
				echo '</p>';
			}
		?>
	</div>
	<div class="line">
		<p class="label">厅室：</p>
		<?php
			foreach(Condition::$roomLevel as $key => $value){
				echo '<p class="item">';
				if($key == $ro){
					echo '<a class="active" href="' . Url::current($searchUrlArray + ['ro' => $key]) . '">' . $value[0] . '</a>';
				}
				else{
					echo '<a class="normal" href="' . Url::current($searchUrlArray + ['ro' => $key]) . '">' . $value[0] . '</a>';
				}
				echo '</p>';
			}
		?>
	</div>
</div>
<div class="container">
	<div id="main-left">
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

					<img src="<?= smallPic($second->id) ?>" />
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
	<div id="main-right">
		<div class="list-adv">
			<img src="web/images/38.jpg" />
			<p><span class="p1">金桥小区优质房源</span> <span class="p2">350万</span></p>
		</div>
		<div class="list-adv">
			<img src="web/images/50.jpg" />
			<p><span class="p1">金桥小区优质房源</span> <span class="p2">350万</span></p>
		</div>
		<div class="list-adv">
			<img src="web/images/51.jpg" />
			<p><span class="p1">金桥小区优质房源</span> <span class="p2">350万</span></p>
		</div>
		<div class="list-adv">
			<img src="web/images/52.jpg" />
			<p><span class="p1">金桥小区优质房源</span> <span class="p2">350万</span></p>
		</div>
		<div class="list-adv">
			<img src="web/images/53.jpg" />
			<p><span class="p1">金桥小区优质房源</span> <span class="p2">350万</span></p>
		</div>

	</div>
</div>

<?php
	function smallPic($id){
		return common\models\PictureManager::getImage($id, 'second')->path;
	}
?>