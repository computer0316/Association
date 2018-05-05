<?php

/* @var $this yii\web\View */

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
	height:120px;
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
	margin-top:15px;
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
.second-ul span{
	margin-left:30px;
}
</style>
<div class="big-banner">
	<img src="images/bb1.jpg" />
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
			<img src="images/1.jpg" />		
			<p>这里是图片描述</p>
		</div>
		<div>
			<img src="images/2.jpg" />		
			<p>这里是图片描述</p>
		</div>
	</div>
	
	<div id="article-middle">
		<p id="first">这里是头条这里是头条这里是头条</p>
		<ul>
			<li class="other">君悦府：以品质 敬生活!致谢 一城厚爱!</li>
			<li class="other">君悦府：以品质 敬生活!致谢 一城厚爱!</li>
			<li class="other">君悦府：以品质 敬生活!致谢 一城厚爱!</li>
			<li class="other">君悦府：以品质 敬生活!致谢 一城厚爱!</li>
			<li class="other">君悦府：以品质 敬生活!致谢 一城厚爱!</li>
			<li class="other">君悦府：以品质 敬生活!致谢 一城厚爱!</li>
			<li class="other">君悦府：以品质 敬生活!致谢 一城厚爱!</li>
			<li class="other">君悦府：以品质 敬生活!致谢 一城厚爱!</li>
			<li class="other">君悦府：以品质 敬生活!致谢 一城厚爱!</li>
			<li class="other">君悦府：以品质 敬生活!致谢 一城厚爱!</li>
			<li class="other">君悦府：以品质 敬生活!致谢 一城厚爱!</li>
			<li class="other">君悦府：以品质 敬生活!致谢 一城厚爱!</li>
			<li class="other">君悦府：以品质 敬生活!致谢 一城厚爱!</li>
			<li class="other">君悦府：以品质 敬生活!致谢 一城厚爱!</li>
			<li class="other">君悦府：以品质 敬生活!致谢 一城厚爱!</li>
			<li class="other">君悦府：以品质 敬生活!致谢 一城厚爱!</li>
		</ul>
	</div>
	
	<div id="article-right">
		<div>
			<img src="images/3.jpg" />		
			<p>这里是图片描述</p>
		</div>
		<div>
			<img src="images/10.jpg" />		
			<p>这里是图片描述</p>
		</div>
	</div>
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
			<li><a href="#">馨苑小区 二室二厅 保安塑胶球场</a><span>2室2厅2卫</span><span>180万</span><span>120㎡</span></li>
			<li><a href="#">馨苑小区 二室二厅 保安塑胶球场</a><span>2室2厅2卫</span><span>180万</span><span>120㎡</span></li>
			<li><a href="#">馨苑小区 二室二厅 保安塑胶球场</a><span>2室2厅2卫</span><span>180万</span><span>120㎡</span></li>
			<li><a href="#">馨苑小区 二室二厅 保安塑胶球场</a><span>2室2厅2卫</span><span>180万</span><span>120㎡</span></li>
			<li><a href="#">馨苑小区 二室二厅 保安塑胶球场</a><span>2室2厅2卫</span><span>180万</span><span>120㎡</span></li>
			<li><a href="#">馨苑小区 二室二厅 保安塑胶球场</a><span>2室2厅2卫</span><span>180万</span><span>120㎡</span></li>
			<li><a href="#">馨苑小区 二室二厅 保安塑胶球场</a><span>2室2厅2卫</span><span>180万</span><span>120㎡</span></li>
			<li><a href="#">馨苑小区 二室二厅 保安塑胶球场</a><span>2室2厅2卫</span><span>180万</span><span>120㎡</span></li>
			<li><a href="#">馨苑小区 二室二厅 保安塑胶球场</a><span>2室2厅2卫</span><span>180万</span><span>120㎡</span></li>
			<li><a href="#">馨苑小区 二室二厅 保安塑胶球场</a><span>2室2厅2卫</span><span>180万</span><span>120㎡</span></li>
		</ul>
	</div>
	<div id="second-img">
		<div class="img-list">			
			<img src="images/5.jpg" />			
			<p class="community-name">这里是图片</p>
			<div class="line">
				<p class="price">320万</p>
				<p>（9800元/㎡）</p>
				<p class="roomtype">3室2厅2卫</p>
			</div>
		</div>		
		<div class="img-list">			
			<img src="images/6.jpg" />			
			<p class="community-name">这里是图片</p>
			<div class="line">
				<p class="price">320万</p>
				<p>（9800元/㎡）</p>
				<p class="roomtype">3室2厅2卫</p>
			</div>
		</div>		
		<div class="img-list">			
			<img src="images/7.jpg" />			
			<p class="community-name">这里是图片</p>
			<div class="line">
				<p class="price">320万</p>
				<p>（9800元/㎡）</p>
				<p class="roomtype">3室2厅2卫</p>
			</div>
		</div>		
		<div class="img-list">			
			<img src="images/8.jpg" />			
			<p class="community-name">这里是图片</p>
			<div class="line">
				<p class="price">320万</p>
				<p>（9800元/㎡）</p>
				<p class="roomtype">3室2厅2卫</p>
			</div>
		</div>		
		<div class="img-list">			
			<img src="images/9.jpg" />			
			<p class="community-name">这里是图片</p>
			<div class="line">
				<p class="price">320万</p>
				<p>（9800元/㎡）</p>
				<p class="roomtype">3室2厅2卫</p>
			</div>
		</div>		
		<div class="img-list">			
			<img src="images/11.jpg" />			
			<p class="community-name">这里是图片</p>
			<div class="line">
				<p class="price">320万</p>
				<p>（9800元/㎡）</p>
				<p class="roomtype">3室2厅2卫</p>
			</div>
		</div>		
	</div>
</div>
<style>
	#second-img{		
		width:748px;
		height:300px;
		margin-top:10px;
		margin-left:10px;
		
	}
	.img-list{
		position:relative;
		width:230px;
		margin-left:17px;
		text-align:center;
		margin-bottom:30px;
	}
	.img-list img{		
		width:100%;
	}
	.community-name{
		position:absolute;
		left:0;
		top:148px;
		color:white;
		line-height:25px;
		background:url(images/dark.png);
		height:25px;
		width:100%;
	}
	.line{
		position:relative;
		top:10px;
		width:100%;
	}
	.price {
		float:left;
		color:red;
	}
	.roomtype{
		float:right;
	}
</style>
<script>
	$(document).ready(function(){

	});
</script>
