<?php
	require('../libvitality.php');
	require('../sendgrid-php/sendgrid-php.php');
	require('../sendgrid-php/vendor/autoload.php');
	function correoSendGrid($destinatario, $remitente, $titulo, $texto){
		$headers = "MIME-Version: 1.0\r\n".
           "Content-type: text/html;charset=charset=UTF-8\r\n".
           "From: $remitente\r\n".
           "Reply-To: $remitente\r\n".
           "Return-path: $remitente\r\n".
           "\r\n";
		$from = new SendGrid\Email(null, $remitente."@vitalitymexico.com");
		$subject = $titulo;
		$to = new SendGrid\Email(null, $destinatario);
		$content = new SendGrid\Content("text/HTML", $texto);
		$mail = new SendGrid\Mail($from, $subject, $to, $content,$headers);
		//$apiKey = getenv('SENDGRID_API_KEY');
		$apiKey="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";
		$sg = new \SendGrid($apiKey);
		$response = $sg->client->mail()->send()->post($mail);
		return $response->statusCode().$response->headers().$response->body();
	}
?>
<!DOCTYPE HTML>
<html lang='es'>
	<head>
		<?php cabeceras("Vitality México | Cuidando la salud y vida de tu pequeño Mérida",
		"Apoyo a bebés en areá medica, estimulación temprana, cuidado a salud y bienestar infantil y puericultura. Asistencia y enfermeria a niños.",
		"ASISTENCIA MEDICA, ENFERMERIA A DOMICILIO EN MERIDA YUCATAN",
		"../images/imgkids/imagenvk02.jpg"); ?>
		<?php estilos_scripts("../"); ?>
	</head>
<body>
		<?php flecha_arriba(); ?>

	<div id='page'>
		<?php menu(7); ?>

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<?php slider_simple("../images/imgkids/imagenvk02.jpg","1"); ?>
			</div>
		</div>

		<br>
		<div class='gtco-section-overflow'>
			<div class='gtco-section' id='gtco-apoyo-bebe' data-section='services'>
				<div class='gtco-container'>
					<h1 class='text-center'>¿Cómo te apoyamos a ti y a tu bebé?</h1>
					<br>
					
					<div class='row animate-box' data-animate-effect='fadeIn'>
					
						<div class='col-md-6 col-sm-5 col-md-offset-3'>
							<div class='col-md-6 col-sm-6'>
								<div class='feature-center'>
									<img src='../images/imgkids/PUERICULTURA.png' alt='Puericultura' class='img-responsive'>
								</div>
							</div>
							
							
							<div class='col-md-6 col-sm-6'>
								<div class='feature-center'>
									<img src='../images/imgkids/ENFERMERIA-ICONO.png' alt='Puericultura' class='img-responsive'>
								</div>
							</div>
							
							<h5 class='text-center'><b>Para niños de 0 a 6 años.</b></h5>
							<h2 class='text-center'><a href='../actividades-servicios-enfermera-puericultora-vitality-kids-bebes.pdf'><b><i>Conoce las actividades realizadas por cada perfil.</i></b></a></h2>
							<br>
						</div>
						
					</div>

					<div class='row animate-box' data-animate-effect='fadeIn'>
							
							
								<div class='col-md-4 col-sm-4'>
								<div class='feature-center'>
								<span class='icon'>
								<img src='../images/imgkids/Estimulacion temprana.png' alt='Estimulación temprana' class='img-responsive center-block'>
								</span>
								<div class='text-center'>
								<h2>Estimulación temprana</h2>
								</div>
								</div>
								</div>
					
								<div class='col-md-4 col-sm-4'>
								<div class='feature-center'>
								<span class='icon'>
								<img src='../images/imgkids/Higiene.png' alt='Apoyo en su higiene personal y aseo general' class='img-responsive center-block'>
								</span>
								<div class='text-center'>
								<h2>Apoyo en su higiene personal y aseo general</h2>
								</div>
								</div>
								</div>
								
								<div class='col-md-4 col-sm-4'>
								<div class='feature-center'>
								<span class='icon'>
								<img src='../images/imgkids/Alimentacion.png' alt='Apoyo en su alimentación.' class='img-responsive center-block'>
								</span>
								<div class='text-center'>
								<h2>Apoyo en su alimentación.</h2>
								</div>
								</div>
								</div>
							
					</div>
					
					
					<div class='row animate-box' data-animate-effect='fadeIn'>
							
							
								<div class='col-md-4 col-sm-4'>
								<div class='feature-center'>
								<span class='icon'>
								<img src='../images/imgkids/Recreacion.png' alt='Acompañamiento y recreación' class='img-responsive center-block'>
								</span>
								<div class='text-center'>
								<h2>Acompañamiento y recreación</h2>
								</div>
								</div>
								</div>
					
								<div class='col-md-4 col-sm-4'>
								<div class='feature-center'>
								<span class='icon'>
								<img src='../images/imgkids/Tratamientos medicos.png' alt='Seguimiento a tratamientos médicos.' class='img-responsive center-block'>
								</span>
								<div class='text-center'>
								<h2>Seguimiento a tratamientos médicos.</h2>
								</div>
								</div>
								</div>
								
								<div class='col-md-4 col-sm-4'>
								<div class='feature-center'>
								<span class='icon'>
								<img src='../images/imgkids/salud y bienestar.png' alt='Cuidados a su salud y bienestar.' class='img-responsive center-block'>
								</span>
								<div class='text-center'>
								<h2>Cuidados a su salud y bienestar.</h2>
								</div>
								</div>
								</div>
							
					</div>
				</div>
			</div>

			<div class='gtco-section' id='gtco-compromisos-bebe' data-section='services'>
				<div class='gtco-container'>
					<br>
					<h1 class='text-center'>Nuestros Compromisos</h1>
					<br>
					<div class='row'>
						<div class='col-md-12 animate-box' data-animate-effect='fadeIn'>
							<div class='row'>
							
								<div class='col-md-4 col-sm-4'>
									<div class='feature-left'>
									<span class='icon'>
									<img src='../images/imgkids/Valoracion.png' alt='Valoración inicial vitality Kids'>
									</span>
									<div class='feature-copy'>
									<h2>Valoración Inicial:</h2>
									<p>Realización de una valoración previa para conocer cuál es el personal más idóneo para el bebé y el plan de cuidados a realizar, dependiendo de sus necesidades.</p>
									</div>
									</div>
								</div>

								<div class='col-md-4 col-sm-4'>
									<div class='feature-left'>
									<span class='icon'>
									<img src='../images/imgkids/Personal.png' alt='Nuestro personal vitality Kids'>
									</span>
									<div class='feature-copy'>
									<h2>El mejor personal:</h2>
									<p>Personal capacitado, con conocimiento y experiencia en el área de enfermería y puericultura.</p>
									</div>
									</div>
								</div>

								<div class='col-md-4 col-sm-4'>
									<div class='feature-left'>
									<span class='icon'>
									<img src='../images/imgkids/Supervision.png' alt='Siempre al pendiente vitality Kids'>
									</span>
									<div class='feature-copy'>
									<h2>Supervisión constante:</h2>
									<p>Supervisamos y asesoramos a nuestro personal de manera continua para asegurarnos de que recibes el mejor servicio.</p>
									</div>
									</div>
								</div>

							</div>
						</div>

						<div class='col-md-12 animate-box' data-animate-effect='fadeIn'>
							<div class='row'>
								<div class='col-md-4 col-sm-4'>
									<div class='feature-left'>
									<span class='icon'>
									<img src='../images/imgkids/Garantia.png' alt='Garantia vitality Kids'>
									</span>
									<div class='feature-copy'>
									<h2>Garantía de cobertura:</h2>
									<p>En caso de alguna incidencia imprevista de nuestro personal, cubrimos el servicio en un plazo no mayor a 4 horas, con personal de igual compromiso, conocimiento y dedicación.</p>
									</div>
									</div>
								</div>

								<div class='col-md-4 col-sm-4'>
									<div class='feature-left'>
									<span class='icon'>
									<img src='../images/imgkids/Calidad.png' alt='Calidad en nuestro servicio vitality Kids'>
									</span>
									<div class='feature-copy'>
									<h2>Calidad:</h2>
									<p>Confianza y tranquilidad de tener a tu pequeño en buenas manos y en personal que respetará y cuidará en todo momento su integridad, intimidad y salud.</p>
									</div>
									</div>
								</div>

								<div class='col-md-4 col-sm-4'>

								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class='clearfix visible-lg-block visible-md-block'></div>
			<div class='clearfix visible-sm-block'></div>

	<a name='formulario'></a>
			
			<div class='gtco-container' id='gtco-form-bebe'>
			<br>
			<h1 class='text-center'>Contáctanos</h1>
			<div class='col-md-8 col-md-offset-2 animate-box' data-animate-effect='fadeIn'>
					<p>Déjanos un mensaje </p>
					<div class='contact-form'><form id='contact-form' method='post' action='#formulario' role='form'>
						<div class='col-md-6'>
							<div class='form-group'>
								<input required type='text' placeholder='Nombre' class='form-control' name='nombre'>
							</div>
						</div>
						<div class='col-md-6'>
							<div class='form-group'>
								<input required type='text' placeholder='Servicio' class='form-control' name='servicio'>
							</div>
						</div>
						<div class='col-md-12'>
							<div class='form-group'>
								<input required type='text'  pattern='[0-9]+(\.[0-9]{0,2})?' placeholder='Teléfono de contacto' class='form-control' name='telefono'>
							</div>
						</div>
						
						<div class='col-md-12'>
							<div class='form-group'>
								<textarea required rows='6' placeholder='Mensaje' class='form-control' name='mensaje'></textarea>    
							</div>
						</div>
						
						<div class='col-md-12'>
							<div class='form-group'>
								<input type='submit' id='contact-submit' class='btn btn-default btn-send' value='Enviar mensaje'>
							</div> 							
						
						
						
							<?php
								extract($_POST);
								if(isset($telefono)&& $telefono!='' ){
									$texto="Vitality KIDS<br>".
											"Nombre del interesado: $nombre<br>".
											"Servicio: $servicio<br>\n".
											"Teléfono: $telefono<br>".
											"Mensaje: $mensaje".
											"";
									//correoSendGrid("veronica@vitalitymexico.com", "Formulario_Kids", "www.vitalitymexico.com", $texto);
									correoSendGrid("contacto@vitalitymexico.com", "Formulario_Kids", "www.vitalitymexico.com", $texto);
									echo "	<div class='alert alert-success'>
												<button type='button' class='close' data-dismiss='alert'>&times;</button>
												<strong>¡Bien Hecho!</strong> El mensaje se envió correctamente.
											</div>
									";
								}
								$telefono="";
								unset($telefono);
							?>
						
						</div>                      

					</form></div>
				</div>
			</div>
					
			<div class='col-md-12'>
				<section id='contact-section'>
					<div class='row address-details'>
						<div class='col-md-3 animate-box' data-animate-effect='fadeIn'>
								<div class='address wow fadeInLeft' data-wow-duration='500ms' data-wow-delay='.3s'>
								<i class='icon-home'></i>
								<h5>Sucursal Mérida<br>
									C 20 No. 300A por 11 y 13 Cámara de Comercio Norte
								</h5>
								</div>
							</div>
							<div class='col-md-3 animate-box' data-animate-effect='fadeIn'>
								<div class='email wow fadeInLeft' data-wow-duration='500ms' data-wow-delay='.7s'>
								<i class='icon-email'></i>
								<h5>contacto@vitalitymexico.com</h5>
								</div>
							</div>
							<div class='col-md-3 animate-box' data-animate-effect='fadeIn'>
								<div class='phone wow fadeInLeft' data-wow-duration='500ms' data-wow-delay='.9s'>
								<i class='icon-phone'></i>
								<h5>Oficina: (999)9432974 <br>Celular: (999)2285419 <br>Celular: (999)1695514</h5>
								</div>
							</div>
							<div class='col-md-3 animate-box' data-animate-effect='fadeIn'>
								<div class='address wow fadeInLeft' data-wow-duration='500ms' data-wow-delay='.3s'>
								<i class='icon-home'></i>
								<h5>Sucursal Campeche<br>
									Plaza Central, Avenida Central No. 45 Local 12 Colonia Barrio de Santa Ana.
								</h5>
								</div>
							</div>
					</div>
				</section>
			</div>

			</div>
		<?php footer("../aviso-de-privacidad-vitality.pdf"); ?>
	</div>
</body>

</html>

