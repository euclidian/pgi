<?php
/* @var $this LeaseController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Leases',
);

$this->menu=array(
	array('label'=>'Create Lease', 'url'=>array('create')),
	array('label'=>'Manage Lease', 'url'=>array('admin')),
);
?>

<h1>Leases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
