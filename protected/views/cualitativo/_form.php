<?php
/* @var $this CualitativoController */
/* @var $model Cualitativo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cualitativo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_encuesta'); ?>
		<?php echo $form->textField($model,'fecha_encuesta'); ?>
		<?php echo $form->error($model,'fecha_encuesta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p1'); ?>
		<?php echo $form->textArea($model,'p1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p2'); ?>
		<?php echo $form->textArea($model,'p2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p3'); ?>
		<?php echo $form->textArea($model,'p3',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p4'); ?>
		<?php echo $form->textArea($model,'p4',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p5'); ?>
		<?php echo $form->textArea($model,'p5',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p6'); ?>
		<?php echo $form->textArea($model,'p6',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p7'); ?>
		<?php echo $form->textArea($model,'p7',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p8'); ?>
		<?php echo $form->textArea($model,'p8',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p9'); ?>
		<?php echo $form->textArea($model,'p9',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p9'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p10'); ?>
		<?php echo $form->textArea($model,'p10',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p10'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p11'); ?>
		<?php echo $form->textArea($model,'p11',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p11'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p12'); ?>
		<?php echo $form->textArea($model,'p12',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p13'); ?>
		<?php echo $form->textArea($model,'p13',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p13'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p14'); ?>
		<?php echo $form->textArea($model,'p14',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p14'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p15'); ?>
		<?php echo $form->textArea($model,'p15',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p15'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p16'); ?>
		<?php echo $form->textArea($model,'p16',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p16'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p17'); ?>
		<?php echo $form->textArea($model,'p17',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p17'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p18'); ?>
		<?php echo $form->textArea($model,'p18',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p18'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p19'); ?>
		<?php echo $form->textArea($model,'p19',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p19'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p20'); ?>
		<?php echo $form->textArea($model,'p20',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p20'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p21'); ?>
		<?php echo $form->textArea($model,'p21',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p21'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p22'); ?>
		<?php echo $form->textArea($model,'p22',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p22'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p23'); ?>
		<?php echo $form->textArea($model,'p23',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p23'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p24'); ?>
		<?php echo $form->textArea($model,'p24',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p24'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p25'); ?>
		<?php echo $form->textArea($model,'p25',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p25'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p26'); ?>
		<?php echo $form->textArea($model,'p26',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p26'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p27'); ?>
		<?php echo $form->textArea($model,'p27',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p27'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p28'); ?>
		<?php echo $form->textArea($model,'p28',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p28'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p29'); ?>
		<?php echo $form->textArea($model,'p29',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p29'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p30'); ?>
		<?php echo $form->textArea($model,'p30',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p30'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p36_1'); ?>
		<?php echo $form->textField($model,'p36_1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p36_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p36_2'); ?>
		<?php echo $form->textField($model,'p36_2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p36_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p36_3'); ?>
		<?php echo $form->textField($model,'p36_3',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p36_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p36_4'); ?>
		<?php echo $form->textField($model,'p36_4',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p36_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p36_5'); ?>
		<?php echo $form->textField($model,'p36_5',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p36_5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p36_6'); ?>
		<?php echo $form->textField($model,'p36_6',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p36_6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p36_7'); ?>
		<?php echo $form->textField($model,'p36_7',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p36_7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p36_8'); ?>
		<?php echo $form->textField($model,'p36_8',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p36_8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p37_1'); ?>
		<?php echo $form->textField($model,'p37_1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p37_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p37_2'); ?>
		<?php echo $form->textField($model,'p37_2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p37_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p37_3'); ?>
		<?php echo $form->textField($model,'p37_3',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p37_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p37_4'); ?>
		<?php echo $form->textField($model,'p37_4',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p37_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p37_5'); ?>
		<?php echo $form->textField($model,'p37_5',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p37_5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p37_6'); ?>
		<?php echo $form->textField($model,'p37_6',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p37_6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p37_7'); ?>
		<?php echo $form->textField($model,'p37_7',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p37_7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p37_8'); ?>
		<?php echo $form->textField($model,'p37_8',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p37_8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p38_1'); ?>
		<?php echo $form->textField($model,'p38_1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p38_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p38_2'); ?>
		<?php echo $form->textField($model,'p38_2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p38_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p38_3'); ?>
		<?php echo $form->textField($model,'p38_3',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p38_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p38_4'); ?>
		<?php echo $form->textField($model,'p38_4',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p38_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p38_5'); ?>
		<?php echo $form->textField($model,'p38_5',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p38_5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p38_6'); ?>
		<?php echo $form->textField($model,'p38_6',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p38_6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p38_7'); ?>
		<?php echo $form->textField($model,'p38_7',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p38_7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p38_8'); ?>
		<?php echo $form->textField($model,'p38_8',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p38_8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p39'); ?>
		<?php echo $form->textArea($model,'p39',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p39'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p40'); ?>
		<?php echo $form->textArea($model,'p40',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p40'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p41_1'); ?>
		<?php echo $form->textField($model,'p41_1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p41_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p41_2'); ?>
		<?php echo $form->textField($model,'p41_2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p41_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p41_3'); ?>
		<?php echo $form->textField($model,'p41_3',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p41_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p41_4'); ?>
		<?php echo $form->textField($model,'p41_4',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p41_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p41_5'); ?>
		<?php echo $form->textField($model,'p41_5',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p41_5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p41_6'); ?>
		<?php echo $form->textField($model,'p41_6',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p41_6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p41_7'); ?>
		<?php echo $form->textField($model,'p41_7',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p41_7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p41_8'); ?>
		<?php echo $form->textField($model,'p41_8',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p41_8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p42_1'); ?>
		<?php echo $form->textField($model,'p42_1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p42_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p42_2'); ?>
		<?php echo $form->textField($model,'p42_2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p42_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p42_3'); ?>
		<?php echo $form->textField($model,'p42_3',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p42_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p42_4'); ?>
		<?php echo $form->textField($model,'p42_4',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p42_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p42_5'); ?>
		<?php echo $form->textField($model,'p42_5',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p42_5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p42_6'); ?>
		<?php echo $form->textField($model,'p42_6',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p42_6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p42_7'); ?>
		<?php echo $form->textField($model,'p42_7',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p42_7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p42_8'); ?>
		<?php echo $form->textField($model,'p42_8',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p42_8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p43_1'); ?>
		<?php echo $form->textField($model,'p43_1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p43_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p43_2'); ?>
		<?php echo $form->textField($model,'p43_2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p43_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p43_3'); ?>
		<?php echo $form->textField($model,'p43_3',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p43_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p43_4'); ?>
		<?php echo $form->textField($model,'p43_4',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p43_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p43_5'); ?>
		<?php echo $form->textField($model,'p43_5',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p43_5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p43_6'); ?>
		<?php echo $form->textField($model,'p43_6',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p43_6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p43_7'); ?>
		<?php echo $form->textField($model,'p43_7',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p43_7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p43_8'); ?>
		<?php echo $form->textField($model,'p43_8',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p43_8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p44'); ?>
		<?php echo $form->textArea($model,'p44',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p44'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p45'); ?>
		<?php echo $form->textArea($model,'p45',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p45'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p46'); ?>
		<?php echo $form->textArea($model,'p46',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p46'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p47'); ?>
		<?php echo $form->textArea($model,'p47',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p47'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p48'); ?>
		<?php echo $form->textArea($model,'p48',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p48'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p49'); ?>
		<?php echo $form->textArea($model,'p49',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p49'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p50'); ?>
		<?php echo $form->textArea($model,'p50',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p50'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p51'); ?>
		<?php echo $form->textArea($model,'p51',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p51'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p52'); ?>
		<?php echo $form->textArea($model,'p52',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p52'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p53'); ?>
		<?php echo $form->textArea($model,'p53',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p53'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p54'); ?>
		<?php echo $form->textField($model,'p54',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p54'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p55_1'); ?>
		<?php echo $form->textField($model,'p55_1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p55_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p55_2'); ?>
		<?php echo $form->textField($model,'p55_2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p55_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p55_3'); ?>
		<?php echo $form->textField($model,'p55_3',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p55_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p55_4'); ?>
		<?php echo $form->textField($model,'p55_4',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p55_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p56'); ?>
		<?php echo $form->textField($model,'p56',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p56'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->