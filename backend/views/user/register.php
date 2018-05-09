<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use yii\helpers\Url;
	use yii\widgets\LinkPager;
	use yii\captcha\Captcha;
	// 客户信息窗体

?>

	<div class="form1">
		<div class="form">
			<div id="logintitle"><?= Yii::$app->params['sitename'] ?>用户注册</div>
<?php

	$form = ActiveForm::begin([
		'id' => 'clientform',
	]);

?>

	<?= $form->field($loginForm, 'mobile')->textInput(['autofocus' => true, 'class' => 'menu1']) ?>

	<?= $form->field($loginForm, 'verifyCode') ?>
	<img style="float:left;margin-left:130px;" title="点击刷新" src="<?= Url::toRoute('test/test1') ?>" align="absbottom" onclick="this.src='<?= Url::toRoute('test/test1') ?>'+'&'+Math.random();"></img>
	

<div class="form-group button-group">

	<?= Html::submitButton('提交', ['class' => 'submit']) ?>

</div>

<?php
	ActiveForm::end();
?>
</div></div>
