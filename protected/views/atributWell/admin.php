<?php
/* @var $this AtributWellController */
/* @var $model AtributWell */

$this->breadcrumbs=array(
	'Atribut Wells'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AtributWell', 'url'=>array('index')),
	array('label'=>'Create AtributWell', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#atribut-well-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Atribut Wells</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
if (Yii::app()->getModule('user')->isAdmin()) {
	$this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'atribut-well-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
			'id',
			'name',
			'value',
			'id_well',
			array(
				'class'=>'CButtonColumn',
			),
		),
	)); 
}else{
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'atribut-well-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'value',
		'id_well',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
		),
	),
));
}	
?>
