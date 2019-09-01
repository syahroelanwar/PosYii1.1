<?php
/* @var $this SupplierController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Suppliers',
);

?>
<a href="?r=supplier/admin" class="btn btn-warning">Kembali</a>

<h1>List Supplier</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
