<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Second */

$this->title = '房源编号：'. $model->id;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="second-view">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


</div>
