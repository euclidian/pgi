<?php
/* @var $this LeaseController */
/* @var $model Lease */

$this->breadcrumbs=array(
	'Leases'=>array('index'),
	$model->name=>array('view','id'=>$model->id_lease),
	'Update',
);

$this->menu=array(
	array('label'=>'List Lease', 'url'=>array('index')),
	array('label'=>'Create Lease', 'url'=>array('create')),
	array('label'=>'View Lease', 'url'=>array('view', 'id'=>$model->id_lease)),
	array('label'=>'Manage Lease', 'url'=>array('admin')),
);
?>

<h1>Update Lease <?php echo $model->id_lease; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>