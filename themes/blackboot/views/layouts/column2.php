<?php $this->beginContent('//layouts/main'); ?>
      <!--
	  <div class="row-fluid">
        <div class="span3">
         <?php
			// $this->beginWidget('zii.widgets.CPortlet', array(
				// 'title'=>'Operations',
			// ));
			// $this->widget('zii.widgets.CMenu', array(
				// 'items'=>$this->menu,
				// 'htmlOptions'=>array('class'=>'sidebar'),
			// ));
			// $this->endWidget();
		?>
		</div>
		-->
	<div class="span12">
		<div class="main">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
</div>
<?php $this->endContent(); ?>
