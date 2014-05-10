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