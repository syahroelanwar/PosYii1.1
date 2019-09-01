<?php
/* @var $this TransJualController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Trans Juals',
);

?>

<h1>Trans Juals</h1>

<?php $this->widget('bootstrap.widgets.TbListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
