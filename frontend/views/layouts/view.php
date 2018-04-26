<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/site.css">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
    	.login{
    		width:100%;
    		height:36px;
    		float:none;
    		background-color:#eee;

    		font-size:12px;
    		line-height:36px;
    		color:#666;
    	}
    	.header{
    		height:120px;
    	}
    	.header img{
    		height:120px;
    	}
    	.nav{
    		width:100%;
    		height:42px;
    		background-color:#d70000;
    	}
		.nav-ul li{
			width:150px;
			height:100%;
			text-align:center;
		}
		.nav-ul li:hover{
			background-color:#b20000;
		}
		.nav-ul li a{
			display:block;
			width:100%;
			line-height:42px;
			color:white;
		}
    	.footer{
    		width:100%;
    		height:120px;
			background-color:#eee;
    		font-size:12px;
    		text-align:center;
    	}
    	.footer p{float:none;line-height:24px;}
    </style>
</head>
<body>
<?php $this->beginBody() ?>
<div class="login">
	<div class="container">
		<p>您好，欢迎来到廊坊二手房中心 [登录] [免费注册]</p>
		<p class="right-p">地图找房</p>
	</div>
</div>
<div class="container header">
	<img src="images/logo.jpg" />
</div>
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
<?= $content ?>
<div class="footer">
	<p class="single">网站首页 | 关于我们 | 合作伙伴 | 加入我们 | 联系我们 | 网站地图</p>
	<p class="single">冀ICP备00000000号 客服热线：0316-2230404 （工作时间：周一-周五8:00至18:00）</p>
	<p class="single">Copyright &copy; 廊坊市房地产业协会 站长统计</p>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
