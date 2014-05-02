<?php
/* @var $this AtributWellController */
/* @var $model AtributWell */

$this->breadcrumbs=array(
	'Atribut Wells'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List AtributWell', 'url'=>array('index')),
	array('label'=>'Create AtributWell', 'url'=>array('create')),
	array('label'=>'Update AtributWell', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AtributWell', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AtributWell', 'url'=>array('admin')),
);
?>

<h1>View AtributWell #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'value',
		'id_well',
	),
)); ?>
