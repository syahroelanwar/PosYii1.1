<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

?>
<a href="?r=user/admin" class="btn btn-warning">Lihat Data</a>

<h1>Input Data User</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>