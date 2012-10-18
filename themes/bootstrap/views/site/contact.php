<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<h1>Contact Us</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="alert alert-info">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>
If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
</p>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name', array('class'=>'span5',)); ?>

	<?php echo $form->textFieldRow($model,'email', array('class'=>'span5',)); ?>

	<?php echo $form->textFieldRow($model,'subject', array('class'=>'span5', 'maxlength'=>128)); ?>

	<?php echo $form->textAreaRow($model,'body', array('class'=>'span5', 'rows'=>6)); ?>

	<?php if(CCaptcha::checkRequirements()): ?>
	    <div>
		<?php $this->widget('CCaptcha'); ?>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		</div>
		<?php echo $form->textFieldRow($model,'verifyCode', array('class'=>'span5',)); ?><br />
	<?php endif; ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Submit',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

<?php endif; ?>
