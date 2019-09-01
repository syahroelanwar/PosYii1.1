<?php
/* @var $this TransJualController */
/* @var $model TransJual */

$this->breadcrumbs=array(
	'Trans Juals'=>array('index'),
	'Create',
);
?>
<a href="?r=transJual/admin" class="btn btn-warning">Lihat Data</a>

<h1>Create TransJual</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>