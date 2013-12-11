<?php
/* @var $this CuantitativoController */
/* @var $model Cuantitativo */

$this->breadcrumbs=array(
	'Cuantitativos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Cuantitativo', 'url'=>array('index')),
	array('label'=>'Create Cuantitativo', 'url'=>array('create')),
	array('label'=>'Update Cuantitativo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Cuantitativo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cuantitativo', 'url'=>array('admin')),
);
?>

<h1>View Cuantitativo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fecha_encuesta',
		'p1',
		'p2',
		'p3',
		'p4',
		'p5',
		'p6',
		'p7',
		'p8',
		'p9',
		'p10',
		'p11',
		'p12',
		'p13',
		'p14',
		'p15',
		'p16',
		'p17',
		'p18',
		'p19',
		'p20',
		'p21',
		'p22',
		'p23',
		'p24',
		'p25',
		'p26',
		'p27',
		'p28',
		'p29',
		'p30',
		'p31',
		'p32',
		'p33',
		'p34',
		'p35',
		'p36',
		'p37',
		'p38',
		'p39',
		'p40',
		'p41',
		'p42',
		'p43',
		'p44',
		'p45',
		'p46',
		'p47',
		'p48',
		'p49',
		'p50',
		'p51',
		'p52',
		'p53',
		'p54',
		'p55',
		'p56',
		'p57',
		'p58',
	),
)); ?>
