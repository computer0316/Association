<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Second */

$this->title = '添加房屋信息';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="second-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
