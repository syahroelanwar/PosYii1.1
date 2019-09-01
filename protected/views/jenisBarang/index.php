<?php
/* @var $this JenisBarangController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jenis Barangs',
);
?>
<a href="?r=jenisBarang/admin" class="btn btn-warning">Kembali</a>

<h1>List Jenis Barang</h1>

<?php $this->widget('bootstrap.widgets.TbListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
