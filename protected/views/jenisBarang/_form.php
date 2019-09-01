<?php
/* @var $this JenisBarangController */
/* @var $model JenisBarang */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'jenis-barang-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'jenis_barang'); ?>
		<?php echo $form->textField($model,'jenis_barang',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'jenis_barang'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'brn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->