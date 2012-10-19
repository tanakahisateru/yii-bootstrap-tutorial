<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div class="visible-phone">
	<?php
		$this->widget('bootstrap.widgets.TbButtonGroup', array(
			'buttons'=>array(
				array('label'=>'Operations', 'icon'=>'cog', 'items'=>$this->menu),
			)
		));
	?>
</div>

<div class="row">
<div class="span9">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span3 hidden-phone">
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('bootstrap.widgets.TbMenu', array(
			'type'=>'pills',
			'stacked'=>true,
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
</div>
</div>
<?php $this->endContent(); ?>