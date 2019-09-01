<?php
/* @var $this BarangController */
/* @var $model Barang */

$this->breadcrumbs=array(
	'Barang'=>array('index'),
	'Tambah Data',
);
?>
<a href="?r=barang/admin" class="btn btn-warning">Lihat Data</a>

<h1>Tambah Data Barang</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>