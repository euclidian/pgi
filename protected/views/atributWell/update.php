<?php
/* @var $this AtributWellController */
/* @var $model AtributWell */

$this->breadcrumbs=array(
	'Atribut Wells'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AtributWell', 'url'=>array('index')),
	array('label'=>'Create AtributWell', 'url'=>array('create')),
	array('label'=>'View AtributWell', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AtributWell', 'url'=>array('admin')),
);
?>

<h1>Update AtributWell <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>