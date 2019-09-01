<?php
/* @var $this BarangController */
/* @var $model Barang */

$this->breadcrumbs=array(
	'Barang'=>array('index'),
	$model->id_barang,
);
?>

<h1>View Barang #<?php echo $model->id_barang; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_barang',
		'nama_barang',
		'id_jenis',
		'stok',
		'harga',
		'deskripsi',
		//'foto',

		array(
			'name'=>'foto',
			'label'=>'Foto',
			'type'=>'raw',
			'value'=>CHtml::image(Yii::app()->baseUrl . '/images/foto/' . $model->foto,'',array("width"=>70))
		)
	),
)); ?>
