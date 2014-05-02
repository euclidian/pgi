<?php
/* @var $this AtributLeaseController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Atribut Leases',
);

$this->menu=array(
	array('label'=>'Create AtributLease', 'url'=>array('create')),
	array('label'=>'Manage AtributLease', 'url'=>array('admin')),
);
?>

<h1>Atribut Leases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
