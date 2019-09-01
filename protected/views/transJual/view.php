<?php
/* @var $this TransJualController */
/* @var $model TransJual */

$this->breadcrumbs=array(
	'Trans Juals'=>array('index'),
	$model->no_trans,
);
?>

<h1>View TransJual #<?php echo $model->no_trans; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'no_trans',
		'tgl',
		'waktu',
		'id_barang',
		'nama_barang',
		'harga',
		'qty',
		'total',
		'bayar',
		'kembali',
	),
)); ?>
