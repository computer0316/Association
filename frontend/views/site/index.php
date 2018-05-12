<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use frontend\models\BaseDecoration;
use common\models\PictureManager;

$this->title = 'My Yii Application';
?>
<style>
	.container{

	}
#district{

}
.d1four{
	width:25%;
	margin-top:20px;
}
.d1title{
	width:100%;
	font-size:16px;
}
.d1item{
	color:#999;
	margin-top:10px;
	margin-right:20px;
}
.title-div{
	margin-top:20px;
	width:100%;
}
.title-div .p1{
	font-size:24px;
}
.item-div{
	float:right;
	margin-top:12px;
}
.item-div .p2{
	margin-left:10px;
	color:#999;
}
#article-left{
	margin-top:10px;
	width:200px;
}
#article-left div,#article-right div{
	text-align:center;
	margin-bottom:20px;
}
#article-left p,#article-right p{
	float:none;
}
#article-left img,#article-right img{
	width:100%;
	margin-bottom:10px;
}
#article-middle{
	width:700px;
	margin-left:10px;
	margin-top:10px;
	height:400px;
}
#first{
	font-size:24px;
	line-height:64px;
	font-weight:bold;
	text-align:center;
	width:100%;
	border:1px dashed #ccc;
}
.other{
	width:340px;
	margin-left:10px;
	font-size:16px;
	color:#999;
	line-height:32px;
}
.other:before{
	color:red;
	margin-right:10px;
	content:"●"
}
#article-right{
	margin-top:10px;
	width:280px;
	margin-left:10px;
}
#article-right li{
	font-size:14px;
	color:#999;
	line-height:24px;
}
#second-list{
	width:440px;
	border:1px solid #ccc;
	margin-top:10px;
}
.top-div{
	width:100%;
	border-bottom:1px solid #ccc;
	background:#f7f7f7;
	height:30px;
}
#second-list .title{
	font-size:12px;
	font-weight:normal;
	color:red;
	margin-left:10px;
	margin-top:8px;
}

.more{
	float:right;
	color:#999;
	margin-top:8px;
	margin-right:10px;
}
.second-ul{

}
.second-ul li{
	margin-left:10px;
	margin-top:20px;
}
.second-ul .span1{
	float:left;
	width:180px;
	margin-left:10px;
	overflow: hidden;
	text-overflow:ellipsis;
	white-space: nowrap;
}
.second-ul span{
	margin-left:20px;
}
	#second-img{
		width:748px;
		height:300px;
		margin-top:10px;
		margin-left:10px;

	}
	.img-list{
		position:relative;
		width:230px;
		height:173px;
		margin-left:17px;
		text-align:center;
		margin-bottom:45px;
	}
	.img-list img{
		width:230px;
		height:173px;

	}
	.community-name{
		position:absolute;
		left:0;
		top:148px;
		color:white;
		line-height:25px;
		background:url(web/images/dark.png);
		height:25px;
		width:100%;
	}
	.line{
		position:relative;
		top:15px;
		width:100%;
	}
	.price {
		float:left;
		color:red;
	}
	.roomtype{
		float:right;
	}

	#nh-left{
		width:910px;
		margin-top:10px;
	}
.nh-block{
	position:relative;
	width:283px;
	margin-right:20px;
	margin-bottom:50px;
}
.nh-block img{
	position:relative;
	width:283px;
	height:212px;
}
.nh-name-box{
	position:absolute;
	background: url('web/images/dark.png');
	width:100%;
	height:36px;
	left:0;top:177px;
	filter: Alpha(Opacity=40);
	opacity: 0.4;
	text-align:center;
}
.nh-name{
	position:absolute;
	top:177px;left:10px;
	color:white;
	font-size:16px;
	line-height:36px;
}
.nh-line{
	position:relative;
	top:10px;
}
.nh-item{
	border:1px solid #999;
	padding:1px 5px;
	margin-top:5px;
	margin-right:10px;
}
	#nh-right{
		width:280px;
		margin-top:10px;
		margin-left:10px;
		background:#f3f3f3;
	}
#nh-right li{
	width:100%;
	line-height:42px;
	border-bottom:1px dashed #e3e3e3;
}
#nh-right .nhll{
	margin-left:10px;
	float:left;
}
#nh-right .nhlr{
	float:right;
	margin-right:10px;
}
</style>

<div class="big-banner">
	<img src="web/images/bb1.jpg" />
</div>
<div class="container" id="district">
<!--区域找房-->
<div class="d1four">
	<p class="d1title" style="color:#e96f4a;">区域找房</p>
	<p class="d1item">广阳区</p>
	<p class="d1item">安次区</p>
	<p class="d1item">开发区</p>
</div>
<div class="d1four">
	<p class="d1title" style="color:#78b4b4;">价格找房</p>
	<p class="d1item">50万以下</p>
	<p class="d1item">50-100万</p>
	<p class="d1item">100-150万</p>
	<p class="d1item">150-200万</p>
	<p class="d1item">200-300万</p>
	<p class="d1item">300万以上</p>
</div>
<div class="d1four">
	<p class="d1title" style="color:#b579c3;">需求找房</p>
	<p class="d1item">住宅</p>
	<p class="d1item">公寓</p>
	<p class="d1item">商铺</p>
	<p class="d1item">写字楼</p>
	<p class="d1item">别墅</p>
	<p class="d1item">平房</p>
</div>
<div class="d1four">
	<p class="d1title" style="color:#5186b8;">特色找房</p>
	<p class="d1item">小户型</p>
	<p class="d1item">公园地产</p>
	<p class="d1item">学区房</p>
	<p class="d1item">投资地产</p>
	<p class="d1item">经济住宅</p>
</div>
</div>
<div class="container">
	<img style="width:100%;margin-top:2px;" src="web/images/2.gif" />
</div>
<div id="article" class="container">
<!--热门资讯-->
	<div class="title-div">
		<p class="p1">热门资讯</p>
		<div class="item-div">
			<span class="p2">房产资讯</span><span class="p2">|</span>
			<span class="p2">房产资讯</span><span class="p2">|</span>
			<span class="p2">房产资讯</span><span class="p2">|</span>
			<span class="p2">数据中心</span>
		</div>
	</div>
	<div id="article-left">
		<div>
			<img src="web/images/1.jpg" />
			<p>这里是图片描述</p>
		</div>
		<div>
			<img src="web/images/2.jpg" />
			<p>这里是图片描述</p>
		</div>
	</div>

	<div id="article-middle">
		<p id="first">这里是头条这里是头条这里是头条</p>
		<ul>
			<li class="other">君悦府：以品质 敬生活!致谢 一城厚爱!</li>
			<li class="other">碧桂园翡翠蓝山：[有梦碧同行]来优秀的</li>
			<li class="other">最新！廊坊5月各区（市）房价出炉，快</li>
			<li class="other">瑞嘉容园三期车位、储藏室正式开抢</li>
			<li class="other">为什么森林城市会上榜福布斯“影响未来</li>
			<li class="other">绿城玉兰花园：星空墅 瞰山观星悦生活</li>
			<li class="other">君悦府：以品质 敬生活!致谢 一城厚爱!</li>
			<li class="other">碧桂园翡翠蓝山：[有梦碧同行]来优秀的</li>
			<li class="other">最新！廊坊5月各区（市）房价出炉，快</li>
			<li class="other">瑞嘉容园三期车位、储藏室正式开抢</li>
			<li class="other">为什么森林城市会上榜福布斯“影响未来</li>
			<li class="other">绿城玉兰花园：星空墅 瞰山观星悦生活</li>
			<li class="other">君悦府：以品质 敬生活!致谢 一城厚爱!</li>
			<li class="other">碧桂园翡翠蓝山：[有梦碧同行]来优秀的</li>
			<li class="other">最新！廊坊5月各区（市）房价出炉，快</li>
			<li class="other">瑞嘉容园三期车位、储藏室正式开抢</li>
			<li class="other">为什么森林城市会上榜福布斯“影响未来</li>
			<li class="other">绿城玉兰花园：星空墅 瞰山观星悦生活</li>
		</ul>
	</div>

	<div id="article-right">
		<div>
			<img src="web/images/3.jpg" />
			<ul>
				<li>君悦府：以品质 敬生活!致谢 一城厚爱!</li>
				<li>枣庄碧桂园翡翠蓝山：小小赛车手火热进行中</li>
				<li>揭开神秘面纱 碧桂园枣庄首场发布会举行</li>
				<li>绿城玉兰花园：星空墅 瞰山观星悦生活</li>
				<li>为什么森林城市会上榜福布斯“影响未来的</li>
				<li>隐藏在世界５００强企业里的基因密码</li>
				<li>2018年枣庄供地国有建设用地供应计划</li>
			</ul>
		</div>
	</div>
</div>
<div id="ad" class="container">
	<img style="width:100%;margin-top:10px;" src="web/images/banner1.jpg" />
	<img style="width:100%;margin-top:2px;" src="web/images/banner2.gif" />
	<img style="width:100%;margin-top:2px;" src="web/images/banner3.gif" />
</div>
<div id="newhouse" class="container">
	<div class="title-div">
		<p class="p1">新房</p>
		<div class="item-div">
			<span class="p2">房产资讯</span><span class="p2">|</span>
			<span class="p2">房产资讯</span><span class="p2">|</span>
			<span class="p2">房产资讯</span><span class="p2">|</span>
			<span class="p2">测试中心</span>
		</div>
	</div>
	<div id="nh-left">
		<div class="nh-block">
			<img src="web/images/new/6.jpg" />
			<div class="nh-name-box"></div>
			<p class="nh-name">这里是图片</p>
			<div class="nh-line">
				<p class="price">9800元/㎡</p>
				<p>（9800元/㎡）</p>
				<p class="roomtype">90-160㎡</p>
			</div>
			<div class="nh-line">
				<p class="nh-item">学区房</p>
				<p class="nh-item">高铁站</p>
			</div>
		</div>
		<div class="nh-block">
			<img src="web/images/new/9.jpg" />
			<div class="nh-name-box"></div>
			<p class="nh-name">这里是图片</p>
			<div class="nh-line">
				<p class="price">9800元/㎡</p>
				<p>（9800元/㎡）</p>
				<p class="roomtype">90-160㎡</p>
			</div>
			<div class="nh-line">
				<p class="nh-item">学区房</p>
				<p class="nh-item">高铁站</p>
			</div>
		</div>
		<div class="nh-block">
			<img src="web/images/new/4.jpg" />
			<div class="nh-name-box"></div>
			<p class="nh-name">这里是图片</p>
			<div class="nh-line">
				<p class="price">9800元/㎡</p>
				<p>（9800元/㎡）</p>
				<p class="roomtype">90-160㎡</p>
			</div>
			<div class="nh-line">
				<p class="nh-item">学区房</p>
				<p class="nh-item">高铁站</p>
			</div>
		</div>
		<div class="nh-block">
			<img src="web/images/new/3.jpg" />
			<div class="nh-name-box"></div>
			<p class="nh-name">这里是图片</p>
			<div class="nh-line">
				<p class="price">9800元/㎡</p>
				<p>（9800元/㎡）</p>
				<p class="roomtype">90-160㎡</p>
			</div>
			<div class="nh-line">
				<p class="nh-item">学区房</p>
				<p class="nh-item">高铁站</p>
			</div>
		</div>
		<div class="nh-block">
			<img src="web/images/new/2.jpg" />
			<div class="nh-name-box"></div>
			<p class="nh-name">这里是图片</p>
			<div class="nh-line">
				<p class="price">9800元/㎡</p>
				<p>（9800元/㎡）</p>
				<p class="roomtype">90-160㎡</p>
			</div>
			<div class="nh-line">
				<p class="nh-item">学区房</p>
				<p class="nh-item">高铁站</p>
			</div>
		</div>
		<div class="nh-block">
			<img src="web/images/new/1.jpg" />
			<div class="nh-name-box"></div>
			<p class="nh-name">这里是图片</p>
			<div class="nh-line">
				<p class="price">9800元/㎡</p>
				<p>（9800元/㎡）</p>
				<p class="roomtype">90-160㎡</p>
			</div>
			<div class="nh-line">
				<p class="nh-item">学区房</p>
				<p class="nh-item">高铁站</p>
			</div>
		</div>
	</div>
	<div id="nh-right">
		<ul>
			<li><p class="nhll">阿尔卡迪亚</p><p class="nhlr">12500元/㎡</p></li>
			<li><p class="nhll">塞纳荣府</p><p class="nhlr">19500元/㎡</p></li>
			<li><p class="nhll">盛江南</p><p class="nhlr">14300元/㎡</p></li>
			<li><p class="nhll">阿尔卡迪亚</p><p class="nhlr">12500元/㎡</p></li>
			<li><p class="nhll">塞纳荣府</p><p class="nhlr">19500元/㎡</p></li>
			<li><p class="nhll">盛江南</p><p class="nhlr">14300元/㎡</p></li>
			<li><p class="nhll">阿尔卡迪亚</p><p class="nhlr">12500元/㎡</p></li>
			<li><p class="nhll">塞纳荣府</p><p class="nhlr">19500元/㎡</p></li>
			<li><p class="nhll">盛江南</p><p class="nhlr">14300元/㎡</p></li>
			<li><p class="nhll">阿尔卡迪亚</p><p class="nhlr">12500元/㎡</p></li>
			<li><p class="nhll">塞纳荣府</p><p class="nhlr">19500元/㎡</p></li>
			<li><p class="nhll">盛江南</p><p class="nhlr">14300元/㎡</p></li>
		</ul>
	</div>
</div>
<div class="container">
	<img style="width:100%;margin-top:2px;" src="web/images/banner4.gif" />
</div>
<div id="second" class="container">
<!--二手房-->
	<div class="title-div">
		<p class="p1">二手房</p>
		<div class="item-div">
			<span class="p2">房产资讯</span><span class="p2">|</span>
			<span class="p2">房产资讯</span><span class="p2">|</span>
			<span class="p2">房产资讯</span><span class="p2">|</span>
			<span class="p2">测试中心</span>
		</div>
	</div>
	<div id="second-list">
		<div class="top-div">
			<p class="title">二手房</p>
			<p class="more">更多>>></p>
		</div>
		<ul class="second-ul">
			<?php
				if($second_text){
					foreach($second_text as $s){
						echo '<li>'	;
						echo '<span class="span1"><a href="' . Url::toRoute(['second/view', 'id' => $s->id]) . '">' . $s->community . ' - ' . BaseDecoration::findOne($s->decoration)->name . '</a></span>';
						echo '<span>' . $s->room . '室' . $s->hall . '厅' . $s->toilet . '卫</span>';
						echo '<span>' . $s->price . '万</span>';
						echo '<span>' . $s->area . '㎡</span>';
						echo '</li>';
					}
				}
			?>
		</ul>
	</div>
	<div id="second-img">
		<?php
			if($second_text){
				$c = 0;
				foreach($second_text as $s){
					echo '<a href="' . Url::toRoute(['second/view', 'id' => $s->id]) . '">';
					echo '<div class="img-list">';
						echo '<img src="'. PictureManager::getImage($s->id, 'second')->path . '" />';
						echo '<p class="community-name">' . $s->community . '</p>';
						echo '<div class="line">';
							echo '<p class="price">' . $s->price . '万</p>';
							echo '<p>（' . floor($s->price*10000/$s->area) . '元/㎡）</p>';
							echo '<p class="roomtype">' . $s->room . '室' . $s->hall . '厅' . $s->toilet . '卫</p>';
						echo '</div>';
					echo '</div>' . "\n";
					echo '</a>';
					$c++;
					if($c==6){
						break;
					}
				}
			}
		?>
	</div>
</div>

<script>
	$(document).ready(function(){

	});
</script>
