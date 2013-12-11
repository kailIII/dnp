<?php
/* @var $this CuantitativoController */
/* @var $model Cuantitativo */

$this->breadcrumbs=array(
	'Cuantitativos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Cuantitativo', 'url'=>array('index')),
	array('label'=>'Create Cuantitativo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cuantitativo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Cuantitativos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cuantitativo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_con',
		'cod_empleado',
		'nom_contacto',
		'fecha_encuesta',
		'p1',
		'p2',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
