<?php
/* @var $this CuantitativoController */
/* @var $model Cuantitativo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cuantitativo-form',
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
		<?php echo $form->textField($model,'p1',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p2'); ?>
		<?php echo $form->textField($model,'p2',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p3'); ?>
		<?php echo $form->textField($model,'p3',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p4'); ?>
		<?php echo $form->textField($model,'p4',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p5'); ?>
		<?php echo $form->textField($model,'p5',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p6'); ?>
		<?php echo $form->textField($model,'p6',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p7'); ?>
		<?php echo $form->textField($model,'p7',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p8'); ?>
		<?php echo $form->textField($model,'p8',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p9'); ?>
		<?php echo $form->textField($model,'p9',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p9'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p10'); ?>
		<?php echo $form->textField($model,'p10',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p10'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p11'); ?>
		<?php echo $form->textField($model,'p11',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p11'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p12'); ?>
		<?php echo $form->textField($model,'p12',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p13'); ?>
		<?php echo $form->textArea($model,'p13',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p13'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p14'); ?>
		<?php echo $form->textField($model,'p14',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p14'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p15'); ?>
		<?php echo $form->textField($model,'p15',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p15'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p16'); ?>
		<?php echo $form->textField($model,'p16',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p16'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p17'); ?>
		<?php echo $form->textField($model,'p17',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p17'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p18'); ?>
		<?php echo $form->textField($model,'p18',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p18'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p19'); ?>
		<?php echo $form->textField($model,'p19',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p19'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p20'); ?>
		<?php echo $form->textField($model,'p20',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p20'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p21'); ?>
		<?php echo $form->textField($model,'p21',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p21'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p22'); ?>
		<?php echo $form->textField($model,'p22',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p22'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p23'); ?>
		<?php echo $form->textArea($model,'p23',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p23'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p24'); ?>
		<?php echo $form->textField($model,'p24',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p24'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p25'); ?>
		<?php echo $form->textField($model,'p25',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p25'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p26'); ?>
		<?php echo $form->textField($model,'p26',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p26'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p27'); ?>
		<?php echo $form->textField($model,'p27',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p27'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p28'); ?>
		<?php echo $form->textField($model,'p28',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p28'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p29'); ?>
		<?php echo $form->textField($model,'p29',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p29'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p30'); ?>
		<?php echo $form->textField($model,'p30',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p30'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p31'); ?>
		<?php echo $form->textField($model,'p31',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p31'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p32'); ?>
		<?php echo $form->textField($model,'p32',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p32'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p33'); ?>
		<?php echo $form->textArea($model,'p33',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p33'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p34'); ?>
		<?php echo $form->textField($model,'p34',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p34'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p35'); ?>
		<?php echo $form->textField($model,'p35',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p35'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p36'); ?>
		<?php echo $form->textField($model,'p36',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p36'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p37'); ?>
		<?php echo $form->textField($model,'p37',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p37'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p38'); ?>
		<?php echo $form->textField($model,'p38',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p38'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p39'); ?>
		<?php echo $form->textField($model,'p39',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p39'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p40'); ?>
		<?php echo $form->textField($model,'p40',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p40'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p41'); ?>
		<?php echo $form->textField($model,'p41',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p41'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p42'); ?>
		<?php echo $form->textArea($model,'p42',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p42'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p43'); ?>
		<?php echo $form->textField($model,'p43',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p43'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p44'); ?>
		<?php echo $form->textField($model,'p44',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p44'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p45'); ?>
		<?php echo $form->textField($model,'p45',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p45'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p46'); ?>
		<?php echo $form->textField($model,'p46',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p46'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p47'); ?>
		<?php echo $form->textField($model,'p47',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p47'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p48'); ?>
		<?php echo $form->textArea($model,'p48',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p48'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p49'); ?>
		<?php echo $form->textField($model,'p49',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p49'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p50'); ?>
		<?php echo $form->textField($model,'p50',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p50'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p51'); ?>
		<?php echo $form->textField($model,'p51',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p51'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p52'); ?>
		<?php echo $form->textField($model,'p52',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p52'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p53'); ?>
		<?php echo $form->textField($model,'p53',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p53'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p54'); ?>
		<?php echo $form->textField($model,'p54',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p54'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p55'); ?>
		<?php echo $form->textArea($model,'p55',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p55'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p56'); ?>
		<?php echo $form->textField($model,'p56',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p56'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p57'); ?>
		<?php echo $form->textField($model,'p57',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p57'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p58'); ?>
		<?php echo $form->textField($model,'p58',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p58'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->