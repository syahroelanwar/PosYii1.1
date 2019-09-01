<?php
/* @var $this PegawaiController */
/* @var $model Pegawai */

$this->breadcrumbs=array(
	'Pegawais'=>array('index'),
	$model->id_pegawai,
);

?>
<a href="?r=pegawai/admin" class="btn btn-warning">Kembali</a>

<h1>View Pegawai #<?php echo $model->id_pegawai; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pegawai',
		'nama',
		'jk',
		'alamat',
		'no_hp',
		'jabatan',
	),
)); ?>
