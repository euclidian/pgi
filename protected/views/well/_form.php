<?php
/* @var $this WellController */
/* @var $model Well */
/* @var $form CActiveForm */	
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'well-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'api'); ?>
		<?php echo $form->textField($model,'api',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'api'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->dropDownList($model,'active',array('0','1'));?>		
		<?php echo $form->error($model,'active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'production'); ?>
		<?php echo $form->textField($model,'production',array('size'=>60,'maxlength'=>65)); ?>
		<?php echo $form->error($model,'production'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'note'); ?>
		<?php echo $form->textField($model,'note',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'note'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_lease'); ?>
		<?php echo $form->dropDownList($model,'id_lease',CHtml::listData(Lease::model()->findAll(), 'id_lease', 'name'),array('empty'=>'-----Pilih Lease-----'));?>
		<?php echo $form->error($model,'id_lease'); ?>
	</div>	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->