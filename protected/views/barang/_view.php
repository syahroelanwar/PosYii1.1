<?php
/* @var $this BarangController */
/* @var $data Barang */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_barang')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_barang), array('view', 'id'=>$data->id_barang)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_barang')); ?>:</b>
	<?php echo CHtml::encode($data->nama_barang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jenis')); ?>:</b>
	<?php echo CHtml::encode($data->id_jenis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stok')); ?>:</b>
	<?php echo CHtml::encode($data->stok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga')); ?>:</b>
	<?php echo CHtml::encode($data->harga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deskripsi')); ?>:</b>
	<?php echo CHtml::encode($data->deskripsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto')); ?>:</b>
	<?php echo CHtml::encode($data->foto); ?>
	<br />


</div>