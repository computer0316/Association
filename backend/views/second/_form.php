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

    <?= $form->field($model, 'community_id')->dropDownList(
    	Community::find()->select(['name', 'id'])->indexBy('id')->column(),['prompt' => '请选择小区', 'value' => $model->community_id]
    	) ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true, 'style' => 'width:350px;']) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true, 'placeholder' => '万元', 'style' => 'width:80px;']) ?>

    <?= $form->field($model, 'area')->textInput(['maxlength' => true, 'style' => 'width:80px;']) ?>

    <?= $form->field($model, 'room', ['options' => ['class' => 'in-line']])->textInput(['style' => 'width:25px;']) ?>

    <?= $form->field($model, 'hall', ['options' => ['class' => 'in-line']])->textInput(['style' => 'width:25px;']) ?>

    <?= $form->field($model, 'toilet', ['options' => ['class' => 'in-line']])->textInput(['style' => 'width:25px;']) ?>

    <?= $form->field($model, 'direction')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'floor', ['options' => ['class' => 'in-line']])->textInput() ?>

    <?= $form->field($model, 'total_floor', ['options' => ['class' => 'in-line']])->textInput() ?>

    <?= $form->field($model, 'decoration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth')->textInput() ?>

    <?= $form->field($model, 'traffic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'specialty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'property_fee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company')->textInput() ?>

    <?= $form->field($model, 'property_company')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
