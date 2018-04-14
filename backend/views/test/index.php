<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Community;

/* @var $this yii\web\View */
/* @var $model backend\models\Second */
/* @var $form yii\widgets\ActiveForm */
?>

<div style="margin:10px;">

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
		$("input").keydown(function(){
	  		alert('a');
		});
	})
</script>
<style>
	#position-hit{
		position:absolute;
		border:1px solid blue;
		left:355px;
		top:168px;
	}
</style>