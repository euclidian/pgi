<?php
/* @var $this AtributWellController */
/* @var $model AtributWell */

$this->breadcrumbs=array(
	'Atribut Wells'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AtributWell', 'url'=>array('index')),
	array('label'=>'Manage AtributWell', 'url'=>array('admin')),
);
?>

<h1>Create AtributWell</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>