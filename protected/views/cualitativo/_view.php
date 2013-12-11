<?php
/* @var $this CualitativoController */
/* @var $data Cualitativo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_encuesta')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_encuesta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p1')); ?>:</b>
	<?php echo CHtml::encode($data->p1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p2')); ?>:</b>
	<?php echo CHtml::encode($data->p2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p3')); ?>:</b>
	<?php echo CHtml::encode($data->p3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p4')); ?>:</b>
	<?php echo CHtml::encode($data->p4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p5')); ?>:</b>
	<?php echo CHtml::encode($data->p5); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('p6')); ?>:</b>
	<?php echo CHtml::encode($data->p6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p7')); ?>:</b>
	<?php echo CHtml::encode($data->p7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p8')); ?>:</b>
	<?php echo CHtml::encode($data->p8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p9')); ?>:</b>
	<?php echo CHtml::encode($data->p9); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p10')); ?>:</b>
	<?php echo CHtml::encode($data->p10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p11')); ?>:</b>
	<?php echo CHtml::encode($data->p11); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p12')); ?>:</b>
	<?php echo CHtml::encode($data->p12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p13')); ?>:</b>
	<?php echo CHtml::encode($data->p13); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p14')); ?>:</b>
	<?php echo CHtml::encode($data->p14); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p15')); ?>:</b>
	<?php echo CHtml::encode($data->p15); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p16')); ?>:</b>
	<?php echo CHtml::encode($data->p16); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p17')); ?>:</b>
	<?php echo CHtml::encode($data->p17); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p18')); ?>:</b>
	<?php echo CHtml::encode($data->p18); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p19')); ?>:</b>
	<?php echo CHtml::encode($data->p19); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p20')); ?>:</b>
	<?php echo CHtml::encode($data->p20); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p21')); ?>:</b>
	<?php echo CHtml::encode($data->p21); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p22')); ?>:</b>
	<?php echo CHtml::encode($data->p22); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p23')); ?>:</b>
	<?php echo CHtml::encode($data->p23); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p24')); ?>:</b>
	<?php echo CHtml::encode($data->p24); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p25')); ?>:</b>
	<?php echo CHtml::encode($data->p25); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p26')); ?>:</b>
	<?php echo CHtml::encode($data->p26); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p27')); ?>:</b>
	<?php echo CHtml::encode($data->p27); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p28')); ?>:</b>
	<?php echo CHtml::encode($data->p28); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p29')); ?>:</b>
	<?php echo CHtml::encode($data->p29); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p30')); ?>:</b>
	<?php echo CHtml::encode($data->p30); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p36_1')); ?>:</b>
	<?php echo CHtml::encode($data->p36_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p36_2')); ?>:</b>
	<?php echo CHtml::encode($data->p36_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p36_3')); ?>:</b>
	<?php echo CHtml::encode($data->p36_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p36_4')); ?>:</b>
	<?php echo CHtml::encode($data->p36_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p36_5')); ?>:</b>
	<?php echo CHtml::encode($data->p36_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p36_6')); ?>:</b>
	<?php echo CHtml::encode($data->p36_6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p36_7')); ?>:</b>
	<?php echo CHtml::encode($data->p36_7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p36_8')); ?>:</b>
	<?php echo CHtml::encode($data->p36_8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p37_1')); ?>:</b>
	<?php echo CHtml::encode($data->p37_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p37_2')); ?>:</b>
	<?php echo CHtml::encode($data->p37_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p37_3')); ?>:</b>
	<?php echo CHtml::encode($data->p37_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p37_4')); ?>:</b>
	<?php echo CHtml::encode($data->p37_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p37_5')); ?>:</b>
	<?php echo CHtml::encode($data->p37_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p37_6')); ?>:</b>
	<?php echo CHtml::encode($data->p37_6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p37_7')); ?>:</b>
	<?php echo CHtml::encode($data->p37_7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p37_8')); ?>:</b>
	<?php echo CHtml::encode($data->p37_8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p38_1')); ?>:</b>
	<?php echo CHtml::encode($data->p38_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p38_2')); ?>:</b>
	<?php echo CHtml::encode($data->p38_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p38_3')); ?>:</b>
	<?php echo CHtml::encode($data->p38_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p38_4')); ?>:</b>
	<?php echo CHtml::encode($data->p38_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p38_5')); ?>:</b>
	<?php echo CHtml::encode($data->p38_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p38_6')); ?>:</b>
	<?php echo CHtml::encode($data->p38_6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p38_7')); ?>:</b>
	<?php echo CHtml::encode($data->p38_7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p38_8')); ?>:</b>
	<?php echo CHtml::encode($data->p38_8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p39')); ?>:</b>
	<?php echo CHtml::encode($data->p39); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p40')); ?>:</b>
	<?php echo CHtml::encode($data->p40); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p41_1')); ?>:</b>
	<?php echo CHtml::encode($data->p41_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p41_2')); ?>:</b>
	<?php echo CHtml::encode($data->p41_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p41_3')); ?>:</b>
	<?php echo CHtml::encode($data->p41_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p41_4')); ?>:</b>
	<?php echo CHtml::encode($data->p41_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p41_5')); ?>:</b>
	<?php echo CHtml::encode($data->p41_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p41_6')); ?>:</b>
	<?php echo CHtml::encode($data->p41_6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p41_7')); ?>:</b>
	<?php echo CHtml::encode($data->p41_7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p41_8')); ?>:</b>
	<?php echo CHtml::encode($data->p41_8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p42_1')); ?>:</b>
	<?php echo CHtml::encode($data->p42_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p42_2')); ?>:</b>
	<?php echo CHtml::encode($data->p42_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p42_3')); ?>:</b>
	<?php echo CHtml::encode($data->p42_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p42_4')); ?>:</b>
	<?php echo CHtml::encode($data->p42_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p42_5')); ?>:</b>
	<?php echo CHtml::encode($data->p42_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p42_6')); ?>:</b>
	<?php echo CHtml::encode($data->p42_6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p42_7')); ?>:</b>
	<?php echo CHtml::encode($data->p42_7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p42_8')); ?>:</b>
	<?php echo CHtml::encode($data->p42_8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p43_1')); ?>:</b>
	<?php echo CHtml::encode($data->p43_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p43_2')); ?>:</b>
	<?php echo CHtml::encode($data->p43_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p43_3')); ?>:</b>
	<?php echo CHtml::encode($data->p43_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p43_4')); ?>:</b>
	<?php echo CHtml::encode($data->p43_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p43_5')); ?>:</b>
	<?php echo CHtml::encode($data->p43_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p43_6')); ?>:</b>
	<?php echo CHtml::encode($data->p43_6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p43_7')); ?>:</b>
	<?php echo CHtml::encode($data->p43_7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p43_8')); ?>:</b>
	<?php echo CHtml::encode($data->p43_8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p44')); ?>:</b>
	<?php echo CHtml::encode($data->p44); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p45')); ?>:</b>
	<?php echo CHtml::encode($data->p45); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p46')); ?>:</b>
	<?php echo CHtml::encode($data->p46); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p47')); ?>:</b>
	<?php echo CHtml::encode($data->p47); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p48')); ?>:</b>
	<?php echo CHtml::encode($data->p48); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p49')); ?>:</b>
	<?php echo CHtml::encode($data->p49); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p50')); ?>:</b>
	<?php echo CHtml::encode($data->p50); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p51')); ?>:</b>
	<?php echo CHtml::encode($data->p51); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p52')); ?>:</b>
	<?php echo CHtml::encode($data->p52); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p53')); ?>:</b>
	<?php echo CHtml::encode($data->p53); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p54')); ?>:</b>
	<?php echo CHtml::encode($data->p54); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p55_1')); ?>:</b>
	<?php echo CHtml::encode($data->p55_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p55_2')); ?>:</b>
	<?php echo CHtml::encode($data->p55_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p55_3')); ?>:</b>
	<?php echo CHtml::encode($data->p55_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p55_4')); ?>:</b>
	<?php echo CHtml::encode($data->p55_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p56')); ?>:</b>
	<?php echo CHtml::encode($data->p56); ?>
	<br />

	*/ ?>

</div>