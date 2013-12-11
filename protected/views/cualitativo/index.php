<?php
/* @var $this CualitativoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cualitativos',
);

$this->menu=array(
	array('label'=>'Create Cualitativo', 'url'=>array('create')),
	array('label'=>'Manage Cualitativo', 'url'=>array('admin')),
);
?>

<h1>Cualitativos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
