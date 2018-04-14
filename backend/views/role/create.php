<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\BaseRole */

$this->title = 'Create Base Role';
$this->params['breadcrumbs'][] = ['label' => 'Base Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="base-role-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
