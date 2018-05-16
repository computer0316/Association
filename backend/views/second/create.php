<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

use frontend\models\BaseDecoration;
use frontend\models\BaseHousetype;
use frontend\models\BaseDirection;
use frontend\models\BaseConstructure;

/* @var $this yii\web\View */
/* @var $model frontend\models\Second */
/* @var $form ActiveForm */
$this->title = '房源添加';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
	.create{
		float:left;
		margin-left:50px;
		margin-bottom:20px;
		font-size:14px;
		color:black;
	}
	.title{
		width:100%;
		height:36px;
		line-height:36px;
		font-size:14px;
		margin-bottom:20px;
		color:#bbb;
	}
	#form-left,#form-right{
		float:left;
		width:700px;
	}
	.line{
		float:left;
		width:100%;
		margin-top:24px;
	}
	.line p{
		line-height:30px;
	}
	input,select{
		height:30px;
		border:1px solid #bbb;
		padding:0 10px;
		font-size:14px;
	}
	select{
		margin-right:20px;
	}
	.control-label{
		float:left;
		width:70px;
		line-height:30px;
		text-align:right;
		margin-right:10px;
	}
	.control-label[for=second-title]{
		text-align:left;
		margin-left:15px;
	}
	.field-second-title .help-block{
		left:15px;
		top:55px;
	}
	.form-group, .inline{
		float:left;
		position:relative;
	}
	.inline .control-label{
		display:none;
	}
	.inline .help-block{
		position:absolute;
		top:25px;
		left:0px;
		width:180px;
		line-height:30px;
		color:red;
	}
	.help-block{
		position:absolute;
		top:25px;
		left:80px;
		width:180px;
		line-height:30px;
		color:red;
	}
	button{
		padding:8px 15px;
		font-size:20px;
		color:white;
		background-color:#ff8420;
		border:1px solid #ff8420;
		border-radius:3px;
	}
	input[type="file"]{
		border:none;
	}
	.required label:before{
		content:"*";
		color:red;
	}
</style>
<div class="container">
	<div class="create">
    <?php $form = ActiveForm::begin(); ?>
    	<div id="form-left">
			<div class="line">
				<?= $form->field($model, 'inner_id')->label('内部编号') ?>
			</div>
			<div class="line">
		        <?= $form->field($model, 'building_id')->textInput(['style' => 'width:30px;'])  ?>
		        <?= $form->field($model, 'unit_id')->textInput(['style' => 'width:30px;'])  ?>
		        <?= $form->field($model, 'room_id')->textInput(['style' => 'width:30px;'])  ?>
			</div>
			<div class="line">
				<?= $form->field($model, 'city_id')->label('所在区域')->dropDownlist(['131003' => '广阳区', '131002' => '安次区', '131001' => '开发区']) ?>
			</div>
			<div class="line" style="position:relative;">
				<?= $form->field($community, 'name')->textInput(['style' => 'width:300px;', 'autocomplete' => "off"]) ?>
				<div id="community-ajax"></div>
			</div>
			<div class="line">
		        <?= $form->field($model, 'room')->textInput(['style' => 'width:30px;']) ?>
		        <?= $form->field($model, 'hall')->textInput(['style' => 'width:30px;']) ?>
		        <?= $form->field($model, 'toilet')->textInput(['style' => 'width:30px;']) ?>
			</div>
			<div class="line">
				<label class="control-label">&nbsp;</label>
		        <?= $form->field($model, 'housetype', ['options' => ['class' => 'inline']])->dropDownlist(createDropDownlist(BaseHousetype::className(), ['空' => '房屋类型'])) ?>
		        <?= $form->field($model, 'decoration', ['options' => ['class' => 'inline']])->dropDownlist(createDropDownlist(BaseDecoration::className(), ['空' => '装修程度'])) ?>
		        <?= $form->field($model, 'direction', ['options' => ['class' => 'inline']])->dropDownlist(createDropDownlist(BaseDirection::className(), ['空' => '房屋朝向'])) ?>
		        <?= $form->field($model, 'constructure', ['options' => ['class' => 'inline']])->dropDownlist(createDropDownlist(BaseConstructure::className(), ['空' => '建筑结构'])) ?>
			</div>
			<div class="line">
	        	<?= $form->field($model, 'floor')->textInput(['style' => 'width:30px;'])  ?>
	        	<?= $form->field($model, 'total_floor')->textInput(['style' => 'width:30px;'])  ?>
			</div>
			<div class="line">
		        <?= $form->field($model, 'area')->textInput(['style' => 'width:50px;'])  ?>
		        <?= $form->field($model, 'inner_area')->textInput(['style' => 'width:50px;'])  ?>
			</div>
			<div class="line">
		        <?= $form->field($model, 'can_own')->dropDownlist(['空' => '产权年限', '70' => '70年', '50' => '50年', '40' => '40年'])  ?>
		        <?= $form->field($model, 'own_type')->dropDownlist(['空' => '产权类型', '1' => '商品房', '2' => '商住两用', '3' => '经济适用房', '4' => '使用权', '5' => '公房', '6' => '其他'])  ?>
			</div>
			<div class="line">
	        	<?= $form->field($model, 'birth')->textInput(['style' => 'width:50px;'])  ?>
			</div>
			<div class="line">
				<?= $form->field($model, 'license_year')->textInput(['style' => 'width:50px;'])  ?>
				<?= $form->field($model, 'only_house')->dropDownlist(['0' => '否', '1' => '是']) ?>
			</div>
			<div class="line">
				<?= $form->field($model, 'price')->textInput(['style' => 'width:50px;'])  ?>
				<?= $form->field($model, 'updatetime')->label(false)->hiddenInput(['value' => date("Y-m-d H:i:s", time())])  ?>
			</div>
		</div>
		<div id="form-right">
			<div class="line">
				<?= $form->field($model, 'title')->textInput(['style' => 'width:651px;'])  ?>
			</div>
			<div class="line">
		        <?= $form->field($model, 'house_info')->textArea(['rows' => 5, 'cols' => 80]) ?>
			</div>
			<div class="line">
	    	    <?= $form->field($model, 'mood')->textArea(['rows' => 5, 'cols' => 80]) ?>
			</div>
			<div class="line">
	        	<?= $form->field($model, 'service')->textArea(['rows' => 5, 'cols' => 80]) ?>
			</div>
			<div class="line">
				<?= $form->field($upload, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*'])->label('上传图片') ?>
			</div>
		</div>
        <div class="line" style="margin-top:40px;">
        	<label class="control-label">&nbsp;</label>
            <?= Html::submitButton('发布房源') ?>
        </div>
    <?php ActiveForm::end(); ?>
	</div>
</div>
<script>
	$(document).ready(function(){
		$("#basecommunity-name").on('input propertychange', function(){
			$("#community-ajax").load('?r=second/community-ajax&str=' + $("#basecommunity-name").val(), function(response, status){
					if(status=="success" && response!='false'){
						$("#community-ajax").css("display", "block");
						$("p.hitp").click(function(){
							$("#basecommunity-name").val($(this).text());
							$("#community-ajax").css("display", "none");
						});
					}
					else{
						$("#community-ajax").css("display", "none");
					}
			});
		});
	})
</script>
<style>
	#community-ajax{
		float:none;
		position:absolute;
		border:1px solid #ccc;
		background:white;
		left:80px;
		top:31px;
		width:300px;
		z-index:5;
		display:none;
	}
	#community-ajax p{
		width:100%;
		line-height:32px;
	}
	#community-ajax p:hover{
		background:#eee;
	}
</style>

<?php
	function createDropDownlist($className, $tipArray){
		$arr = $className::find()->select(['name', 'id'])->indexBy('id')->column();
    	$arr = $tipArray + $arr;
    	return $arr;
	}
?>
