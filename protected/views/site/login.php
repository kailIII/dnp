<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<!-- form -->

<div class="container">
	<div class="text-center" >

		<div id="loginHeader">
			<img src="images/img_login.jpg" alt="logo_cnc"  style="visibility:hidden" />

			<p id="intro" >Lo invitamos a contestar esta encuesta, la cual es una manera de opinar de forma confidencial y así dar a conocer su percepción y punto de vista de los servicios, procesos y áreas de Ecopetrol. </p>
		</div>

	</div>
      <!-- <form class="form-signin form-horizontal" method="POST" action="" > -->
      <?php $form=$this->beginWidget('CActiveForm', array(
      		'id'=>'login-form',
      		'enableClientValidation'=>true,
      			'clientOptions'=>array(
      			'validateOnSubmit'=>true,
      		),
      		'htmlOptions' => array('class' => 'form-signin'),
      )); ?>
        <h2 class="form-signin-heading">Iniciar sesión</h2>
        <div class="form-group">
          <?php echo $form->labelEx($model,'username'); ?>
          <?php echo $form->textField($model,'username', array('class' => 'form-control')); ?>
          <?php echo $form->error($model,'username', array('class' => 'text-danger') ); ?>
        </div>

        <div class="form-group">
          <?php echo $form->labelEx($model,'password'); ?>
          <?php echo $form->passwordField($model,'password', array('class' => 'form-control')); ?>
		  <?php echo $form->error($model,'password', array('class' => 'text-danger')); ?>
        </div>

		<div class="text-danger"></div>
        <button class="btn btn-md btn-primary btn-block" type="submit">Entrar</button>


      <?php $this->endWidget(); ?>

      <div class="warning-text" >
         <p class="text-center" >
          <i>Por favor si tiene alguna dificultad comuníquese con el Centro Nacional de Consultoría 339 4888 en Bogotá, con la extensión 2215 o si lo prefiere envíe un correo a mmera@cnccol.com</i>
        </p>
      </div>

    </div>