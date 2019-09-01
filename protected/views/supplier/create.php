<?php
/* @var $this SupplierController */
/* @var $model Supplier */

$this->breadcrumbs=array(
	'Suppliers'=>array('index'),
	'Create',
);
?>
<a href="?r=supplier/admin" class="btn btn-warning">Lihat Data</a>

<h1>Input Data Supplier</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>