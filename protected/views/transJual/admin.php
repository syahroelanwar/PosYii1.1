<?php
/* @var $this TransJualController */
/* @var $model TransJual */

$this->breadcrumbs=array(
	'Trans Juals'=>array('index'),
	'Manage',
);
?>

<h1>Data Transaksi</h1>

<a href="?r=transJual/create" class="btn btn-primary">Transaksi</a>
<a href="?r=transJual/index" class="btn btn-success">List Data</a>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'trans-jual-grid',
	'type'=>'striped bordered condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'no_trans',
		'tgl',
		'waktu',
		//'id_barang',
		'nama_barang',
		'harga',
		'qty',
		'total',
		//'bayar',
		//'kembali',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
