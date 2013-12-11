<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" type="text/css" media="screen" title="no title" charset="utf-8"/>

	<!-- theme boostrap css -->
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-theme.css" type="text/css" media="screen" title="no title" charset="utf-8"/>

	<!-- jquery library -->
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.10.2.min.js" type="text/javascript" ></script>

	<!--encuesta css-->
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/encuesta.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<!-- Soporte css @media tags iexplorer 9 o menor -->
	<!--[if lt IE 9]>
  		<script src="js/respond.min.js"></script>
	<![endif]-->

	<style>
		body{
			padding:10px 40px;
		}

		.logo-empresa{
			padding-top: 71px;
			padding-right: 35px;
		}
	</style>

</head>

<body>
<div id="header">
	<div class="logo-cnc">
		<img width="350" src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo_CNC_nuevo.jpg" alt="">
	</div>

	<div class="logo-empresa">
		<img width="250" src="<?php echo Yii::app()->request->baseUrl; ?>/images/DNP.jpg" alt="">
	</div>
</div>

	<?php echo $content; ?>

</body>
</html>