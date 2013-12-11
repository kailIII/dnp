<?php
/* @var $this ContactoController */
/* @var $model Contacto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contacto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_corto'); ?>
		<?php echo $form->textField($model,'id_corto',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'id_corto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_empleado'); ?>
		<?php echo $form->textField($model,'cod_empleado',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'cod_empleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula'); ?>
		<?php echo $form->textField($model,'cedula',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vp'); ?>
		<?php echo $form->textField($model,'vp',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'vp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_contacto'); ?>
		<?php echo $form->textField($model,'nom_contacto',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nom_contacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unidad'); ?>
		<?php echo $form->textField($model,'unidad',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'unidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_servicio'); ?>
		<?php echo $form->textField($model,'nom_servicio',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nom_servicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_subservicio'); ?>
		<?php echo $form->textField($model,'nom_subservicio',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nom_subservicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'canal_de_ingreso'); ?>
		<?php echo $form->textField($model,'canal_de_ingreso',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'canal_de_ingreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grupo_de_inter'); ?>
		<?php echo $form->textField($model,'grupo_de_inter',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'grupo_de_inter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'regional'); ?>
		<?php echo $form->textField($model,'regional',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'regional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ext'); ?>
		<?php echo $form->textField($model,'ext',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'celular'); ?>
		<?php echo $form->textField($model,'celular',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'celular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ciudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_empresa'); ?>
		<?php echo $form->textField($model,'nom_empresa',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nom_empresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'archivo_hoja'); ?>
		<?php echo $form->textField($model,'archivo_hoja',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'archivo_hoja'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->