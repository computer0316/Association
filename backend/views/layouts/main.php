<?php

/* @var $this \yii\web\View */
/* @var $content string */
/* 莱恩网络 */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use backend\assets\AppAsset;
use backend\models\User;

//AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="web/js/jquery-1.9.1.min.js"></script>
    <link href="web/css/admin.css" rel="stylesheet">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header>
	<p id="title"><?= Yii::$app->params['sitename'] ?></p>
	<div class="login">
<?php
	$user = User::checkLogin();
	if($user){
		echo '<p>欢迎：' . $user->name . '</p>';
		echo '<p><a href="' . Url::toRoute('user/logout') . '">退出</a></p>';
	}
	else{
		return $this->redirect('user/login');
	}
?>

	</div>
</header>
<section>
	<div id="left">
		<p class="menu-title"><img src="web/icon/house.png">二手房</p>
			<a href="<?=Url::toRoute('second/create')?>"><p class="menu-item">房源添加</p></a>
			<a href="<?=Url::toRoute('second/list')?>"><p class="menu-item">房源管理</p></a>
		<p class="menu-title"><img src="web/icon/house.png">新房</p>
			<a href="#"><p class="menu-item">小区添加</p></a>
			<a href="#"><p class="menu-item">小区管理</p></a>
			<a href="#"><p class="menu-item">配套管理</p></a>
		<p class="menu-title"><img src="web/icon/article.png">文章管理</p>
			<a href="#"><p class="menu-item">文章添加</p></a>
			<a href="#"><p class="menu-item">文章管理</p></a>
			<a href="#"><p class="menu-item">分类管理</p></a>
		<p class="menu-title"><img src="web/icon/account.png">个人中心</p>
			<a href="<?=Url::toRoute('user/edit')?>"><p class="menu-item">基本资料</p></a>
			<a href="<?=Url::toRoute('user/attest')?>"><p class="menu-item">身份认证</p></a>
			<a href="<?=Url::toRoute('user/chpass')?>"><p class="menu-item">修改密码</p></a>
		<p class="menu-title"><img src="web/icon/authority.png">权限管理</p>
			<a href="#"><p class="menu-item">用户管理</p></a>
			<a href="#"><p class="menu-item">测试</p></a>

	</div>
	<div id="right">
		<?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
		<?= $content ?>
	</div>
</section>

<footer>
	<p><a href="/Association/">网站首页</a> 关于我们 联系我们 客户服务</p>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
	if(Yii::$app->session->hasFlash('message')){
		echo "<script>alert('" . Yii::$app->session->getFlash('message') . "')</script>";
	}
?>
