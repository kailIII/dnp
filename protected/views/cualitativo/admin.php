<?php
/* @var $this CualitativoController */
/* @var $model Cualitativo */

$this->breadcrumbs=array(
	'Cualitativos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Cualitativo', 'url'=>array('index')),
	array('label'=>'Create Cualitativo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cualitativo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Cualitativos</h1>

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
	'id'=>'cualitativo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'fecha_encuesta',
		'p1',
		'p2',
		'p3',
		'p4',
		/*
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
		'p36_1',
		'p36_2',
		'p36_3',
		'p36_4',
		'p36_5',
		'p36_6',
		'p36_7',
		'p36_8',
		'p37_1',
		'p37_2',
		'p37_3',
		'p37_4',
		'p37_5',
		'p37_6',
		'p37_7',
		'p37_8',
		'p38_1',
		'p38_2',
		'p38_3',
		'p38_4',
		'p38_5',
		'p38_6',
		'p38_7',
		'p38_8',
		'p39',
		'p40',
		'p41_1',
		'p41_2',
		'p41_3',
		'p41_4',
		'p41_5',
		'p41_6',
		'p41_7',
		'p41_8',
		'p42_1',
		'p42_2',
		'p42_3',
		'p42_4',
		'p42_5',
		'p42_6',
		'p42_7',
		'p42_8',
		'p43_1',
		'p43_2',
		'p43_3',
		'p43_4',
		'p43_5',
		'p43_6',
		'p43_7',
		'p43_8',
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
		'p55_1',
		'p55_2',
		'p55_3',
		'p55_4',
		'p56',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
