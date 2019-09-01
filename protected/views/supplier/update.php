<?php
/* @var $this SupplierController */
/* @var $model Supplier */

$this->breadcrumbs=array(
	'Suppliers'=>array('index'),
	$model->id_supp=>array('view','id'=>$model->id_supp),
	'Update',
);

$this->menu=array(
	array('label'=>'List Supplier', 'url'=>array('index')),
	array('label'=>'Create Supplier', 'url'=>array('create')),
	array('label'=>'View Supplier', 'url'=>array('view', 'id'=>$model->id_supp)),
	array('label'=>'Manage Supplier', 'url'=>array('admin')),
);
?>

<h1>Update Supplier <?php echo $model->id_supp; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>