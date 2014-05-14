<?php
/* @var $this LeaseController */
/* @var $model Lease */

$this->breadcrumbs=array(
	'Leases'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Lease', 'url'=>array('index')),
	array('label'=>'Create Lease', 'url'=>array('create')),
	array('label'=>'Update Lease', 'url'=>array('update', 'id'=>$model->id_lease)),
	array('label'=>'Delete Lease', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_lease),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Lease', 'url'=>array('admin')),
);
?>

<h1>View Lease #<?php echo $model->id_lease; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'id_lease',
		'last_update',
	),
)); ?>

<br/>
<br/>
<br/>
Attributes
<?php 
if (Yii::app()->getModule('user')->isAdmin()) {
	$this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'atribut-lease-grid',
		'dataProvider'=>$model2->searchIDLease($model->id_lease),
		// 'filter'=>$model2,
		'cssFile' => false,
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
	)); 
}else{
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'atribut-lease-grid',
	'dataProvider'=>$model2->searchIDLease($model->id_lease),
	// 'filter'=>$model2,
	'cssFile' => false,
	// 'selectionChanged'=>"function(id){window.location='" . Yii::app()->createUrl("site/detailpengadaan", array("id"=>"$model->id_pengadaan")) . "'+ $.fn.yiiGridView.getSelection(id);}",
	'columns'=>array(
		// 'id',
		'name',
		'value',
		'id_lease',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
			// 'buttons'=>array(
				// 'view'=>array(
					// 'url'=>'Yii::app()->createUrl("atributlease/view", array("id"=>$data->id))',
				// ),
				// 'update'=>array(
					// 'url'=>'Yii::app()->createUrl("atributlease/update", array("id"=>$data->id))',
				// ),
				// 'delete'=>array(
					// 'url'=>'Yii::app()->createUrl("atributlease/delete", array("id"=>$data->id))',
				// ),
			// ),
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
));
}
?>


<br/>
<div style="margin-left: -140px;">
	<?php 
		if (Yii::app()->getModule('user')->isAdmin()) {
			echo CHtml::Button('Create new attribute',array('submit'=>array('atributlease/create','id_lease'=>$model->id_lease))) ;
		}
	?> 
</div>