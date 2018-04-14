<?php
// 编码
namespace backend\components;

use yii\base\Widget;
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;

/*
			echo TableWidget::widget(
				[
					'data'		=> $users,
					'fields'	=> ['id', 'name', 'mobile', 'firsttime', 'updatetime', 'ip'],
					'functions'	=> [['角色' => 'role/edit'],['删除' => 'role/delete']],
					'pagination'=> $pagination,
				]
			);
*/

class TableWidget extends Widget
{
	public $data		= [];
	public $fields		= [];
	public $functions	= [];
	public $pagination;
	
	private $_fields;
	private $_content;
	
    public function init()
    {
        parent::init();

       	$this->_content	= '<table>';
       	$this->_content	.= '<tr>';
       	// 从传入的表格数据对象读取表头
       	if($this->data[0] != null){
       		// 读取模型的Labels信息，从第一个记录的对象中读取。
       		// 返回的是一个数组，形如： [字段名 => 字段标签, ...]
       		$labels = $this->data[0]->attributelabels();	
       		// 读取 $labels 的键名
			foreach($labels as $key => $values){
				$this->_fields[] = $key;
			}
			// 显示表头，即：$labels 的键值
			foreach($this->fields as $field){
				$this->_content	.= '<td>' . $labels[$field] . '</td>';
			}
		}
		if($this->functions != null){
			$this->_content .= '<td>操作</td>';
		}
		$this->_content	.= '</tr>';
		
		// 显示数据
		foreach($this->data as $record){
			$this->_content	.= '<tr>';
			foreach($this->fields as $field){
				$this->_content	.= '<td>' . $record[$field] . '</td>';
			}
			if($this->functions != null){
				$this->_content .= '<td>';				
				foreach($this->functions as $function){
					$this->_content .= '<a href="' . Url::toRoute($function[array_keys($function)[0]]) . '&id=' . $record->id . '">' . array_keys($function)[0] . '</a>&nbsp;';
				}
				$this->_content .= '</td>';
			}			
			$this->_content	.= '</tr>';
		}
		$this->_content	.= '</table>';
		
		// 显示分页
		if($this->pagination != null){
			$this->_content	.= LinkPager::widget(['pagination' => $this->pagination,]);
		}
    }



		
    public function run()
    {
        return $this->_content;
    }
}