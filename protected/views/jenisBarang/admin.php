<?php
/* @var $this JenisBarangController */
/* @var $model JenisBarang */

$this->breadcrumbs=array(
	'Jenis Barangs'=>array('index'),
	'Manage',
);
/*
$this->menu=array(
	array('label'=>'List JenisBarang', 'url'=>array('index')),
	array('label'=>'Create JenisBarang', 'url'=>array('create')),
); */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#jenis-barang-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Data Jenis Barang</h1>

<a href="?r=jenisBarang/create" class="btn btn-primary">Tambah Data</a>
<a href="?r=jenisBarang/index" class="btn btn-success">List Data</a>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'jenis-barang-grid',
	'type'=>'striped bordered condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_jenis',
		'jenis_barang',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
