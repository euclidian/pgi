<?php
/* @var $this ActiveController */
/* @var $model Active */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'active-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_well'); ?>
		<?php echo $form->dropDownList($model,'id_well',CHtml::listData(Well::model()->findAll(), 'id', 'name'),array('empty'=>'-----Pilih Well-----'));?>
		<?php echo $form->error($model,'id_well'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->dropDownList($model,'active',array('0','1'));?>		
		<?php echo $form->error($model,'active'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'change_date'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
			'model'=>$model,
			'attribute'=>'change_date',
			'value'=>$model->change_date,
			// 'htmlOptions'=>array('size'=>56),
			'options'=>array(
				'dateFormat'=>'y-m-d',
			),
		));?>
		<?php echo $form->error($model,'change_date'); ?>
	</div>	

	<div class="row">
		<?php echo $form->labelEx($model,'note'); ?>
		<?php echo $form->textField($model,'note',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'note'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'production'); ?>
		<?php echo $form->textField($model,'production',array('size'=>60,'maxlength'=>65)); ?>
		<?php echo $form->error($model,'production'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->