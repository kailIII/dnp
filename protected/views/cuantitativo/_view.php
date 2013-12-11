<?php
/* @var $this CuantitativoController */
/* @var $data Cuantitativo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_con')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_con), array('view', 'id'=>$data->id_con)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->cod_empleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_contacto')); ?>:</b>
	<?php echo CHtml::encode($data->nom_contacto); ?>
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

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('p4')); ?>:</b>
	<?php echo CHtml::encode($data->p4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p5')); ?>:</b>
	<?php echo CHtml::encode($data->p5); ?>
	<br />

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

	<b><?php echo CHtml::encode($data->getAttributeLabel('p31')); ?>:</b>
	<?php echo CHtml::encode($data->p31); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p32')); ?>:</b>
	<?php echo CHtml::encode($data->p32); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p33')); ?>:</b>
	<?php echo CHtml::encode($data->p33); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p34')); ?>:</b>
	<?php echo CHtml::encode($data->p34); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p35')); ?>:</b>
	<?php echo CHtml::encode($data->p35); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p36')); ?>:</b>
	<?php echo CHtml::encode($data->p36); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p37')); ?>:</b>
	<?php echo CHtml::encode($data->p37); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p38')); ?>:</b>
	<?php echo CHtml::encode($data->p38); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p39')); ?>:</b>
	<?php echo CHtml::encode($data->p39); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p40')); ?>:</b>
	<?php echo CHtml::encode($data->p40); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p41')); ?>:</b>
	<?php echo CHtml::encode($data->p41); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p42')); ?>:</b>
	<?php echo CHtml::encode($data->p42); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p43')); ?>:</b>
	<?php echo CHtml::encode($data->p43); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('p55')); ?>:</b>
	<?php echo CHtml::encode($data->p55); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p56')); ?>:</b>
	<?php echo CHtml::encode($data->p56); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p57')); ?>:</b>
	<?php echo CHtml::encode($data->p57); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p58')); ?>:</b>
	<?php echo CHtml::encode($data->p58); ?>
	<br />

	*/ ?>

</div>