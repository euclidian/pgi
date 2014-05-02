<?php
/* @var $this AtributLeaseController */
/* @var $model AtributLease */

$this->breadcrumbs=array(
	'Atribut Leases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AtributLease', 'url'=>array('index')),
	array('label'=>'Manage AtributLease', 'url'=>array('admin')),
);
?>

<h1>Create AtributLease</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>