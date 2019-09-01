<?php
/* @var $this BarangController */
/* @var $model Barang */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'barang-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nama_barang'); ?>
		<?php echo $form->textField($model,'nama_barang',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_barang'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'id_jenis'); ?>
		<?php echo $form->textField($model,'id_jenis'); ?>
		<?php echo $form->error($model,'id_jenis'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'stok'); ?>
		<?php echo $form->textField($model,'stok'); ?>
		<?php echo $form->error($model,'stok'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'harga'); ?>
		<?php echo $form->textField($model,'harga'); ?>
		<?php echo $form->error($model,'harga'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'deskripsi'); ?>
		<?php echo $form->textArea($model,'deskripsi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'deskripsi'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'foto'); ?>
		<?php echo $form->fileField($model,'foto',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'foto'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class' => 'brn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->