<?php
/* @var $this JenisBarangController */
/* @var $data JenisBarang */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jenis')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_jenis), array('view', 'id'=>$data->id_jenis)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_barang')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_barang); ?>
	<br /><br />


</div>