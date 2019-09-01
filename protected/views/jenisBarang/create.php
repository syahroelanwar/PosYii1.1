<?php
/* @var $this JenisBarangController */
/* @var $model JenisBarang */

$this->breadcrumbs=array(
	'Jenis Barangs'=>array('index'),
	'Create',
);

?>
<a href="?r=jenisBarang/admin" class="btn btn-warning">Lihat Data</a>

<h1>Input Data JenisBarang</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>