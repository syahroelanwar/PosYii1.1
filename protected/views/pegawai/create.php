<?php
/* @var $this PegawaiController */
/* @var $model Pegawai */

$this->breadcrumbs=array(
	'Pegawais'=>array('index'),
	'Create',
);

?>
<a href="?r=pegawai/admin" class="btn btn-warning">Lihat Data</a>

<h1>Input Data Pegawai</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>