<?php
/* @var $this LeaseController */
/* @var $model Lease */

$this->breadcrumbs=array(
	'Leases'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Lease', 'url'=>array('index')),
	array('label'=>'Create Lease', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#lease-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Leases</h1>

<div style="margin-left: -140px;">
<?php echo CHtml::Button('Create new lease',array('submit'=>array('lease/create'))); ?> 
</div>

<br/>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
if (Yii::app()->getModule('user')->isAdmin()) {
	$this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'lease-grid',
		'dataProvider'=>$model->search(),
		// 'filter'=>$model,
		// 'pager' => array('cssFile' => Yii::app()->baseUrl . '/themes/blackboot/css/gridview.css'),
		// 'cssFile' => Yii::app()->baseUrl . '/themes/blackboot/css/gridview.css',
		'cssFile' => false,
		'columns'=>array(
			'name',
			'id_lease',
			'last_update',
			array(
				'header' => 'Actions',
				'class'=>'CButtonColumn',
			),
		),
	));
}else{
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'lease-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'name',
		'id_lease',
		'last_update',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
		),
	),
));
}
?>
