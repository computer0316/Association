<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use yii\helpers\Url;
	use yii\widgets\LinkPager;
	use yii\captcha\Captcha;
	use common\models\UploadForm;
	
	// 客户信息窗体
	$this->title = '身份认证';
	$this->params['breadcrumbs'][] = ['label' => '个人中心 >'];
	$this->params['breadcrumbs'][] = $this->title;
?>
<style>
	form{
		float:left;
		width:100%;
		margin:20px;
	}
	#portrait-img{
		margin:20px 60px;
		width:240px;
		height:160px;
	}
	#portrait-ul{
		list-style-type:none;
		margin-left:20px;
	}
	#portrait-ul li{
		font-size:12px;
		line-height:18px;
		color:#888;
	}
	input[type=file],button{
		width:160px;
		height:35px;
	}
	button{		
		float:left;
	}
</style>
<img id="portrait-img" src="<?= $picture ?>" />
<?php $form = ActiveForm::begin(); ?>
	    <?= $form->field($upload, 'imageFiles[]')->fileInput(['multiple' => false, 'accept' => 'image/*'])->label(false) ?>
        <?= Html::submitButton('上传头像') ?>
<?php ActiveForm::end(); ?>

<p style="margin:10px 20px;"><b>请按以下要求上传：</b></p>

<ul id="portrait-ul">
    <li>1. 近期本人拍摄的1寸或2寸、正面、免冠、彩色证件照；</li>
    <li>2. 正面拍摄正脸五官清晰，不可侧身，不可自拍，不能无视镜头；</li>
    <li>3. 照片要求头像清晰、完整，不能含有以下内容（如锦旗、军装、其他网站Logo、PS信息）；</li>
    <li>4. 上传文件大于20k，小于600k，支持jpg、jpeg、png格式的图片；</li>
    <li>5. 图片宽度大于113px，小于等于600px，图片高度大于150px</li>
	<li>* 温馨提示：您上传的头像不符合以上要求将会被退回。</li>
</ul>