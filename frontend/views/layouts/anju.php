<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
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
    <link rel="stylesheet" href="web/css/carousel.css">
    <script src="web/js/jquery-1.9.1.min.js"></script>
    <script src="web/js/carousel.js"></script>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Yii::$app->params['sitename'] ?></title>
    <meta http-equiv="refresh1" content="2">
    <?php $this->head() ?>
    <style>
    	.footer{
    		width:100%;
    		height:110px;
    		text-align:center;
    		clear:both;
    		margin-top:10px;
    		padding-top:15px;
    		border-top:1px solid #ddd;
    	}
    	.footer p{float:none;line-height:24px;font-size:12px;}
    	p.single{clear:both;}
    </style>
</head>
<body>
<?php $this->beginBody() ?>
<?= $content ?>
<div class="footer">
	<p class="single">网站首页&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;关于我们&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;合作伙伴&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;加入我们&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;联系我们&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;网站地图</p>
	<p class="single">冀ICP备00000000号 客服热线：0316-2230404 （工作时间：周一-周五8:00至18:00）</p>
	<p class="single">Copyright &copy; 廊坊市房地产业协会 站长统计</p>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
