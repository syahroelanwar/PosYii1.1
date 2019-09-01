<?php
/* @var $this PegawaiController */
/* @var $model Pegawai */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'pegawai-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'jk'); ?>
		<?php echo $form->textField($model,'jk',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'jk'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'no_hp'); ?>
		<?php echo $form->textField($model,'no_hp'); ?>
		<?php echo $form->error($model,'no_hp'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'jabatan'); ?>
		<?php echo $form->textField($model,'jabatan',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'jabatan'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'brn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->