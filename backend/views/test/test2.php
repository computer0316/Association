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
	<img  title="点击刷新" src="<?= Url::toRoute('test/test1') ?>" align="absbottom" onclick="this.src='<?= Url::toRoute('test/test1') ?>'+'&'+Math.random();"></img>
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