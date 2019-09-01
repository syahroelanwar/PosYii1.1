<?php
/* @var $this BarangController */
/* @var $model Barang */

$this->breadcrumbs=array(
	'Barang'=>array('index'),
	$model->id_barang=>array('view','id'=>$model->id_barang),
	'Update',
);

$this->menu=array(
	array('label'=>'List Barang', 'url'=>array('index')),
	array('label'=>'Create Barang', 'url'=>array('create')),
	array('label'=>'View Barang', 'url'=>array('view', 'id'=>$model->id_barang)),
	array('label'=>'Manage Barang', 'url'=>array('admin')),
);
?>

<h1>Update Barang <?php echo $model->id_barang; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>