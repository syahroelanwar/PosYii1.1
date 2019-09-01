<?php
/* @var $this TransJualController */
/* @var $data TransJual */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_trans')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->no_trans), array('view', 'id'=>$data->no_trans)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl')); ?>:</b>
	<?php echo CHtml::encode($data->tgl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waktu')); ?>:</b>
	<?php echo CHtml::encode($data->waktu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_barang')); ?>:</b>
	<?php echo CHtml::encode($data->id_barang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_barang')); ?>:</b>
	<?php echo CHtml::encode($data->nama_barang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga')); ?>:</b>
	<?php echo CHtml::encode($data->harga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qty')); ?>:</b>
	<?php echo CHtml::encode($data->qty); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('total')); ?>:</b>
	<?php echo CHtml::encode($data->total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bayar')); ?>:</b>
	<?php echo CHtml::encode($data->bayar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kembali')); ?>:</b>
	<?php echo CHtml::encode($data->kembali); ?>
	<br />

	*/ ?>

</div>