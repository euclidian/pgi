<?php
/* @var $this AtributLeaseController */
/* @var $model AtributLease */

$this->breadcrumbs=array(
	'Atribut Leases'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AtributLease', 'url'=>array('index')),
	array('label'=>'Create AtributLease', 'url'=>array('create')),
	array('label'=>'View AtributLease', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AtributLease', 'url'=>array('admin')),
);
?>

<h1>Update AtributLease <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>