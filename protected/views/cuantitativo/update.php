<?php
/* @var $this CuantitativoController */
/* @var $model Cuantitativo */

$this->breadcrumbs=array(
	'Cuantitativos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cuantitativo', 'url'=>array('index')),
	array('label'=>'Create Cuantitativo', 'url'=>array('create')),
	array('label'=>'View Cuantitativo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Cuantitativo', 'url'=>array('admin')),
);
?>

<h1>Update Cuantitativo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>