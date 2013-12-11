<?php
/* @var $this CualitativoController */
/* @var $model Cualitativo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_encuesta'); ?>
		<?php echo $form->textField($model,'fecha_encuesta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p1'); ?>
		<?php echo $form->textArea($model,'p1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p2'); ?>
		<?php echo $form->textArea($model,'p2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p3'); ?>
		<?php echo $form->textArea($model,'p3',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p4'); ?>
		<?php echo $form->textArea($model,'p4',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p5'); ?>
		<?php echo $form->textArea($model,'p5',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p6'); ?>
		<?php echo $form->textArea($model,'p6',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p7'); ?>
		<?php echo $form->textArea($model,'p7',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p8'); ?>
		<?php echo $form->textArea($model,'p8',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p9'); ?>
		<?php echo $form->textArea($model,'p9',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p10'); ?>
		<?php echo $form->textArea($model,'p10',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p11'); ?>
		<?php echo $form->textArea($model,'p11',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p12'); ?>
		<?php echo $form->textArea($model,'p12',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p13'); ?>
		<?php echo $form->textArea($model,'p13',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p14'); ?>
		<?php echo $form->textArea($model,'p14',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p15'); ?>
		<?php echo $form->textArea($model,'p15',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p16'); ?>
		<?php echo $form->textArea($model,'p16',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p17'); ?>
		<?php echo $form->textArea($model,'p17',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p18'); ?>
		<?php echo $form->textArea($model,'p18',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p19'); ?>
		<?php echo $form->textArea($model,'p19',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p20'); ?>
		<?php echo $form->textArea($model,'p20',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p21'); ?>
		<?php echo $form->textArea($model,'p21',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p22'); ?>
		<?php echo $form->textArea($model,'p22',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p23'); ?>
		<?php echo $form->textArea($model,'p23',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p24'); ?>
		<?php echo $form->textArea($model,'p24',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p25'); ?>
		<?php echo $form->textArea($model,'p25',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p26'); ?>
		<?php echo $form->textArea($model,'p26',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p27'); ?>
		<?php echo $form->textArea($model,'p27',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p28'); ?>
		<?php echo $form->textArea($model,'p28',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p29'); ?>
		<?php echo $form->textArea($model,'p29',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p30'); ?>
		<?php echo $form->textArea($model,'p30',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p36_1'); ?>
		<?php echo $form->textField($model,'p36_1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p36_2'); ?>
		<?php echo $form->textField($model,'p36_2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p36_3'); ?>
		<?php echo $form->textField($model,'p36_3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p36_4'); ?>
		<?php echo $form->textField($model,'p36_4',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p36_5'); ?>
		<?php echo $form->textField($model,'p36_5',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p36_6'); ?>
		<?php echo $form->textField($model,'p36_6',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p36_7'); ?>
		<?php echo $form->textField($model,'p36_7',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p36_8'); ?>
		<?php echo $form->textField($model,'p36_8',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p37_1'); ?>
		<?php echo $form->textField($model,'p37_1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p37_2'); ?>
		<?php echo $form->textField($model,'p37_2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p37_3'); ?>
		<?php echo $form->textField($model,'p37_3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p37_4'); ?>
		<?php echo $form->textField($model,'p37_4',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p37_5'); ?>
		<?php echo $form->textField($model,'p37_5',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p37_6'); ?>
		<?php echo $form->textField($model,'p37_6',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p37_7'); ?>
		<?php echo $form->textField($model,'p37_7',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p37_8'); ?>
		<?php echo $form->textField($model,'p37_8',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p38_1'); ?>
		<?php echo $form->textField($model,'p38_1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p38_2'); ?>
		<?php echo $form->textField($model,'p38_2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p38_3'); ?>
		<?php echo $form->textField($model,'p38_3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p38_4'); ?>
		<?php echo $form->textField($model,'p38_4',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p38_5'); ?>
		<?php echo $form->textField($model,'p38_5',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p38_6'); ?>
		<?php echo $form->textField($model,'p38_6',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p38_7'); ?>
		<?php echo $form->textField($model,'p38_7',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p38_8'); ?>
		<?php echo $form->textField($model,'p38_8',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p39'); ?>
		<?php echo $form->textArea($model,'p39',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p40'); ?>
		<?php echo $form->textArea($model,'p40',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p41_1'); ?>
		<?php echo $form->textField($model,'p41_1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p41_2'); ?>
		<?php echo $form->textField($model,'p41_2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p41_3'); ?>
		<?php echo $form->textField($model,'p41_3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p41_4'); ?>
		<?php echo $form->textField($model,'p41_4',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p41_5'); ?>
		<?php echo $form->textField($model,'p41_5',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p41_6'); ?>
		<?php echo $form->textField($model,'p41_6',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p41_7'); ?>
		<?php echo $form->textField($model,'p41_7',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p41_8'); ?>
		<?php echo $form->textField($model,'p41_8',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p42_1'); ?>
		<?php echo $form->textField($model,'p42_1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p42_2'); ?>
		<?php echo $form->textField($model,'p42_2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p42_3'); ?>
		<?php echo $form->textField($model,'p42_3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p42_4'); ?>
		<?php echo $form->textField($model,'p42_4',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p42_5'); ?>
		<?php echo $form->textField($model,'p42_5',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p42_6'); ?>
		<?php echo $form->textField($model,'p42_6',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p42_7'); ?>
		<?php echo $form->textField($model,'p42_7',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p42_8'); ?>
		<?php echo $form->textField($model,'p42_8',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p43_1'); ?>
		<?php echo $form->textField($model,'p43_1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p43_2'); ?>
		<?php echo $form->textField($model,'p43_2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p43_3'); ?>
		<?php echo $form->textField($model,'p43_3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p43_4'); ?>
		<?php echo $form->textField($model,'p43_4',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p43_5'); ?>
		<?php echo $form->textField($model,'p43_5',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p43_6'); ?>
		<?php echo $form->textField($model,'p43_6',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p43_7'); ?>
		<?php echo $form->textField($model,'p43_7',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p43_8'); ?>
		<?php echo $form->textField($model,'p43_8',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p44'); ?>
		<?php echo $form->textArea($model,'p44',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p45'); ?>
		<?php echo $form->textArea($model,'p45',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p46'); ?>
		<?php echo $form->textArea($model,'p46',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p47'); ?>
		<?php echo $form->textArea($model,'p47',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p48'); ?>
		<?php echo $form->textArea($model,'p48',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p49'); ?>
		<?php echo $form->textArea($model,'p49',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p50'); ?>
		<?php echo $form->textArea($model,'p50',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p51'); ?>
		<?php echo $form->textArea($model,'p51',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p52'); ?>
		<?php echo $form->textArea($model,'p52',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p53'); ?>
		<?php echo $form->textArea($model,'p53',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p54'); ?>
		<?php echo $form->textField($model,'p54',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p55_1'); ?>
		<?php echo $form->textField($model,'p55_1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p55_2'); ?>
		<?php echo $form->textField($model,'p55_2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p55_3'); ?>
		<?php echo $form->textField($model,'p55_3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p55_4'); ?>
		<?php echo $form->textField($model,'p55_4',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p56'); ?>
		<?php echo $form->textField($model,'p56',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->