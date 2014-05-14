<?php
/* @var $this WellController */
/* @var $model Well */

$this->breadcrumbs=array(
	'Wells'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Well', 'url'=>array('admin')),
	array('label'=>'Create Well', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#well-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Wells</h1>
<?php echo CHtml::beginForm();?>	
	<?php echo CHtml::dropDownList('pilihanlease',$pilihanlease,CHtml::listData(Lease::model()->findAll(), 'id_lease', 'name'),array('empty'=>'Show All','onchange'=>'submit()'));?>
<?php echo CHtml::endForm();?>

<br/>
<br/>
<br/>

<div style="margin-left: -140px;">
<?php 
	if (Yii::app()->getModule('user')->isAdmin()) {
		echo CHtml::Button('Create new well',array('submit'=>array('well/create'))); 
	}
?> 
</div>

<br/>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php
// $dataProvider = new CActiveDataProvider($model, array(
	// 'pagination'=>array(
			// 'pageSize'=>3,
	// ),
// ));
if (Yii::app()->getModule('user')->isAdmin()) {
	 $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'well-grid',
		'dataProvider'=>$model->search2($pilihanlease),
		// 'dataProvider'=>$dataProvider,
		// 'ajaxUpdate'=>false,
		// 'filter'=>$model,
		// 'enableHistory' => true,
		'cssFile' => false,		
		'columns'=>array(
			// 'id',
			'name',
			'api',
			'active',
			'production',
			'note',		
			// 'id_lease',
			'idLease.name',
			// array(
            // 'name'=>'id_lease',
            // 'value'=>'$data->id_lease',
            // 'filter'=>Chtml::listData(Lease::model()->findAll(),'id_lease','id_lease'),
            // ),
        
			'last_update',		
			array(
				'class'=>'CButtonColumn',
			),
		),
	)); 
}else{
	$this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'well-grid',
		'dataProvider'=>$model->search2($pilihanlease),
		// 'filter'=>$model,
		'cssFile' => false,
		'columns'=>array(
			// 'id',
			'name',
			'api',
			'active',
			'production',
			'note',		
			'idLease.name',
			'last_update',		
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
	)); 
}
?>
