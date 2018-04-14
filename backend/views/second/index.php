<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\BaseCommunity;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Seconds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="second-index">
	<?php
		echo '<table class="normal-table">';
		echo '<tr>';
		echo '<td>小区名称</td>';
		echo '<td>位置</td>';
		echo '<td>价格</td>';
		echo '<td>面积</td>';
		echo '<td>室</td>';
		echo '<td>朝向</td>';
		echo '<td>楼层</td>';
		echo '<td>装修程度</td>';
		echo '<td>建成年代</td>';
		echo '<td>开发商</td>';
		echo '<td>物业</td>';
		echo '</tr>';

		foreach($seconds as $second){
			echo '<tr>';
			echo '<td>' . BaseCommunity::findOne($second->community_id)->name . '</td>';
			echo '<td>' . $second->position . '</td>';
			echo '<td>' . $second->price . '</td>';
			echo '<td>' . $second->area . '</td>';

			echo '<td>' . $second->room . '室' . $second->hall . '厅' . $second->toilet . '卫</td>';
			echo '<td>' . $second->direction . '</td>';
			echo '<td>' . $second->floor . '/' . $second->total_floor . '</td>';
			echo '<td>' . $second->decoration . '</td>';
			echo '<td>' . $second->birth . '</td>';
			echo '<td>' . $second->company . '</td>';
			echo '<td>' . $second->property_company . '</td>';
			echo '</tr>';
		}
		echo '</table>';
	?>
</div>
