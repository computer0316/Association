<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use yii\helpers\Url;
	use yii\widgets\LinkPager;
	use yii\captcha\Captcha;
	// 客户信息窗体
	$this->title = '身份认证';
	$this->params['breadcrumbs'][] = ['label' => '个人中心 >'];
	$this->params['breadcrumbs'][] = $this->title;
?>
<style>
	.attest-block{
		float:left;
		width:200px;
		height:200px;
		margin:30px;
		text-align:center;
		background:#f1f1f1;
		border:1px solid #e9e9e9;
	}
	.attest-block img{
		width:60%;
		margin-top:20px;
	}
</style>
<a href="<?= Url::toRoute('user/portrait') ?>">
	<div class="attest-block">
		<img src="web/icon/account.png" />
		<p>上传头像（必选）</p>
	</div>
</a>
<a href="<?= Url::toRoute('user/identification') ?>">
	<div class="attest-block">
		<img src="web/icon/idcard.png" />
		<p>上传身份证（必选）</p>
	</div>
</a>
