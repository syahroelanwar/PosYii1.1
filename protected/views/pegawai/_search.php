<?php
/* @var $this PegawaiController */
/* @var $model Pegawai */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'id_pegawai'); ?>
		<?php echo $form->textField($model,'id_pegawai'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'jk'); ?>
		<?php echo $form->textField($model,'jk',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'alamat'); ?>
		<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'no_hp'); ?>
		<?php echo $form->textField($model,'no_hp'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'jabatan'); ?>
		<?php echo $form->textField($model,'jabatan',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->