<?php
/* @var $this CualitativoController */
/* @var $model Cualitativo */

/*$this->breadcrumbs=array(
	'Cualitativos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cualitativo', 'url'=>array('index')),
	array('label'=>'Manage Cualitativo', 'url'=>array('admin')),
);*/
?>

<!-- <h1>Create Cualitativo</h1>-->

<?php /* $this->renderPartial('_form', array('model'=>$model)); */?>

<style>
	input[type=text]{
		width:275px !important;
	}
</style>

<div class="container">
	<form id="cualitativo-form" action="<?php echo Yii::app()->request->baseUrl; ?>/index.php/cualitativo/create" method="post">
		<div class="jumbotron text-center">Guía de Discusión para Líderes de los Programas de Percepción &amp; Ejecutivos Claves</div>
		<table class="table table-striped">
		</table>
		<div class="jumbotron text-center">A.  Introducción/una pequeña explicación de lo que se está haciendo</div>
		<table class="table table-striped">
			<tbody><tr>
				<td><b>&nbsp;</b></td>
				<td colspan="100" ><b>El propósito: Estamos apoyando al Programa Nacional de Servicio al Ciudadano del DNP en la elaboración de lineamientos técnicos que permitan el diseño, aplicación, gestión y análisis de mediciones de satisfacción en materia de Servicio al Ciudadano al interior de las entidades del Sistema Nacional de Servicio al Ciudadano.</b></td>

			</tr>
			<tr>
				<td><b>&nbsp;</b></td>
				<td colspan="100" ><b>Por esa razón estamos entrevistándolo para entender:</b></td>

			</tr>
			<tr>
				<td><b>&nbsp;</b></td>
				<td colspan="100" ><b>a. Las prácticas existentes en materia de medición de la satisfacción de la ciudadanía</b></td>

			</tr>
			<tr>
				<td><b>&nbsp;</b></td>
				<td colspan="100" ><b>b. La definición de criterios que se tienen en cuenta para la medición de la satisfacción del servicio al ciudadano, así como la recolección, entrega, gestión y análisis de información que realizan</b></td>

			</tr>
			<tr>
				<td><b>&nbsp;</b></td>
				<td><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
			</tr>
		</tbody></table>
		<div class="jumbotron text-center">B. Estrategia; Objetivos &amp; Modelo Gestión/Planeación </div>
		<table class="table table-striped">
			<tbody><tr>
				<td>&nbsp;</td>
				<td>¿Cuál es su rol (más importante) en esta entidad? </td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p1]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Qué es lo que espera lograr esta entidad en los próximos años? (Por favor utilice datos: incrementar qué, en tanto %, etc.)</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p2]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>o&nbsp;&nbsp;&nbsp; ¿Cuál es la principal estrategia o eje de planeación que se tiene en el momento? </td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p3]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>o&nbsp;&nbsp;&nbsp; ¿Cuál es la principal preocupación de su entidad (piense en impacto económico, social, etc.) </td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p4]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>o&nbsp;&nbsp;&nbsp; ¿Qué es clave para hacer que esta estrategia o modelo de gestión funcione?</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p5]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>o&nbsp;&nbsp;&nbsp; ¿Cuáles son los riesgos de no cumplir con lo planeado o con la estrategia propuesta?</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p6]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Cuáles son sus metas actuales? ¿En qué aspectos está enfocado?</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p7]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Cuáles son los segmentos o cómo están distribuidos en términos de servicio al ciudadano? ¿Cuáles son los 2 o 3 grupos más importantes?</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p8]"></textarea></td>
			</tr>
		</tbody></table>
		<div class="jumbotron text-center">C. Ambiente </div>
		<table class="table table-striped">
			<tbody><tr>
				<td>&nbsp;</td>
				<td>¿Cómo se ve desde su perspectiva el servicio al ciudadano?</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p9]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Cuáles son las principales oportunidades y/o amenazas que ve: tecnología, regulaciones, aumento de la población a manejar, etc.? </td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p10]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Cómo están ustedes manejando estas dificultades?</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p11]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿En términos de imagen, cómo es vista su entidad por los ciudadanos? ¿En qué se diferencia y en qué se parece a otras entidades del estado? </td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p12]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Cuáles son sus ventajas en materia de servicio al ciudadano? </td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p13]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Cómo da usted a conocer los servicios al ciudadano que ofrece su entidad? ¿Cómo se asegura de diferenciar sus servicios de los que puede ofrecer otra entidad con los que pueda haber confusión? </td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p14]"></textarea></td>
			</tr>
		</tbody></table>
		<div class="jumbotron text-center">D. Organización Interna</div>
		<table class="table table-striped">
			<tbody><tr>
				<td>&nbsp;</td>
				<td>Además de los indicadores presupuestales, ¿cuáles son los principales indicadores en su organización? </td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p15]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Cuál es el indicador más importante con relación al servicio al ciudadano que manejan hoy en día? </td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p16]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Cuál ha sido la principal inversión en términos de manejo de imagen o de darse a conocer al ciudadano, qué han usado? – y de dar a conocer el ciclo de servicio-</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p17]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Cuál ha sido la inversión más importante para mejorar la relación con los ciudadanos?  </td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p18]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Mirando hacia adelante, ¿qué inversión mejoraría el nivel de conocimiento que tiene la ciudadanía con su entidad? </td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p19]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Mirando hacia adelante, ¿cuál es la mayor inversión que le ayudaría a mejorar su relacionamiento con los ciudadanos? </td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p20]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Como organización ¿qué es lo más vulnerable/débil? ¿Y qué se está haciendo para atacar estas áreas?</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p21]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Qué tanto los servidores entienden la estrategia o el plan de gestión actual y su rol en él? </td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p22]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Qué grupo de servidores en la actualidad están en contacto directo con los ciudadanos?</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p23]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Qué factores facilitan su éxito?</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p24]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Qué factores internos se interponen en su éxito?</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p25]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ¿Cuáles son los mayores cambios que se están dando en su organización hoy?</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p26]"></textarea></td>
			</tr>
		</tbody></table>
		<div class="jumbotron text-center">E. Servicio al Ciudadano</div>
		<table class="table table-striped">
			<tbody><tr>
				<td>&nbsp;</td>
				<td>¿Cómo llegan o se enteran los ciudadanos de los servicios que presta o cuando qué pasa llegan más ciudadanos a su entidad para ser atendidos?- Se preparan para aumento o ciclos de aumento de demanda… </td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p27]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Cuáles son las principales preocupaciones de llegar a los diferentes ciudadanos objetivos de la entidad? ¿O atender a estos ciudadanos que no han hecho uso de la oferta institucional? ¿Cómo son manejados los ciudadanos recurrentes? ¿Se pueden identificar?</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p28]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Cómo están cambiando las expectativas de servicio al ciudadano?</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p29]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Qué espera hacer usted en términos de las necesidades cambiantes de los ciudadanos?</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p30]"></textarea></td>
			</tr>
		</tbody></table>
		<div class="jumbotron text-center">F. Expectativas del programa</div>
		<table class="table table-striped">
			<tbody><tr>
				<td>&nbsp;</td>
				<td>¿Qué reservas tiene con relación a este trabajo que se está realizando?</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Qué espera que se logre a través de este trabajo? </td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Qué puede hacer que este programa sea exitoso? </td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Qué resultados harían que este programa continuara a largo plazo? </td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Qué hallazgos o temas harían que este programa no fuera algo que se debiera seguir a largo plazo? </td>
			</tr>
		</tbody></table>
		<div class="jumbotron text-center">G.  Puntos de contacto con los ciudadanos </div>
		<table class="table table-striped">
			<tbody><tr>


				<td ><b>Proceso</b></td>
				<td ><b>Lo que les interesa a los ciudadanos </b></td>
				<td ><b>Iniciativa actual/cambios/ otros</b></td>

			</tr>
			<tr>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p36_1]"></td>

				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p37_1]"></td>

				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p38_1]"></td>			</tr>
			<tr>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p36_2]"></td>

				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p37_2]"></td>

				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p38_2]"></td>		</tr>
			<tr>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p36_3]"></td>

				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p37_3]"></td>

				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p38_3]"></td>			</tr>
			<tr>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p36_4]"></td>

				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p37_4]"></td>

				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p38_4]"></td>			</tr>
			<tr>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p36_5]"></td>

				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p37_5]"></td>

				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p38_5]"></td>			</tr>
			<tr>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p36_6]"></td>

				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p37_6]"></td>

				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p38_6]"></td>			</tr>
			<tr>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p36_7]"></td>

				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p37_7]"></td>

				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p38_7]"></td>			</tr>
			<tr>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p36_8]"></td>

				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p37_8]"></td>

				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p38_8]"></td>			</tr>



		</tbody></table>
		<div class="jumbotron text-center">H. Comunicaciones externas</div>
		<table class="table table-striped">
			<tbody><tr>
				<td>&nbsp;</td>
				<td>¿Qué mensajes dan ustedes en términos del ciclo del servicio, de los servicios al ciudadano, etc?  </td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p39]"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Qué otros mensajes explícitos les están llegando a los ciudadanos?</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p40]"></textarea></td>
			</tr>
		</tbody></table>
		<div class="jumbotron text-center">I. Métricas</div>
		<table class="table table-striped">
			<tbody>
			<tr>


				<td><b>Métrica interna</b></td>

				<td><b>Cómo/Cuándo? Dónde se obtiene?</b></td>

				<td><b>Cómo/Dónde? A quiénes es reportada? Quién es responsable?</b></td>


			</tr>
			<tr>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p41_1]"></td>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p42_1]"></td>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p43_1]"></td>


			</tr>
			<tr>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p41_2]"></td>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p42_2]"></td>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p43_2]"></td>		</tr>
			<tr>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p41_3]"></td>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p42_3]"></td>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p43_3]"></td>		</tr>
			<tr>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p41_4]"></td>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p42_4]"></td>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p43_4]"></td>			</tr>
			<tr>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p41_5]"></td>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p42_5]"></td>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p43_5]"></td>			</tr>
			<tr>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p41_6]"></td>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p42_6]"></td>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p43_6]"></td>		</tr>
			<tr>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p41_7]"></td>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p42_7]"></td>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p43_7]"></td>		</tr>
			<tr>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p41_8]"></td>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p42_8]"></td>


				<td  class="text-center"><input class="form-control" type="text" name="Cualitativo[p43_8]"></td>			</tr>

<tr>

				<td colspan="100" >Pensando exclusivamente en las encuestas de satisfacción que se han hecho en el pasado, ¿hay aspectos que no se están midiendo con relación a la interacción con los ciudadanos?, ¿qué otros aspectos no están siendo tenidos en cuenta? </td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p44]"></textarea></td>
			</tr>
			<tr>

				<td colspan="100" >¿Qué cosas de las mediciones de satisfacción no son accionables desde su  punto de vista y cuáles sí son accionables? </td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p45]"></textarea></td>
			</tr>
			<tr>

				<td colspan="100" >¿Cuál es la información más importante que le gustaría que resultara del estudio de satisfacción de servicio al ciudadano? </td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p46]"></textarea></td>
			</tr>
			<tr>

				<td colspan="100" >¿Y del estudio de satisfacción de la entidad? </td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p47]"></textarea></td>
			</tr>
			<tr>

				<td colspan="100" >¿Qué haría usted con esa información si la lograra conseguir?</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p48]"></textarea></td>
			</tr>
			<tr>

				<td colspan="100" >¿Cómo son los resultados de los estudios reportados o comunicados dentro de su organización? Y ¿cómo es el ciclo de planeación para implementar acciones con base a los resultados del estudio?</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p49]"></textarea></td>
			</tr>
			<tr>

				<td colspan="100" >¿Si se tomara la decisión de dejar de hacer estudios de satisfacción a quién le importaría? ¿A quién le harían  falta y para qué? </td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p50]"></textarea></td>
			</tr>
			<tr>

				<td colspan="100" >Para terminar ¿qué otros pensamientos u observaciones tiene usted con relación a los estudios de satisfacción del servicio al ciudadano? ¿Cómo esto está alineado con la estrategia o con los objetivos de su entidad?</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p51]"></textarea></td>
			</tr>
			<tr>

				<td colspan="100" >¿Cómo está siendo usado el estudio de satisfacción en la actualidad?</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p52]"></textarea></td>
			</tr>
			<tr>

				<td colspan="100" >¿Dónde se usa? A qué nivel se utiliza? Cómo se comunica a los diferentes niveles?</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cualitativo[p53]"></textarea></td>
			</tr>
		</tbody></table>
		<div class="jumbotron text-center">Datos del Informate</div>
		<table class="table table-striped">
			<tbody><tr>
				<td>&nbsp;</td>
				<td>¿Podría por favor indicar a qué entidad pertenece?</td>
				<td class="text-center" colspan="100"><select name="Cualitativo[p54]" class="form-control">
	<option value="99">Selecione...</option>
	<option value="1">ARMADA NACIONAL</option>
	<option value="2">BANCO AGRARIO DE COLOMBIA&nbsp;- BANAGRARIO S.A.</option>
	<option value="3">BANCO DE COMERCIO EXTERIOR DE COLOMBIA S.A. - BANCOLDEX</option>
	<option value="4">DEPARTAMENTO ADMINISTRATIVO DE CIENCIA, TECNOLOGÍA E INNOVACIÓN - COLCIENCIAS</option>
	<option value="5">DEPARTAMENTO ADMINISTRATIVO DE SEGURIDAD - DAS</option>
	<option value="6">DEPARTAMENTO ADMINISTRATIVO NACIONAL DE ESTADÍSTICA -DANE</option>
	<option value="7">DEPARTAMENTO NACIONAL DE PLANEACIÓN - DNP</option>
	<option value="8">DIRECCION DE SANIDAD MILITAR DE LAS FUERZAS MILITARES</option>
	<option value="9">EJÉRCITO NACIONAL</option>
	<option value="10">FONDO NACIONAL DE AHORRO - FNA</option>
	<option value="11">INSTITUTO COLOMBIANO AGROPECUARIO - ICA</option>
	<option value="12">INSTITUTO COLOMBIANO DE BIENESTAR FAMILIAR - ICBF</option>
	<option value="13">INSTITUTO COLOMBIANO DE CRÉDITO EDUCATIVO Y ESTUDIOS TÉCNICOS EN EL EXTERIOR MARIANO OSPINA PÉREZ - ICETEX</option>
	<option value="14">INSTITUTO COLOMBIANO DE DESARROLLO RURAL - INCODER</option>
	<option value="15">INSTITUTO DE HIDROLOGÍA, METEOROLOGÍA Y ESTUDIOS AMBIENTALES - IDEAM</option>
	<option value="16">INSTITUTO NACIONAL DE VÍAS - INVÍAS</option>
	<option value=" 17">INSTITUTO NACIONAL PARA CIEGOS -INCI</option>
	<option value=" 18">MINISTERIO DE COMERCIO INDUSTRIA Y TURISMO</option>
	<option value=" 19">MINISTERIO DE CULTURA</option>
	<option value=" 20">MINISTERIO DE DEFENSA NACIONAL</option>
	<option value=" 21">MINISTERIO DE EDUCACIÓN NACIONAL</option>
	<option value=" 22">MINISTERIO DE HACIENDA Y CRÉDITO PÚBLICO</option>
	<option value=" 23">MINISTERIO DE LA PROTECCIÓN SOCIAL</option>
	<option value=" 24">MINISTERIO DE MINAS Y ENERGÍA</option>
	<option value=" 25">MINISTERIO DE TRANSPORTE</option>
	<option value=" 26">POLICÍA NACIONAL</option>
	<option value=" 27">POSITIVA COMPAÑÍA DE SEGUROS S.A.</option>
	<option value=" 28">RADIO TELEVISIÓN NACIONAL DE COLOMBIA - RTVC</option>
	<option value=" 29">REGISTRADURÍA NACIONAL DEL ESTADO CIVIL</option>
	<option value=" 30">SERVICIO AÉREO A TERRITORIOS NACIONALES - SATENA</option>
	<option value=" 31">SERVICIO NACIONAL DE APRENDIZAJE - SENA</option>
	<option value=" 32">SUPERINTENDENCIA DE LA ECONOMÍA SOLIDARIA</option>
	<option value=" 33">SUPERINTENDENCIA DE NOTARIADO Y REGISTRO</option>
	<option value=" 34">SUPERINTENDENCIA DE PUERTOS Y TRANSPORTE</option>
	<option value=" 35">SUPERINTENDENCIA DE SOCIEDADES</option>
	<option value="36">SUPERINTENDENCIA DE VIGILANCIA Y SEGURIDAD PRIVADA</option>
	<option value=" 37">SUPERINTENDENCIA FINANCIERA DE COLOMBIA</option>
	<option value=" 38">SUPERINTENDENCIA NACIONAL DE SALUD</option>
	<option value=" 39">UNIDAD ADMINISTRATIVA ESPECIAL DE AERONÁUTICA CIVIL - AEROCIVIL</option>
	<option value="40">UNIDAD ADMINISTRATIVA ESPECIAL DE GESTIÓN PENSIONAL Y CONTRIBUCIONES PARAFISCALES DE LA PROTECCIÓN SOCIAL - UGPP</option>
	<option value=" 41">UNIDAD ADMINISTRATIVA ESPECIAL DIRECCIÓN DE IMPUESTOS Y ADUANAS NACIONALES - DIAN</option>
</select></td>
			</tr>
			<tr>
				<td><b>&nbsp;</b></td>
				<td><b>¿Podría ratificar sus datos personales? </b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Nombre</td>
				<td colspan="100" class="text-center"><input class="form-control" type="text" name="Cualitativo[p55_1]"></td>			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Cargo</td>
				<td colspan="100" class="text-center"><input class="form-control" type="text" name="Cualitativo[p55_2]"></td>			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Correo electrónico</td>
				<td colspan="100" class="text-center"><input class="form-control" type="text" name="Cualitativo[p55_3]"></td>			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>teléfono</td>
				<td colspan="100" class="text-center"><input class="form-control" type="text" name="Cualitativo[p55_4]"></td>			</tr>
			<tr>
				<td><b>&nbsp;</b></td>
				<td><b>&nbsp;</b></td>
				<td class="text-center"><b>Si</b></td>
				<td class="text-center"><b>No</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Nos autoriza a compartir sus datos personales con Ecopetrol?</td>
				<td class="text-center"><input type="radio" value="1" name="Cualitativo[p56]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cualitativo[p56]"></td>
			</tr>
		</tbody></table>

		<div class="text-center">
			<button type="submit" class="btn btn-primary">Envíar</button>
		</div>
	</form>
</div>