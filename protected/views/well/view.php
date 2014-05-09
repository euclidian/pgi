<?php
/* @var $this WellController */
/* @var $model Well */

$this->breadcrumbs=array(
	'Wells'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Well', 'url'=>array('index')),
	array('label'=>'Create Well', 'url'=>array('create')),
	array('label'=>'Update Well', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Well', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Well', 'url'=>array('admin')),
);
?>

<h1>View Well #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'api',
		'active',
		'production',
		'note',
		'id_lease',
		'last_update',
	),
)); ?>

<br/>
<br/>
<br/>
Attributes
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'atribut-lease-grid',
	'dataProvider'=>$model2->searchIDWell($model->id),
	'filter'=>$model2,
	// 'selectionChanged'=>"function(id){window.location='" . Yii::app()->createUrl("site/detailpengadaan", array("id"=>"$model->id_pengadaan")) . "'+ $.fn.yiiGridView.getSelection(id);}",
	'columns'=>array(
		// 'id',
		'name',
		'value',
		'id_well',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{update}{delete}',
			'buttons'=>array(
				'view'=>array(
					'url'=>'Yii::app()->createUrl("atributwell/view", array("id"=>$data->id))',
				),
				'update'=>array(
					'url'=>'Yii::app()->createUrl("atributwell/update", array("id"=>$data->id))',
				),
				'delete'=>array(
					'url'=>'Yii::app()->createUrl("atributwell/delete", array("id"=>$data->id))',
				),
			),
		),		
	),
	'pager'=>array(
			'class'=>'CLinkPager',
			'header'=>'',
			// 'nextPageLabel'=>"Selanjutnya",
			// 'prevPageLabel'=>'Sebelumnya',
	),
	'summaryText'=>'',
	'emptyText'=>'',
)); ?>

<?php echo CHtml::Link('Create new attribute',array('atributwell/create')); ?> 