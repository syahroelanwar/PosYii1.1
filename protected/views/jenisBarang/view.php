<?php
/* @var $this JenisBarangController */
/* @var $model JenisBarang */

$this->breadcrumbs=array(
	'Jenis Barangs'=>array('index'),
	$model->id_jenis,
);
?>
<a href="?r=jenisBarang/admin" class="btn btn-warning">Kembali</a>

<h1>View JenisBarang #<?php echo $model->id_jenis; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_jenis',
		'jenis_barang',
	),
)); ?>
