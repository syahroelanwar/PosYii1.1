<?php
/* @var $this JenisBarangController */
/* @var $model JenisBarang */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'id_jenis'); ?>
		<?php echo $form->textField($model,'id_jenis'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'jenis_barang'); ?>
		<?php echo $form->textField($model,'jenis_barang',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->