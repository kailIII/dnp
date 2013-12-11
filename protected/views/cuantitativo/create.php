<?php
/* @var $this CuantitativoController */
/* @var $model Cuantitativo */

$this->breadcrumbs=array(
	'Cuantitativos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cuantitativo', 'url'=>array('index')),
	array('label'=>'Manage Cuantitativo', 'url'=>array('admin')),
);
?>

<!-- <h1>Create Cuantitativo</h1> -->

<?php // $this->renderPartial('_form', array('model'=>$model)); ?>

<!-- <form id="cuantitativo-form" action="/dnp/index.php/cuantitativo/create" method="post">-->

<div class="container">
	<form id="cuantitativo-form" action="<?php echo Yii::app()->request->baseUrl; ?>/index.php/cuantitativo/create" method="post">

		<div class="jumbotron text-center">PRESENTACIÓN</div>
		<table class="table table-striped">
			<tbody><tr>
				<td><b>&nbsp;</b></td>
				<td colspan="100" ><b>Entender el nivel de planeación de actividades y la cultura interna dentro de las entidades con relación a los programas de retroalimentación de servicio al ciudadano también llamados estudios de satisfacción de servicio al ciudadano dentro de las entidades adscritas al Programa Nacional de Servicio al Ciudadano del DNP.</b></td>

			</tr>
			<tr>
				<td><b>&nbsp;</b></td>
				<td colspan="100" ><b>Los resultados harán parte de un informe de “Evaluación de la Gestión de Programas de Satisfacción al Ciudadano” que se entregará a las entidades que participen. </b></td>

			</tr>
		</tbody></table>
		<div class="jumbotron text-center">Comunicación</div>
		<table class="table table-striped">
			<tbody><tr>
				<td><b>&nbsp;</b></td>
				<td><b>En una escala de 1 a 5 donde 5 es excelente y 1 es malo</b></td>
				<td class="text-center"><b>Malo (1)</b></td>
				<td class="text-center"><b>2</b></td>
				<td class="text-center"><b>3</b></td>
				<td class="text-center"><b>4</b></td>
				<td class="text-center"><b>Excelente (5)</b></td>
				<td class="text-center"><b>Ns/Nr</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿cómo califica a los estudios de satisfacción de servicio al ciudadano que hacen en su entidad con relación a la forma como son socializados o comunicados los resultados?.</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p1]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p1]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p1]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p1]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p1]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p1]"></td>
			</tr>
			<tr>
				<td><b>&nbsp;</b></td>
				<td><b>Cómo califica, en cuanto a…</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
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
				<td><b>&nbsp;</b></td>
				<td><b>Comunicaciones Externas</b></td>
				<td class="text-center"><b>Malo (1)</b></td>
				<td class="text-center"><b>2</b></td>
				<td class="text-center"><b>3</b></td>
				<td class="text-center"><b>4</b></td>
				<td class="text-center"><b>Excelente (5)</b></td>
				<td class="text-center"><b>Ns/Nr</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Comunicar el valor de las encuestas</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p2]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p2]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p2]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p2]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p2]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p2]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Hacer seguimiento a los ciudadanos que dan su retroalimentación para mejorar las iniciativas </td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p3]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p3]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p3]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p3]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p3]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p3]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Utilizar los resultados para comunicar o mejorar los mensajes que se dan a los ciudadanos</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p4]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p4]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p4]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p4]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p4]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p4]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Comunicar externamente los resultados del estudio de satisfacción</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p5]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p5]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p5]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p5]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p5]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p5]"></td>
			</tr>
			<tr>
				<td><b>&nbsp;</b></td>
				<td><b>Comunicaciones internas</b></td>
				<td class="text-center"><b>Malo (1)</b></td>
				<td class="text-center"><b>2</b></td>
				<td class="text-center"><b>3</b></td>
				<td class="text-center"><b>4</b></td>
				<td class="text-center"><b>Excelente (5)</b></td>
				<td class="text-center"><b>Ns/Nr</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Comunicar el valor de los programas de satisfacción </td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p6]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p6]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p6]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p6]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p6]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p6]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Dar la información necesaria producto del estudio de satisfacción a los servidores que la necesitan</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p7]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p7]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p7]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p7]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p7]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p7]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Comunicar los resultados de los estudios de forma periódica y oportunamente</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p8]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p8]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p8]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p8]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p8]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p8]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Tener  una plataforma tecnológica y disponible para todos en donde se puedan visualizar los resultados de los estudio de satisfacción </td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p9]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p9]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p9]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p9]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p9]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p9]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Asegurar que los resultados sean consistentes y fáciles de utilizar</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p10]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p10]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p10]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p10]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p10]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p10]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Hacer accesibles los resultados del estudio de satisfacción </td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p11]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p11]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p11]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p11]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p11]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p11]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Hacer del programa de satisfacción de servicio al ciudadano una iniciativa entendida y manejada en toda la organización</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p12]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p12]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p12]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p12]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p12]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p12]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Qué aspectos o cómo cree que se pueden comunicar o difundir mejor los resultados del estudio de satisfacción de servicio al ciudadano?</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cuantitativo[p13]"></textarea></td>
			</tr>
		</tbody></table>
		<div class="jumbotron text-center">Recolección de Información</div>
		<table class="table table-striped">
			<tbody><tr>
				<td><b>&nbsp;</b></td>
				<td><b>En una escala de 1 a 5 donde 5 es excelente y 1 es malo</b></td>
				<td class="text-center"><b>Malo (1)</b></td>
				<td class="text-center"><b>2</b></td>
				<td class="text-center"><b>3</b></td>
				<td class="text-center"><b>4</b></td>
				<td class="text-center"><b>Excelente (5)</b></td>
				<td class="text-center"><b>Ns/Nr</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿cómo califica a los estudios de satisfacción de servicio al ciudadano que hacen en su entidad con relación a la forma como son estructurados en términos de recolección, diseño y profundidad de la información?</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p14]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p14]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p14]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p14]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p14]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p14]"></td>
			</tr>
			<tr>
				<td><b>&nbsp;</b></td>
				<td><b>Cómo califica, en cuanto a…</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
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
				<td><b>&nbsp;</b></td>
				<td><b>Diseño del programa</b></td>
				<td class="text-center"><b>Malo (1)</b></td>
				<td class="text-center"><b>2</b></td>
				<td class="text-center"><b>3</b></td>
				<td class="text-center"><b>4</b></td>
				<td class="text-center"><b>Excelente (5)</b></td>
				<td class="text-center"><b>Ns/Nr</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Usar la mejor metodología de recolección ejemplo: internet, presencial, teléfono, etc.</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p15]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p15]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p15]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p15]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p15]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p15]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Evitar sesgos cuando se realiza la medición</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p16]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p16]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p16]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p16]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p16]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p16]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Hacer las preguntas correctas a los ciudadanos correctos</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p17]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p17]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p17]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p17]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p17]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p17]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Utilizar o elegir las personas idóneas para realizar el estudio de servicio a los ciudadanos</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p18]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p18]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p18]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p18]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p18]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p18]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Tener en cuenta las diferencias entre los segmentos o la variación de las necesidades entre ciudadanos</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p19]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p19]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p19]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p19]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p19]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p19]"></td>
			</tr>
			<tr>
				<td><b>&nbsp;</b></td>
				<td><b>Ejecución del programa</b></td>
				<td class="text-center"><b>Malo (1)</b></td>
				<td class="text-center"><b>2</b></td>
				<td class="text-center"><b>3</b></td>
				<td class="text-center"><b>4</b></td>
				<td class="text-center"><b>Excelente (5)</b></td>
				<td class="text-center"><b>Ns/Nr</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Lograr una buena participación de ciudadanos en el programa</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p20]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p20]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p20]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p20]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p20]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p20]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Usar métodos que permiten datos estándar </td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p21]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p21]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p21]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p21]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p21]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p21]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Hacer suficientes análisis para hacer los resultados accionables</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p22]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p22]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p22]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p22]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p22]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p22]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Qué aspectos o cómo cree que se puede mejorar en términos metodológicos el estudio de satisfacción de servicio al ciudadano que realiza su entidad?</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cuantitativo[p23]"></textarea></td>
			</tr>
		</tbody></table>
		<div class="jumbotron text-center">Relevancia</div>
		<table class="table table-striped">
			<tbody><tr>
				<td><b>&nbsp;</b></td>
				<td><b>En una escala de 1 a 5 donde 5 es excelente y 1 es malo</b></td>
				<td class="text-center"><b>Malo (1)</b></td>
				<td class="text-center"><b>2</b></td>
				<td class="text-center"><b>3</b></td>
				<td class="text-center"><b>4</b></td>
				<td class="text-center"><b>Excelente (5)</b></td>
				<td class="text-center"><b>Ns/Nr</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿cómo califica a los estudios de satisfacción de  servicio al ciudadano que hacen en su entidad con relación a estar alineados con los objetivos específicos de las unidades y de la entidad?</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p24]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p24]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p24]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p24]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p24]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p24]"></td>
			</tr>
			<tr>
				<td><b>&nbsp;</b></td>
				<td><b>Cómo califica, en cuanto a…</b></td>
				<td class="text-center"><b>Malo (1)</b></td>
				<td class="text-center"><b>2</b></td>
				<td class="text-center"><b>3</b></td>
				<td class="text-center"><b>4</b></td>
				<td class="text-center"><b>Excelente (5)</b></td>
				<td class="text-center"><b>Ns/Nr</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Tener establecidos unos objetivos claros sobre el estudio de satisfacción al ciudadano</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p25]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p25]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p25]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p25]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p25]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p25]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>El valor que traen los resultados del estudio de satisfacción al ciudadano a los servidores</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p26]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p26]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p26]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p26]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p26]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p26]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Recoger información accionable en la evaluación de satisfacción </td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p27]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p27]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p27]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p27]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p27]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p27]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Dar entrenamiento sobre cómo usar los resultados de los estudios de satisfacción</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p28]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p28]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p28]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p28]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p28]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p28]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Mostrar los resultados de tal forma que las implicaciones sean claras </td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p29]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p29]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p29]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p29]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p29]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p29]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Usar la retroalimentación de los ciudadanos por un amplio grupo de personas dentro de la organización </td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p30]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p30]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p30]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p30]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p30]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p30]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Confiar y creer que los estudios de satisfacción al ciudadano son claves</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p31]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p31]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p31]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p31]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p31]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p31]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Utilizar los resultados de los estudios de satisfacción</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p32]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p32]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p32]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p32]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p32]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p32]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Qué aspectos o cómo se puede hacer el estudio de satisfacción de servicio al ciudadano más relevante o que dé más valor a su entidad?</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cuantitativo[p33]"></textarea></td>
			</tr>
		</tbody></table>
		<div class="jumbotron text-center">Acción</div>
		<table class="table table-striped">
			<tbody><tr>
				<td><b>&nbsp;</b></td>
				<td><b>En una escala de 1 a 5 donde 5 es excelente y 1 es malo</b></td>
				<td class="text-center"><b>Malo (1)</b></td>
				<td class="text-center"><b>2</b></td>
				<td class="text-center"><b>3</b></td>
				<td class="text-center"><b>4</b></td>
				<td class="text-center"><b>Excelente (5)</b></td>
				<td class="text-center"><b>Ns/Nr</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿cómo califica a los estudios de satisfacción de servicio al ciudadano que hacen en su entidad con relación a convertir en acciones los hallazgos más importantes?</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p34]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p34]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p34]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p34]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p34]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p34]"></td>
			</tr>
			<tr>
				<td><b>&nbsp;</b></td>
				<td><b>Cómo califica, en cuanto a…</b></td>
				<td class="text-center"><b>Malo (1)</b></td>
				<td class="text-center"><b>2</b></td>
				<td class="text-center"><b>3</b></td>
				<td class="text-center"><b>4</b></td>
				<td class="text-center"><b>Excelente (5)</b></td>
				<td class="text-center"><b>Ns/Nr</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Tener una clara relación entre el estudio de satisfacción de servicio al ciudadano y los objetivos de la organización</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p35]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p35]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p35]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p35]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p35]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p35]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>El compromiso de la alta dirección con los indicadores de satisfacción al ciudadano </td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p36]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p36]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p36]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p36]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p36]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p36]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Tener presupuesto asignado para realizar los estudios de satisfacción al ciudadano </td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p37]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p37]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p37]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p37]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p37]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p37]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Tener claridad de los responsables de las acciones y los resultados</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p38]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p38]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p38]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p38]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p38]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p38]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Tener un presupuesto asignado para las iniciativas que se deriven de los resultados del estudio de satisfacción de servicio al ciudadano</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p39]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p39]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p39]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p39]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p39]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p39]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Hacer entrenamientos sobre buenas prácticas y tácticas de mejora</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p40]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p40]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p40]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p40]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p40]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p40]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Hacer que los equipos y los procesos utilicen dentro de sus indicadores métricas del estudio de satisfacción </td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p41]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p41]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p41]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p41]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p41]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p41]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Qué aspectos o cómo se puede hacer para que se tomen más acciones o para que el estudio de satisfacción de servicio al ciudadano sea usado para dar directrices de cambio?</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cuantitativo[p42]"></textarea></td>
			</tr>
		</tbody></table>
		<div class="jumbotron text-center">Validación</div>
		<table class="table table-striped">
			<tbody><tr>
				<td><b>&nbsp;</b></td>
				<td><b>En una escala de 1 a 5 donde 5 es excelente y 1 es malo</b></td>
				<td class="text-center"><b>Malo (1)</b></td>
				<td class="text-center"><b>2</b></td>
				<td class="text-center"><b>3</b></td>
				<td class="text-center"><b>4</b></td>
				<td class="text-center"><b>Excelente (5)</b></td>
				<td class="text-center"><b>Ns/Nr</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿cómo califica a los estudios de satisfacción de servicio al ciudadano que hacen en su entidad con relación a comprobar que las iniciativas traen beneficios económicos, sociales, reputacionales, etc.?</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p43]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p43]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p43]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p43]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p43]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p43]"></td>
			</tr>
			<tr>
				<td><b>&nbsp;</b></td>
				<td><b>Cómo califica, en cuanto a…</b></td>
				<td class="text-center"><b>Malo (1)</b></td>
				<td class="text-center"><b>2</b></td>
				<td class="text-center"><b>3</b></td>
				<td class="text-center"><b>4</b></td>
				<td class="text-center"><b>Excelente (5)</b></td>
				<td class="text-center"><b>Ns/Nr</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Hacer una adecuada mezcla de métricas entre presupuestales, internas de procesos, etc.</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p44]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p44]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p44]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p44]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p44]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p44]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Demostrar el retorno de la inversión de los estudios de satisfacción</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p45]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p45]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p45]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p45]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p45]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p45]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Tener casos registrados en donde se hizo una diferencia con base en el estudio de satisfacción al ciudadano</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p46]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p46]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p46]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p46]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p46]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p46]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Usar a un tercero u otros medios para asegurar la objetividad de la recolección, el manejo del programa y el análisis</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p47]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p47]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p47]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p47]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p47]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p47]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Qué aspectos o cómo se puede hacer para que el estudio de satisfacción de servicio al ciudadano muestre o demuestre la forma como se alinea con los objetivos y/o estrategias en su entidad?</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cuantitativo[p48]"></textarea></td>
			</tr>
		</tbody></table>
		<div class="jumbotron text-center">Integración</div>
		<table class="table table-striped">
			<tbody><tr>
				<td><b>&nbsp;</b></td>
				<td><b>En una escala de 1 a 5 donde 5 es excelente y 1 es malo</b></td>
				<td class="text-center"><b>Malo (1)</b></td>
				<td class="text-center"><b>2</b></td>
				<td class="text-center"><b>3</b></td>
				<td class="text-center"><b>4</b></td>
				<td class="text-center"><b>Excelente (5)</b></td>
				<td class="text-center"><b>Ns/Nr</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿cómo califica a los estudios de satisfacción de servicio al ciudadano que hacen en su entidad, con relación a tener un grupo interdisciplinario que analice, enfoque el programa y visualice las necesidades presupuestales y de otros recursos para darle continuidad al programa?</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p49]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p49]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p49]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p49]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p49]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p49]"></td>
			</tr>
			<tr>
				<td><b>&nbsp;</b></td>
				<td><b>Cómo califica, en cuanto a…</b></td>
				<td class="text-center"><b>Malo (1)</b></td>
				<td class="text-center"><b>2</b></td>
				<td class="text-center"><b>3</b></td>
				<td class="text-center"><b>4</b></td>
				<td class="text-center"><b>Excelente (5)</b></td>
				<td class="text-center"><b>Ns/Nr</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Ser una entidad centrada en servirle a los ciudadanos</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p50]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p50]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p50]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p50]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p50]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p50]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Estar enfocados en el servicio al ciudadano</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p51]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p51]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p51]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p51]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p51]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p51]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Empoderar a los servidores a resolver temas relacionados con los ciudadanos</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p52]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p52]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p52]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p52]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p52]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p52]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Alinear  los objetivos de la entidad con los de los  ciudadanos </td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p53]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p53]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p53]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p53]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p53]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p53]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Involucrar a todas las áreas en el estudio de satisfacción del servicio al ciudadano</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p54]"></td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p54]"></td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p54]"></td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p54]"></td>
				<td class="text-center"><input type="radio" value="5" name="Cuantitativo[p54]"></td>
				<td class="text-center"><input type="radio" value="9" name="Cuantitativo[p54]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Qué aspectos o qué puede hacer su entidad para ser más enfocados al servicio al ciudadano?</td>

		</tr>		<tr>
				<td colspan="100" class="text-center"><textarea class="form-control" name="Cuantitativo[p55]"></textarea></td>
			</tr>
		</tbody></table>
		<div class="jumbotron text-center">Datos del  Informante</div>
		<table class="table table-striped">
			<tbody><tr>
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
				<td class="text-center"><b>&nbsp;</b></td>
				<td class="text-center"><b>&nbsp;</b></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Podría por favor indicar a qué entidad pertenece?</td>
				<td class="text-center" colspan="100"><select name="Cuantitativo[p56]" class="form-control">
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
	<option value=" 41">UNIDAD ADMINISTRATIVA ESPECIAL DIRECCIÓN DE IMPUESTOS Y ADUANAS NACIONALES – DIAN</option>
</select></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Podría indicar su rol dentro de la entidad? </td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Estratégico (Directivo o Director)</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p57]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Táctico (Gestiona un área o proceso)</td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p57]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Operativo (No tiene persona a su cargo)</td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p57]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>¿Su responsabilidad está relacionada con qué área en la entidad? </td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Atención o relacionada con servicio al ciudadano</td>
				<td class="text-center"><input type="radio" value="1" name="Cuantitativo[p58]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Corporativo o Planeación </td>
				<td class="text-center"><input type="radio" value="2" name="Cuantitativo[p58]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Encargados de servicios de soporte o administrativos (servicios generales, cuentas por pagar, tesorería, cartera, recursos humanos, etc.)</td>
				<td class="text-center"><input type="radio" value="3" name="Cuantitativo[p58]"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Áreas misionales o procesos relacionados con el objeto de la entidad</td>
				<td class="text-center"><input type="radio" value="4" name="Cuantitativo[p58]"></td>
			</tr>
			<tr>
				<td><b>&nbsp;</b></td>
				<td colspan="100" class="text-center" ><b>Nuevamente quiero agradecerle su colaboración a nombre del Centro Nacional de Consultoría. </b></td>

			</tr>
			<tr>
				<td><b>&nbsp;</b></td>
				<td colspan="100" class="text-center" ><b>Tenga usted un(a) feliz día/tarde/noche</b></td>

			</tr>
		</tbody></table>

		<div class="text-center">
			<button type="submit" class="btn btn-primary">Envíar</button>
		</div>
	</form>
</div>