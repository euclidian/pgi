<?php
/* @var $this WellController */
/* @var $model Well */

$this->breadcrumbs=array(
	'Wells'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Well', 'url'=>array('index')),
	array('label'=>'Create Well', 'url'=>array('create')),
	array('label'=>'Update Well', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Well', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Well', 'url'=>array('admin')),
);
?>

<h1>View Well #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'api',
		'active',
		'production',
		'note',
		'id_lease',
	),
)); ?>
