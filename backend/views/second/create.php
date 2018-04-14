<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Second */

$this->title = '添加房屋信息';
$this->params['breadcrumbs'][] = ['label' => 'Seconds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="second-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
