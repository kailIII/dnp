<?php
/* @var $this CualitativoController */
/* @var $model Cualitativo */

$this->breadcrumbs=array(
	'Cualitativos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cualitativo', 'url'=>array('index')),
	array('label'=>'Create Cualitativo', 'url'=>array('create')),
	array('label'=>'View Cualitativo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Cualitativo', 'url'=>array('admin')),
);
?>

<h1>Update Cualitativo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>