<?php
/* @var $this LeaseController */
/* @var $model Lease */

$this->breadcrumbs=array(
	'Leases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Lease', 'url'=>array('index')),
	array('label'=>'Manage Lease', 'url'=>array('admin')),
);
?>

<h1>Create Lease</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>