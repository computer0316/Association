<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use yii\widgets\LinkPager;

use common\models\Picture;

/* @var $this yii\web\View */
/* @var $model backend\models\Second */

$this->title = '房源列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
#list{
	float:left;	
	width:800px;
	margin:0 20px;
	list-style-type:none;
}
#list li{
	float:left;
	font-size:14px;

}
#list li:nth-of-type(odd){ background:#e9e9e9;} 

#list li p{
	float:left;
	margin-left:10px;
	line-height:32px;
	white-space:nowrap; text-overflow:ellipsis; overflow:hidden;
}
.s1{
	width:40px;	
}
.s2{
	width:200px;	
	overflow:hidden;
}
.s3{
	width:100px;	
}
#list li img{
	width:20px;
	margin-top:5px;
}

.pagination{
	float:left;
	margin:10px 20px;
	clear:both;
	list-style-type:none;
}
.pagination li{
	float:left;
	margin-left:5px;
	background:#e9e9e9;	
	border:1px solid blue;
}
.pagination a{
	margin:3px 10px;
	display:block;
	width:100%;
}
.pagination li.active{
	background:#aaaaff;
}
.pagination li.disabled{
	padding:3px 10px;
	border:1px solid #e9e9e9;
	text-align:center;
}
</style>

<div class="container">
	<ul id="list">
		<li><p class="s1">编号</p><p class="s2">小区</p><p class="s3">户型</p><p class="s2">价格</p><p class="s3">面积</p><p class="s3">操作</p></li>
		<?php		
		if($seconds){
			foreach($seconds as $second){
			?>
					<li>
						<?php
							echo '<p class="s1">' . $second->id . '</p>';
							echo '<p class="s2">' . $second->community . '</p>';
							echo '<p class="s3">' . $second->room . '室' . $second->hall . '厅' . $second->toilet . '卫</p>';
							echo '<p class="s2">' . $second->price . '元 &nbsp;' . floor($second->price * 10000/$second->area) . '元/㎡' . '</p>';
							echo '<p class="s3">' . $second->area . '</p>';
							echo '<p class="s3">';
							echo '<a href="' . Url::toRoute(['second/edit', 'id' => $second->id]) . '"><img src="icon/edit-o.png" /></a>';
							echo "<a onclick=\"return(confire('确认要删除吗？')?true:false)\" href=\"" . Url::toRoute(['second/delete', 'id' => $second->id]) . '"><img src="icon/delete.png" /></a>';
						?>					
					</li>
			<?php
			}		
		}
		else{
			echo '还没有二手房信息';
		}
		?>
	</ul>
	<?= LinkPager::widget(['pagination' => $pagination,]) ?>
</div>

<?php
	function smallPic($id){
		return Html::encode("uploads/1/2018/04/13-48-12-00.jpg");
	}
?>