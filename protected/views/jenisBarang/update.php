<?php
/* @var $this JenisBarangController */
/* @var $model JenisBarang */

$this->breadcrumbs=array(
	'Jenis Barangs'=>array('index'),
	$model->id_jenis=>array('view','id'=>$model->id_jenis),
	'Update',
);

$this->menu=array(
	array('label'=>'List JenisBarang', 'url'=>array('index')),
	array('label'=>'Create JenisBarang', 'url'=>array('create')),
	array('label'=>'View JenisBarang', 'url'=>array('view', 'id'=>$model->id_jenis)),
	array('label'=>'Manage JenisBarang', 'url'=>array('admin')),
);
?>

<h1>Update JenisBarang <?php echo $model->id_jenis; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>