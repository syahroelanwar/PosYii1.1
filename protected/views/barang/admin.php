<?php
/* @var $this BarangController */
/* @var $model Barang */

$this->breadcrumbs=array(
	'Barang'=>array('index'),
	'Manage',
);
?>

<h1>Data Barang</h1>

<a href="?r=barang/create" class="btn btn-primary">Tambah Data</a>
<a href="?r=barang/index" class="btn btn-success">List Data</a>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'barang-grid',
	'type'=>'striped bordered condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_barang',
		'nama_barang',
		'id_jenis',
		'stok',
		'harga',
		'deskripsi',
		array(
			'name'=>'foto',
			'header'=>'Foto',
			'type'=>'raw',
			'value'=>'CHtml::image(Yii::app()->baseUrl . \'/images/foto/\' . $data->foto,\'\',
			array("width"=>80))',
		),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
