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
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/carousel.css">
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/carousel.js"></script>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>

    </style>
</head>
<body>
<?php $this->beginBody() ?>
<div class="login">
	<div class="container">
		<p>您好，欢迎来到廊坊二手房中心 [<a href="/association/backend/web/?r=user/login">登录</a>] [免费注册]</p>
		<p class="right-p">地图找房</p>
	</div>
</div>
<div class="container header">
	<img style="width:210px;height:60px;" src="images/logo.jpg" />
</div>
<div class="nav">
	<div class="container">
		<ul class="nav-ul">
			<li><a href="<?= Url::toRoute('site/index') ?>">网站首页</a></li>
			<li><a href="#">廊坊新房</a></li>
			<li><a href="?r=second/list">廊坊二手房</a></li>
			<li><a href="#">廊坊出租</a></li>
			<li><a href="#">房产资讯</a></li>
			<li><a href="#">廊坊求购</a></li>
		</ul>
	</div>
</div>
<div class="container">
		<?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
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
