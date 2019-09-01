<?php
/* @var $this TransJualController */
/* @var $model TransJual */

$this->breadcrumbs=array(
	'Trans Juals'=>array('index'),
	$model->no_trans=>array('view','id'=>$model->no_trans),
	'Update',
)
?>

<h1>Update TransJual <?php echo $model->no_trans; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>