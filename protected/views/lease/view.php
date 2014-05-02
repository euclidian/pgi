<?php
/* @var $this LeaseController */
/* @var $model Lease */

$this->breadcrumbs=array(
	'Leases'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Lease', 'url'=>array('index')),
	array('label'=>'Create Lease', 'url'=>array('create')),
	array('label'=>'Update Lease', 'url'=>array('update', 'id'=>$model->id_lease)),
	array('label'=>'Delete Lease', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_lease),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Lease', 'url'=>array('admin')),
);
?>

<h1>View Lease #<?php echo $model->id_lease; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'id_lease',
	),
)); ?>

<br/>
<br/>
<br/>
<br/>
Atribut Tambahan

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'atribut-lease-grid',
	'dataProvider'=>$model2->search(),
	'filter'=>$model2,
	'columns'=>array(
		// 'id',
		'name',
		'value',
		'id_lease',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
