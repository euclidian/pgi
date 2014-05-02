<?php
/* @var $this AtributWellController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Atribut Wells',
);

$this->menu=array(
	array('label'=>'Create AtributWell', 'url'=>array('create')),
	array('label'=>'Manage AtributWell', 'url'=>array('admin')),
);
?>

<h1>Atribut Wells</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
