<?php
/* @var $this SupplierController */
/* @var $model Supplier */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'supplier-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nama_sup'); ?>
		<?php echo $form->textField($model,'nama_sup',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nama_sup'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'no_hp'); ?>
		<?php echo $form->textField($model,'no_hp',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'no_hp'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class' => 'brn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->