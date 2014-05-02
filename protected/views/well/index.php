<?php
/* @var $this WellController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Wells',
);

$this->menu=array(
	array('label'=>'Create Well', 'url'=>array('create')),
	array('label'=>'Manage Well', 'url'=>array('admin')),
);
?>

<h1>Wells</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
