<?php require('libvitality.php'); ?>
<!DOCTYPE HTML>
<html lang='es'>
	<head>
		<?php cabeceras("Vitality México | Enfermería para Adultos Mayores Mérida",
						"Somos un equipo de profesionales que asistimos a adultos mayores, personas con problemas de movilidad y dependencia física.",
						"ENFERMEDADES DEGENERATIVAS, ASISTENCIA MEDICA, ENFERMERIA A DOMICILIO EN MERIDA YUCATAN",
						"images/Vitality_Slide_01.jpg"); ?>
		<?php estilos_scripts(""); ?>
	</head>
	<body>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution="setup_tool"
  page_id="186567538342288"
  theme_color="#8370A6">
</div>
		<?php flecha_arriba(); ?>
	<div id='page'>
	<?php menu(1); ?>

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		
		<div class="carousel-inner">
		
			<?php slider("images/Vitality_Slide_01.jpg","1"); ?>
			<?php slider("images/Vitality_Slide_02.jpg","0"); ?>
			<?php slider("images/Vitality_Slide_03.jpg","0"); ?>
			<?php slider("images/Vitality_Slide_04.jpg","0"); ?>

		</div>

		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	
	<div class='gtco-section-overflow'>

		<div class='gtco-section' id='gtco-services' data-section='conocenos_vitality'>
			<div class='gtco-container'>
			<div class='row'>
				
				<br>
				
				<div class='col-md-8 animate-box' data-animate-effect='fadeIn'>
					<div class='row'>
						<div class='col-md-6 col-xs-6'>
							<img class='img-responsive' src='images/LogoVitalityhorizontal.png' alt='Logotipo vitalitymexico'>
						</div>
					</div>
					
					<br>
					
					<div class='row'>
						<div class='col-md-12'>
							<p>Sabemos que la tercera edad es una etapa en la que el adulto o adulto mayor va perdiendo ciertas facultades y tiende a enfermarse con frecuencia. La asistencia médica a domicilio puede brindar ese apoyo para que el cuidado o recuperación de la persona sea de calidad, y brinde seguridad y tranquilidad a su familia.</p>
							<p>Vitality está conformado por un <strong> equipo de profesionales multidisciplinario (enfermeros, cuidadoras, psicólogos, tanatólogos y fisioterapeutas) </strong> que proporcionan asistencia, compañía, apoyo y rehabilitación para adultos o adultos mayores que requieren cuidados temporales o permanentes en casa u hospital.</p>
							<p><b>Nuestra razón de ser: Mejorar la calidad de vida de la persona que cuidamos y de sus familiares.</b></p>
						</div>
					</div>
				</div>
				
				<div class='col-md-4 animate-box' data-animate-effect='fadeIn'>
					<div class='row'>
						<div class='col-md-12'>
							<h1>¿A quiénes asistimos?</h1>
							<ul  class='vineta'>
								<li>Personas con problemas de movilidad y dependencia física.</li>
								<li>Que padecen enfermedades crónicas o terminales.</li>
								<li>Que padecen enfermedades degenerativas.</li>
								<li>Que están en proceso de recuperación post hospitalaria.</li>
								<li>Que requieren asistencia o pasan mucho tiempo solos en casa.</li>
							</ul>
							<br>
							<p class='text-center'> <a href='nuestros-servicios.php' title='Servicios y compromiso con el adulto mayor' class='btn btn-primary btn-lg'>Más información</a> </p>
						</div>
						
					</div>
				</div>
			</div>
			<br>
			<br>
			<br>
			</div>
		</div>

	</div>
	<?php footer("aviso-de-privacidad-vitality.pdf"); ?>
	</div>
	</body>
</html>

