<?php
/* @var $this WellController */
/* @var $model Well */

$this->breadcrumbs=array(
	'Wells'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Well', 'url'=>array('index')),
	array('label'=>'Create Well', 'url'=>array('create')),
	array('label'=>'View Well', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Well', 'url'=>array('admin')),
);
?>

<h1>Update Well <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>