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

	<!--site css-->
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/site.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<!-- Soporte css @media tags iexplorer 9 o menor -->
	<!--[if lt IE 9]>
  		<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo Yii::app()->request->baseUrl; ?>"><?php echo CHtml::encode(Yii::app()->name); ?></a>
        </div>
        <div class="collapse navbar-collapse">

          <?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
			'htmlOptions' => array(
				'class' => 'nav navbar-nav'
			)
		)); ?>
        </div><!--/.nav-collapse -->
      </div>
    </div>

<div class="container" id="page">


	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div id="footer">
		&copy; <?php echo date('Y'); ?> Centro nacional de consultoria.
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
