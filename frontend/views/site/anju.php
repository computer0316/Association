<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use frontend\models\BaseDecoration;
use common\models\PictureManager;

$this->title = 'My Yii Application';
?>
<style>
	html,body,div,p,li,ul,img{
		float:left;margin:0;padding:0;width:100%;
	}
	ul{
		width:auto;
		list-style-type:none;
	}
	.container{
		float:none;
		width:1200px;
		margin:0 auto;
	}
	#site-title{
		font: normal 36px 微软雅黑;
		color:#dd6600;
	}
	.nav{
		height:45px;
		background:#ff9900;
	}
	#nav-ul li{
		width:auto;
		color:white;
		line-height:45px;
		padding:0 20px;
	}
	#nav-ul li:hover{
		background:#dd7100;
	}
	#signin{
		float:right;
		width:180px;
	}
	#signin img{
		width:25px;
		margin-top:10px;
	}
	#signin p{
		width:auto;
		margin-left:10px;
		line-height:45px;
		color:white;
	}
	#signin a{
		color:white;
		text-decoration:none;
	}
</style>
<style>
	#b1left{
		width:890px;
		height:295px;
		margin-top:10px;
		border:1px solid #ddd;
		border-radius:5px;
	}
	#b1right{
		width:286px;
		height:300px;
		margin-top:10px;
		margin-left:20px;
		background:#f8f8f8;
	}
	.b1title{
		background:#f7f7f7;
		width:140px;
		height:73px;
		line-height:73px;
		clear:left;
		font-size:18px;
		text-align:center;
		border-top:1px solid #ddd;
		border-right:1px solid #ddd;
	}
	.b1title:hover{
		background:white;
		border-right:none;
	}
	#b1buy{
		border-top:none;
		border-radius:5px 0 0 0;
	}
	#b1mall{
		border-radius:0 0 0 5px;
	}
	#b1left-content{
		position:relative;
		left:10px;top:-210px;
		width:720px;
		height:270px;

	}
	.b1content{
		position:absolute;
		left:0px;
		top:0px;
	}
	.search-box{
		border:1px solid #f3f3f3;
		border-radius:5px;
		background:#f3f3f3;
	}
	.search-box input{
		margin:8px;
		height:40px;
		border:1px solid #ddd;
		border-radius:5px;
	}
	#b1buy-search input{
		width:60%;
	}
	#b1buy-search input[type=text]{
		padding-left:10px;
	}
	button{
		border:1px solid #f18800;
		border-radius:5px;
		padding:0 30px;
		margin-left:10px;
		height:42px;
		background:#f18800;
		font-size:18px;
		color:white;
	}
	.b1buy-category{
		width:280px;
		margin:30px;
	}
	.b1category-item{
		width:auto;
		font-size:12px;
		color:#999;
		margin:10px;
	}
	#b1buy-c2{
		padding-left:20px;
		border-left:1px solid #ddd;
	}
</style>
<style>
	#b1sell-left{
		 width:400px;
	}
	#b1sell-title1{
		font-size:28px;
		color:orange;
		margin:20px;
	}
	#b1sell-left input{
		width:95%;
	}
	#b1sell-search,#b1sell-left button{
		margin:15px;
	}
	#b1sell-right{
		margin-left:30px;
		width:180px;
	}
	.b1sell-title2:before{
		content:"　";
		font-size:12px;
		padding-left:5px;
		margin-bottom:5px;
		margin-right:10px;
		border:1px solid orange;
		background:orange;
		border-radius:5px;
	}
	.b1sell-title2{
		margin:10px 20px 10px;
		font-size:20px;
	}
	.b1sell-list{
		margin-left:30px;
		font-size:12px;
		color:#999;
	}
</style>
<style>
	#b1rent-search input{
		width:80%;
	}
	#b1mall-search input{
		width:75%;
	}
	.b-left{
		width:890px;
		margin-top:10px;
	}
	.b-right{
		margin-top:10px;
		margin-left:20px;
		width:285px;
	}
	.b-title{
		margin:10px;
		font: bold 20px 微软雅黑;
	}
	.b-title1{
		margin:10px 20px;
		font: normal 18px 微软雅黑;
		color:#dd6600;
	}
	.b-title2{
		margin:10px 0;
		font: normal 18px 微软雅黑;
		color:#dd6600;
	}
	.radius{
		border:1px solid #ddd;
		border-radius:5px;
	}
	.b-community2{
		width:440px;
	}
	.b-community2 img{
		margin:10px 20px;
		width:180px;
		height:130px;
	}
	.b-item1{
		width:200px;
		margin-top:20px;
		font-size:14px;
	}
	.b-item{
		width:200px;
		margin-top:10px;
		font-size:14px;
	}
	.b-community4{
		width:180px;
		margin:10px 20px 10px 20px;
	}
	#b-price-div{
		width:95%;
		height:400px;
		margin-left:20px;
	}
	#b-price-div img{
		width:auto;
	}
	.b-price{
		width:100px;
		margin-top:10px;
		line-height:28px;
		font-size:14px;
		color:#999;
	}
	.b-price1{
		width:100px;
		margin-top:10px;
		line-height:28px;
	}
	.b-price-down{
		width:100px;
		margin-top:10px;
		line-height:28px;
		color:green;
	}
	.b-c4-img{
		width:180px;
		height:120px;
	}
	#community-order{
		margin-left:20px;
	}
	#community-order li{
		margin-top:15px;
		font-size:14px;
		color:#999;
	}
	#community-order li p{
		width:200px;
	}
	#community-order li.last{
		margin-bottom:13px;
	}
</style>
<div id="title" class="container">
	<p id="site-title">房协二手房</p>
</div>
<div class="nav">
	<div id="nav-div" class="container">
		<ul id="nav-ul">
			<li>首页</li>
			<li>新房</li>
			<a href="<?= Url::toRoute('second/list') ?>"><li>二手房</li></a>
			<li>租房</li>
			<li>商铺写字楼</li>
		</ul>
		<div id="signin">
			<img src="web/icon/account.png" />
			<p><a href="admin.php?r=user/login">登录</a></p>
			<p><a href="admin.php?r=user/register">免费注册</a></p>
		</div>
	</div>
</div>
<div class="container">
	<div id="b1left">
		<p id="b1buy" data-type="1" class="b1title">买　房</p>
		<p id="b1sell" data-type="2" class="b1title">卖　房</p>
		<p id="b1rent" data-type="3" class="b1title">租　房</p>
		<p id="b1mall" data-type="4" class="b1title">商铺写字楼</p>
		<div id="b1left-content">
			<div id="b1buy1" class="b1content" data-type="1">
				<div id="b1buy-search" class="search-box">
					<input type="text" name="buy-input" placeholder="请输入小区名称、地址..."/>
					<button type="submit">二手房</button>
					<button type="submit">新房</button>
				</div>
				<div id="b1buy-c1" class="b1buy-category">
					<div>
						<p class="b1category-title">二手房</p>
						<p class="b1category-item">广阳</p>
						<p class="b1category-item">安次</p>
						<p class="b1category-item">开发区</p>
					</div>
					<div>
						<p class="b1category-item">30-40万</p>
						<p class="b1category-item">40-50万</p>
						<p class="b1category-item">50-60万</p>
						<p class="b1category-item">60-80万</p>
					</div>
				</div>
				<div id="b1buy-c2" class="b1buy-category">
					<p class="b1category-title">新房</p>
					<div>
						<p class="b1category-item">广阳</p>
						<p class="b1category-item">安次</p>
						<p class="b1category-item">开发区</p>
					</div>
					<div>
						<p class="b1category-item">4千以下</p>
						<p class="b1category-item">4-6千</p>
						<p class="b1category-item">6千-1万</p>
						<p class="b1category-item">1万-1.5万</p>
						<p class="b1category-item">1.5万以上</p>
					</div>
				</div>
			</div>
			<div id="b1sell1" class="b1content" data-type="2" style="display:none;">
				<div id="b1sell-left">
					<p id="b1sell-title1">房东委托</p>
					<div id="b1sell-search" class="search-box">
						<input type="text" name="sell-input" placeholder="请输入并选择小区"/>
					</div>
					<button type="submit">免费发布房源</button>
				</div>
				<div id="b1sell-right">
					<ul>
						<li class="b1sell-title2">在本站发布</li>
						<li class="b1sell-list">简单2步即可完成发布，方便快捷免费</li>
						<li class="b1sell-title2">优质经纪人全程服务</li>
						<li class="b1sell-list">经纪人能力水平实时排名，提供优质服务</li>
						<li class="b1sell-title2">客户群庞大</li>
						<li class="b1sell-list">客户群正在以30%每月数量递增</li>
					</ul>
				</div>
			</div>
			<div id="b1rent1" class="b1content" data-type="3" style="display:none;">
				<div id="b1rent-search" class="search-box">
					<input type="text" name="buy-input" placeholder="请输入小区名称、地址..."/>
					<button type="submit">租房</button>
				</div>
				<div id="b1rent-c1" class="b1buy-category">
					<div>
						<p class="b1category-title">二手房</p>
						<p class="b1category-item">广阳</p>
						<p class="b1category-item">安次</p>
						<p class="b1category-item">开发区</p>
					</div>
					<div>
						<p class="b1category-item">30-40万</p>
						<p class="b1category-item">40-50万</p>
						<p class="b1category-item">50-60万</p>
						<p class="b1category-item">60-80万</p>
					</div>
				</div>
				<div id="b1rent-c2" class="b1buy-category">
					<p class="b1category-title">新房</p>
					<div>
						<p class="b1category-item">广阳</p>
						<p class="b1category-item">安次</p>
						<p class="b1category-item">开发区</p>
					</div>
					<div>
						<p class="b1category-item">4千以下</p>
						<p class="b1category-item">4-6千</p>
						<p class="b1category-item">6千-1万</p>
						<p class="b1category-item">1万-1.5万</p>
						<p class="b1category-item">1.5万以上</p>
					</div>
				</div>
			</div>
			<div id="b1mall1" class="b1content" data-type="4" style="display:none;">
				<div id="b1mall-search" class="search-box">
					<input type="text" name="buy-input" placeholder="请输入小区名称、地址..."/>
					<button type="submit">租写字楼</button>
				</div>
				<div id="b1mall-c1" class="b1buy-category">
					<div>
						<p class="b1category-title">二手房</p>
						<p class="b1category-item">广阳</p>
						<p class="b1category-item">安次</p>
						<p class="b1category-item">开发区</p>
					</div>
					<div>
						<p class="b1category-item">30-40万</p>
						<p class="b1category-item">40-50万</p>
						<p class="b1category-item">50-60万</p>
						<p class="b1category-item">60-80万</p>
					</div>
				</div>
				<div id="b1mall-c2" class="b1buy-category">
					<p class="b1category-title">新房</p>
					<div>
						<p class="b1category-item">广阳</p>
						<p class="b1category-item">安次</p>
						<p class="b1category-item">开发区</p>
					</div>
					<div>
						<p class="b1category-item">4千以下</p>
						<p class="b1category-item">4-6千</p>
						<p class="b1category-item">6千-1万</p>
						<p class="b1category-item">1万-1.5万</p>
						<p class="b1category-item">1.5万以上</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="b1right">
		<a href="admin.php?r=second/create"><img src="web/images/fabu.jpg" /></a>
	</div>
</div>
<div id="block2" class="container">
	<img src="web/images/3.gif"  style="margin-top:10px;"/>
</div>
<div id="block3" class="container">
	<div class="b-left">
		<p class="b-title">廊坊二手房推荐小区</p>
		<div class="radius">
			<div class="b-community2">
				<p class="b-title1">超人气小区</p>
				<img src="web/images/33.jpg" />
				<p class="b-item1">广阳 - 万和南区</p>
				<p class="b-item">20333元/㎡</p>
				<p class="b-item1">安次- 华夏第九元</p>
				<p class="b-item">20333元/㎡</p>
			</div>
			<div class="b-community2">
				<p class="b-title1">最舒适小区</p>
				<img src="web/images/50.jpg" />
				<p class="b-item1">广阳 - 万和南区</p>
				<p class="b-item">20333元/㎡</p>
				<p class="b-item1">安次- 华夏第九元</p>
				<p class="b-item">20333元/㎡</p>
			</div>
			<div class="b-community4">
				<p class="b-title2">交通便利</p>
				<p class="b-item1">广阳 - 万和南区</p>
				<p class="b-item">20333元/㎡</p>
				<p class="b-item1">安次- 华夏第九元</p>
				<p class="b-item">20333元/㎡</p>
			</div>
			<div class="b-community4">
				<p class="b-title2">商业繁华</p>
				<p class="b-item1">广阳 - 万和南区</p>
				<p class="b-item">20333元/㎡</p>
				<p class="b-item1">安次- 华夏第九元</p>
				<p class="b-item">20333元/㎡</p>
			</div>
			<div class="b-community4">
				<p class="b-title2">高端小区</p>
				<p class="b-item1">广阳 - 万和南区</p>
				<p class="b-item">20333元/㎡</p>
				<p class="b-item1">安次- 华夏第九元</p>
				<p class="b-item">20333元/㎡</p>
			</div>
			<div class="b-community4">
				<p class="b-title2">大型小区</p>
				<p class="b-item1">广阳 - 万和南区</p>
				<p class="b-item">20333元/㎡</p>
				<p class="b-item1">安次- 华夏第九元</p>
				<p class="b-item">20333元/㎡</p>
			</div>
		</div>
	</div>
	<div class="b-right">
		<p class="b-title">廊坊房价趋势</p>
		<div class="radius">
			<div id="b-price-div">
				<p class="b-price">5月份均价：</p><p class="b-price1">14500元/㎡</p>
				<p class="b-price">环比4月：</p><p class="b-price-down">下跌0.06%</p>
				<p class="b-price">同比去年同期：</p><p class="b-price-down">下跌30.58%</p>
				<img src="web/images/price.png" />
				<p style="text-align:center;margin-top:20px;">数据来自本站统计</p>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<img style="margin-top:10px;" src="web/images/2.gif" />
</div>
<div id="block4" class="container">
	<div class="b-left">
		<p class="b-title">廊坊二手精选房源</p>
		<div class="radius">
			<div class="b-community4">
				<p class="b-title2">交通便利</p>
				<img class="b-c4-img" src="web/images/23.jpg" />
				<p class="b-item1">广阳 - 万和南区</p>
				<p class="b-item">20333元/㎡</p>
				<p class="b-item1">安次- 华夏第九元</p>
				<p class="b-item">20333元/㎡</p>
			</div>
			<div class="b-community4">
				<p class="b-title2">商业繁华</p>
				<img class="b-c4-img" src="web/images/24.jpg" />
				<p class="b-item1">广阳 - 万和南区</p>
				<p class="b-item">20333元/㎡</p>
				<p class="b-item1">安次- 华夏第九元</p>
				<p class="b-item">20333元/㎡</p>
			</div>
			<div class="b-community4">
				<p class="b-title2">高端小区</p>
				<img class="b-c4-img" src="web/images/25.jpg" />
				<p class="b-item1">广阳 - 万和南区</p>
				<p class="b-item">20333元/㎡</p>
				<p class="b-item1">安次- 华夏第九元</p>
				<p class="b-item">20333元/㎡</p>
			</div>
			<div class="b-community4">
				<p class="b-title2">大型小区</p>
				<img class="b-c4-img" src="web/images/26.jpg" />
				<p class="b-item1">广阳 - 万和南区</p>
				<p class="b-item">20333元/㎡</p>
				<p class="b-item1">安次- 华夏第九元</p>
				<p class="b-item">20333元/㎡</p>
			</div>
		</div>
	</div>
	<div class="b-right">
		<p class="b-title">小区排行</p>
		<div class="radius">
			<ul id="community-order">
				<li><p>上城小区<p></p><span>120套</span></li>
				<li><p>晓廊坊</p><span>320套</span></li>
				<li><p>东方夏威夷</p><span>180套</span></li>
				<li><p>上城小区<p></p><span>120套</span></li>
				<li><p>晓廊坊</p><span>320套</span></li>
				<li><p>东方夏威夷</p><span>180套</span></li>
				<li><p>上城小区<p></p><span>120套</span></li>
				<li><p>晓廊坊</p><span>320套</span></li>
				<li class="last"><p>东方夏威夷</p><span>180套</span></li>
			</ul>
		</div>
	</div>
</div>
<div id="cooperation" class="container">

</div>
<div id="footer" class="container">

</div>
<script>
	$(document).ready(function(){
		$(".b1title").mouseover(function(){
			var num = $(this).data("type");
			$(".b1content").css('display', 'none');
			$(".b1content[data-type=" + num + "]").css('display', 'block');
		});
	});
</script>
