<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\BaseRole;
use backend\models\User;
use backend\components\TableWidget;


/* @var $this yii\web\View */
/* @var $model backend\models\BaseRole */

$this->title = '编辑用户角色';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="content">
	<div class="content-block">
	    <?php
	    	echo '<p class="content-title"">' . $user->name . '所属角色：</p>';
		    foreach($userRoles as $ur){
		    	echo '&nbsp;&nbsp;&nbsp;' . BaseRole::findOne($ur->roleid)->name . '<br />';
		    }
		?>
		<br />
	</div>
	<div class="content-block">
		<p class="content-title">编辑用户角色</p>
		<?php $form = ActiveForm::begin(); ?>

	    <?= $form->field($userRole, 'userid', ['options' =>['style' => 'display:none;'] ])->textInput(['maxlength' => true, 'value' => $user->id]) ?>

	    <?= $form->field($userRole, 'roleid')->
	    			label('请选择角色')->
	    			dropDownList(BaseRole::find()->select(['name', 'id'])->indexBy('id')->column(), ['prompt' => '请选择角色']) ?>

	    <div class="button-group">
	        <?= Html::submitButton('添加角色') ?>
	    </div>

	    <?php ActiveForm::end(); ?>
	 </div>

</div>


