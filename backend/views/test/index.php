<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Community;

/* @var $this yii\web\View */
/* @var $model backend\models\Second */
/* @var $form yii\widgets\ActiveForm */
?>

<div style="margin:10px;">
	<div id="position-hit">
		<p><a class="hitp" href="#">这里是测试文字</a></p>
		<p><a class="hitp" href="#">这里是测试文字</a></p>
		<p><a class="hitp" href="#">这里是测试文字</a></p>
		<p><a class="hitp" href="#">这里是测试文字</a></p>
		<p><a class="hitp" href="#">这里是测试文字</a></p>
		<p><a class="hitp" href="#">这里是测试文字</a></p>
		<p><a class="hitp" href="#">这里是测试文字</a></p>
		<p><a class="hitp" href="#">这里是测试文字</a></p>
	</div>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($test, 'name')->textInput() ?>

    <?= $form->field($test, 'updatetime')->textInput() ?>

    <div class="form-group">
    	<label class="control-label">&nbsp;</label>
        <?= Html::submitButton($test->isNewRecord ? '添加' : '更新', ['class' => $test->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script>
	$(document).ready(function(){
		$("#test-name").on('input propertychange', function(){
	  		$("#position-hit").css("display", "block");
		});
		$("a.hitp").click(function(){
			$("#test-name").val($(this).text());
			$("#position-hit").css("display", "none");
		});
	})
</script>
<style>
	#position-hit{
		position:absolute;
		border:1px solid #ccc;
		background:#ccc;
		left:365px;
		top:136px;
		width:300px;		
		display:none;
	}
	#position-hit p:hover{
		background:#abc;
	}
</style>