<?php
/* @var $this LeaseController */
/* @var $data Lease */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_lease')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_lease), array('view', 'id'=>$data->id_lease)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />


</div>