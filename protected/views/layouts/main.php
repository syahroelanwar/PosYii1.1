<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<?php  
		echo Yii::app()->bootstrap->registerAllCss();
		echo Yii::app()->bootstrap->registerCoreScripts();
	?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<style type="text/css">
	.footer{
		background-color: #ecf0f1;
		padding-top: 15px;
		padding-bottom: 15px;
	}
</style>
<body>
	<div id="mainmenu">
	<?php $this->widget('bootstrap.widgets.TbNavbar', 
		array(
    		'type'=>'inverse',
    		'brand'=>'POS-TokoAlatTeknik',
    		'brandUrl'=>'#',
    		'collapse'=>true,
    		'items'=>array(
        			array(
            			'class'=>'bootstrap.widgets.TbMenu',
						'items'=>array(
							array('label'=>'Home', 'url'=>array('/site/index')),
							array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about'), 'visible'=>Yii::app()->user->isGuest),
							array('label'=>'Contact', 'url'=>array('/site/contact'), 'visible'=>Yii::app()->user->isGuest),
							array('label'=>'Data', 'url'=>'#','items'=>array(
									array('label'=>'Barang', 'url'=>array('/barang/admin')),
									array('label'=>'JenisBarang', 'url'=>array('/jenisBarang/admin')),
									array('label'=>'Supplier', 'url'=>array('/supplier/admin')),
									array('label'=>'Pegawai', 'url'=>array('/pegawai/admin')),
									array('label'=>'User', 'url'=>array('/user/admin')),
									), 'visible'=>!Yii::app()->user->isGuest
							),
							array('label'=>'Transaksi', 'url'=>array('/transJual/admin'), 'visible'=>!Yii::app()->user->isGuest),
							/*array('label'=>'Laporan', 'url'=>'#','items'=>array(
									array('label'=>'Laporan Barang', 'url'=>array('/')),
									array('label'=>'Laporan Transaksi', 'url'=>array('/')),
									), 'visible'=>!Yii::app()->user->isGuest
							), */
							array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
							array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)

						),
	

					)

			)

		)

	); ?>

	</div><!-- mainmenu -->

	<div class="container">
		<div class="page-header">
		<br/><br/>
			<?php if(isset($this->breadcrumbs)):?>
				<?php $this->widget('zii.widgets.CBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
				)); ?><!-- breadcrumbs -->
			<?php endif?>
		</div>
	<?php echo $content; ?>


	</div>
	<br/><br/>
	<div class="clear"></div>
	<div class="footer text-center">
		Copyright &copy; <?php echo date('Y'); ?> by Toko Alat Teknik.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->
</body>
</html>
