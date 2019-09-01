<?php
/* @var $this PegawaiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pegawais',
);
?>
<a href="?r=pegawai/admin" class="btn btn-warning">Kembali</a>

<h1>List Pegawai</h1>

<?php $this->widget('bootstrap.widgets.TbListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
