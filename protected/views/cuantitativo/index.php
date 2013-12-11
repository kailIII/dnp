<?php
/* @var $this CuantitativoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cuantitativos',
);

$this->menu=array(
	array('label'=>'Create Cuantitativo', 'url'=>array('create')),
	array('label'=>'Manage Cuantitativo', 'url'=>array('admin')),
);
?>

<h1>Cuantitativos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
