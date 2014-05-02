<?php
/* @var $this WellController */
/* @var $model Well */

$this->breadcrumbs=array(
	'Wells'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Well', 'url'=>array('index')),
	array('label'=>'Manage Well', 'url'=>array('admin')),
);
?>

<h1>Create Well</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>