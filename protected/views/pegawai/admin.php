<?php
/* @var $this PegawaiController */
/* @var $model Pegawai */

$this->breadcrumbs=array(
	'Pegawais'=>array('index'),
	'Manage',
);
/*
$this->menu=array(
	array('label'=>'List Pegawai', 'url'=>array('index')),
	array('label'=>'Create Pegawai', 'url'=>array('create')),
); */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pegawai-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Data Pegawai</h1>

<a href="?r=pegawai/create" class="btn btn-primary">Tambah Data</a>
<a href="?r=pegawai/index" class="btn btn-success">List Data</a>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'pegawai-grid',
	'type'=>'striped bordered condensed',
	'type'=>'striped bordered condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_pegawai',
		'nama',
		'jk',
		'alamat',
		'no_hp',
		'jabatan',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
