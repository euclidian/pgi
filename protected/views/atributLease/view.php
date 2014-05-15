<?php
/* @var $this AtributLeaseController */
/* @var $model AtributLease */

$this->breadcrumbs=array(
	'Atribut Leases'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List AtributLease', 'url'=>array('index')),
	array('label'=>'Create AtributLease', 'url'=>array('create')),
	array('label'=>'Update AtributLease', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AtributLease', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AtributLease', 'url'=>array('admin')),
);
?>

<h1>View AtributLease #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		// 'id',
		'name',
		'value',
		'idLease.name',
	),
)); ?>
