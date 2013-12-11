<?php
/* @var $this ContactoController */
/* @var $data Contacto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_corto')); ?>:</b>
	<?php echo CHtml::encode($data->id_corto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->cod_empleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula')); ?>:</b>
	<?php echo CHtml::encode($data->cedula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vp')); ?>:</b>
	<?php echo CHtml::encode($data->vp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_contacto')); ?>:</b>
	<?php echo CHtml::encode($data->nom_contacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unidad')); ?>:</b>
	<?php echo CHtml::encode($data->unidad); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->nom_servicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_subservicio')); ?>:</b>
	<?php echo CHtml::encode($data->nom_subservicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('canal_de_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->canal_de_ingreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grupo_de_inter')); ?>:</b>
	<?php echo CHtml::encode($data->grupo_de_inter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('regional')); ?>:</b>
	<?php echo CHtml::encode($data->regional); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ext')); ?>:</b>
	<?php echo CHtml::encode($data->ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular')); ?>:</b>
	<?php echo CHtml::encode($data->celular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_empresa')); ?>:</b>
	<?php echo CHtml::encode($data->nom_empresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('archivo_hoja')); ?>:</b>
	<?php echo CHtml::encode($data->archivo_hoja); ?>
	<br />

	*/ ?>

</div>