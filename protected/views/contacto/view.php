<?php
/* @var $this ContactoController */
/* @var $model Contacto */

$this->breadcrumbs=array(
	'Contactos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Contacto', 'url'=>array('index')),
	array('label'=>'Create Contacto', 'url'=>array('create')),
	array('label'=>'Update Contacto', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Contacto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Contacto', 'url'=>array('admin')),
);
?>

<h1>View Contacto #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_corto',
		'cod_empleado',
		'cedula',
		'vp',
		'nom_contacto',
		'unidad',
		'nom_servicio',
		'nom_subservicio',
		'canal_de_ingreso',
		'grupo_de_inter',
		'regional',
		'telefono',
		'ext',
		'celular',
		'email',
		'ciudad',
		'nom_empresa',
		'archivo_hoja',
	),
)); ?>
