<?php
/* @var $this SupplierController */
/* @var $model Supplier */

$this->breadcrumbs=array(
	'Suppliers'=>array('index'),
	$model->id_supp,
);
?>
<a href="?r=supplier/admin" class="btn btn-warning">Kembali</a>

<h1>View Supplier #<?php echo $model->id_supp; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_supp',
		'nama_sup',
		'alamat',
		'no_hp',
	),
)); ?>
