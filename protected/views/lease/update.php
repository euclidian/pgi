<?php
/* @var $this LeaseController */
/* @var $model Lease */

$this->breadcrumbs=array(
	'Leases'=>array('index'),
	$model->name=>array('view','id'=>$model->id_lease),
	'Update',
);

$this->menu=array(
	array('label'=>'List Lease', 'url'=>array('index')),
	array('label'=>'Create Lease', 'url'=>array('create')),
	array('label'=>'View Lease', 'url'=>array('view', 'id'=>$model->id_lease)),
	array('label'=>'Manage Lease', 'url'=>array('admin')),
);
?>

<h1>Update Lease <?php echo $model->id_lease; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<br/>
<br/>
<br/>
Atribut Tambahan
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'atribut-lease-grid',
	'dataProvider'=>$model2->searchIDLease($model->id_lease),
	'filter'=>$model2,
	// 'selectionChanged'=>"function(id){window.location='" . Yii::app()->createUrl("site/detailpengadaan", array("id"=>"$model->id_pengadaan")) . "'+ $.fn.yiiGridView.getSelection(id);}",
	'columns'=>array(
		// 'id',
		'name',
		'value',
		'id_lease',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{update}{delete}',
			'buttons'=>array(
				'view'=>array(
					'url'=>'Yii::app()->createUrl("atributlease/view", array("id"=>$data->id))',
				),
				'update'=>array(
					'url'=>'Yii::app()->createUrl("atributlease/update", array("id"=>$data->id))',
				),
				'delete'=>array(
					'url'=>'Yii::app()->createUrl("atributlease/delete", array("id"=>$data->id))',
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