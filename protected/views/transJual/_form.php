<?php
/* @var $this TransJualController */
/* @var $model TransJual */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'trans-jual-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'tgl'); ?>
		<?php echo $form->textField($model,'tgl'); ?>
		<?php echo $form->error($model,'tgl'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'waktu'); ?>
		<?php echo $form->textField($model,'waktu'); ?>
		<?php echo $form->error($model,'waktu'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'id_barang'); ?>
		<?php echo $form->textField($model,'id_barang'); ?>
		<?php echo $form->error($model,'id_barang'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nama_barang'); ?>
		<?php echo $form->textField($model,'nama_barang',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nama_barang'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'harga'); ?>
		<?php echo $form->textField($model,'harga'); ?>
		<?php echo $form->error($model,'harga'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'qty'); ?>
		<?php echo $form->textField($model,'qty'); ?>
		<?php echo $form->error($model,'qty'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'total'); ?>
		<?php echo $form->textField($model,'total'); ?>
		<?php echo $form->error($model,'total'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'bayar'); ?>
		<?php echo $form->textField($model,'bayar'); ?>
		<?php echo $form->error($model,'bayar'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'kembali'); ?>
		<?php echo $form->textField($model,'kembali'); ?>
		<?php echo $form->error($model,'kembali'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class' => 'brn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->