<?php
/* @var $this SupplierController */
/* @var $data Supplier */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_supp')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_supp), array('view', 'id'=>$data->id_supp)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_sup')); ?>:</b>
	<?php echo CHtml::encode($data->nama_sup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_hp')); ?>:</b>
	<?php echo CHtml::encode($data->no_hp); ?>
	<br /><br />


</div>