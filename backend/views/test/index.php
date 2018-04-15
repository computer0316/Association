<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Community;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\Second */
/* @var $form yii\widgets\ActiveForm */
?>

<div style="margin:10px;">
	<div id="position-hit">

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
			$("#position-hit").load('?r=test/ajax&str=' + $("#test-name").val(), function(){
						$("p.hitp").click(function(){
							$("#test-name").val($(this).text());
							$("#position-hit").css("display", "none");
						});
			});
	  		$("#position-hit").css("display", "block");
		});
	})
</script>
<style>
	#position-hit{
		position:absolute;
		border:1px solid #ccc;
		background:white;
		left:365px;
		top:136px;
		width:300px;		
		display:none;
	}
	#position-hit p{
		line-height:32px;
	}
	#position-hit p:hover{
		background:#eee;
	}
</style>