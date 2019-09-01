<?php
/* @var $this TransJualController */
/* @var $model TransJual */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'no_trans'); ?>
		<?php echo $form->textField($model,'no_trans'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'tgl'); ?>
		<?php echo $form->textField($model,'tgl'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'waktu'); ?>
		<?php echo $form->textField($model,'waktu'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'id_barang'); ?>
		<?php echo $form->textField($model,'id_barang'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'nama_barang'); ?>
		<?php echo $form->textField($model,'nama_barang',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'harga'); ?>
		<?php echo $form->textField($model,'harga'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'qty'); ?>
		<?php echo $form->textField($model,'qty'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'total'); ?>
		<?php echo $form->textField($model,'total'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'bayar'); ?>
		<?php echo $form->textField($model,'bayar'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'kembali'); ?>
		<?php echo $form->textField($model,'kembali'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->