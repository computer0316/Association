<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Second */
/* @var $form ActiveForm */
?>
<div class="second">
<div id="community-ajax"></div>
    <?php
    	$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); 

        echo $form->field($model, 'community',['options' => ['class' => 'form-group l300']]);
        echo $form->field($model, 'position',['options' => ['class' => 'form-group l300']]);
        
        echo $form->field($model, 'price');		
        echo $form->field($model, 'room',['options' => ['class' => 'in-line l50']]);
        echo $form->field($model, 'hall',['options' => ['class' => 'in-line l50']]);
        echo $form->field($model, 'toilet',['options' => ['class' => 'in-line l50']]);
        echo $form->field($model, 'area',['options' => ['class' => 'in-line l80']]);

        echo $form->field($model, 'type');
        echo $form->field($model, 'floor', ['options' => ['class' => 'in-line l50']]);
        echo $form->field($model, 'total_floor',['options' => ['class' => 'in-line l50']]);        
        echo $form->field($model, 'direction',['options' => ['class' => 'in-line l80']]);
        echo $form->field($model, 'decoration');                
        echo $form->field($model, 'birth');
         
        echo $form->field($upload, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*'])->label('上传图片');
        
//        echo $form->field($model, 'building_id');
//        echo $form->field($model, 'unit_id');
//        echo $form->field($model, 'room_id');
//
//        echo $form->field($model, 'traffic');
//        echo $form->field($model, 'specialty');
//        echo $form->field($model, 'company');
//        echo $form->field($model, 'property_fee');
//        echo $form->field($model, 'property_company');
    ?>
        <div class="form-group">
        	<label class="control-label">&nbsp;</label>
            <?= Html::submitButton('提交', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- second -->
<script>
	$(document).ready(function(){
		$("#second-community").on('input propertychange', function(){
			$("#community-ajax").load('?r=second/community-ajax&str=' + $("#second-community").val(), function(){
						$("p.hitp").click(function(){
							$("#second-community").val($(this).text());
							$("#community-ajax").css("display", "none");
						});
			});
	  		$("#community-ajax").css("display", "block");
		});
	})
</script>
<style>
	#community-ajax{
		position:absolute;
		border:1px solid #ccc;
		background:white;
		left:420px;
		top:178px;
		width:300px;		
		display:none;
	}
	#community-ajax p{
		line-height:32px;
	}
	#community-ajax p:hover{
		background:#eee;
	}
</style>