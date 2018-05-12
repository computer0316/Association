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
		list-style-type:none;
	}
	.container{
		float:none;
		width:1200px;
		margin:0 auto;
	}
	#site-title{
		font: normal 36px 微软雅黑;
		color:#ff9900;
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
		border:1px solid blue;
	}
	.b1content{
		position:absolute;
		left:0px;
		top:0px;
		border:1px solid red;
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
			<li>二手房</li>
			<li>租房</li>
			<li>商铺写字楼</li>
		</ul>
	</div>
</div>
<div class="container">
	<div id="b1left">
		<p id="b1buy" class="b1title">买　房</p>
		<p id="b1sell" class="b1title">卖　房</p>
		<p id="b1rent" class="b1title">租　房</p>
		<p id="b1mall" class="b1title">商铺写字楼</p>
		<div id="b1left-content">
			<div id="b1buy1" class="b1content">

			</div>
			<div id="b1sell1" class="b1content">

			</div>
			<div id="b1rent1" class="b1content">

			</div>
			<div id="b1mall1" class="b1content">

			</div>
		</div>
	</div>
	<div id="b1right">

	</div>
</div>
<div id="block2" class="container">
4
</div>
<div id="block3" class="container">
5
</div>
<div id="block4" class="container">
6
</div>
<div id="cooperation" class="container">
7
</div>
<div id="footer" class="container">
8
</div>

