<?php
	require('libvitality.php');
	require('sendgrid-php/sendgrid-php.php');
	require('sendgrid-php/vendor/autoload.php');
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
		<?php cabeceras("Vitality México | Enfermeros para Tercera Edad Mérida Ubicación",
						"¿Te gustaría cotizar algún servicio?. Déjanos un mensaje con tus datos completos.",
						"ubicación, como llegar vitality",
						"images/Vitality_Slide_04.jpg"); ?>
		<?php estilos_scripts(); ?>
	</head>
	<body>
		<?php flecha_arriba(); ?>
	<div id='page'>
	<?php menu(6); ?>
	<div id='gtco-blog' data-section='blog'>
		<div class='gtco-container'>
			<div class='row'>
			
				<div class='col-md-6'>
					<br>
					<br>
					<br>
					<?php
						extract($_POST);
						if(isset($telefono)&& $telefono!='' ){
							$texto="Nombre de familiar: $familiar<br>".
									"Paciente: $paciente<br>\n".
									"Edad: $edad<br>".
									"Patología: $patologia<br>".
									"Teléfono: $telefono<br>".
									"Mensaje: $mensaje".
									"";
							correoSendGrid("contacto@vitalitymexico.com", "Formulario_contacto", "www.vitalitymexico.com", $texto);
							echo "	<div class='alert alert-success'>
										<button type='button' class='close' data-dismiss='alert'>&times;</button>
										<strong>¡Bien Hecho!</strong> El correo se envió correctamente.
									</div>
							";
							
						}
						$telefono="";
						unset($telefono);
					?>

				</div>
				
			</div>
			<div class='row'>
				<br><br>
				<div class='col-md-6 animate-box' data-animate-effect='fadeIn'>
					<p>¿Te gustaría cotizar algún servicio?. Déjanos un mensaje con tus datos completos.</p>
					<div class='contact-form'><form id='contact-form' method='post' action='' role='form'>
					
						<div class='form-group'>
							<input required type='text' placeholder='Nombre del familiar' class='form-control' name='familiar'>
						</div>
						<div class='form-group'>
							<input required type='text' placeholder='Nombre del paciente' class='form-control' name='paciente'>
						</div>
						<div class='form-group'>
							<input required type='text' placeholder='Edad del paciente' class='form-control' name='edad' min='1'>
						</div>
						<div class='form-group'>
							<input type='text' placeholder='Patología' class='form-control' name='patologia'>
						</div>
						<div class='form-group'>
							<input required type='text'  pattern='[0-9]+(\.[0-9]{0,2})?' placeholder='Teléfono de contacto' class='form-control' name='telefono'>
						</div>
						<div class='form-group'>
							<textarea required rows='6' placeholder='Mensaje' class='form-control' name='mensaje'></textarea>    
						</div>

						<div class='form-group'>
							<input type='submit' id='contact-submit' class='btn btn-default btn-send' value='Enviar mensaje'>
						</div>                      

					</form></div>
				</div>
				
				<div class='col-md-6 animate-box' data-animate-effect='fadeIn'>
					<h4 class='text-center'>Ubicación en mapa</h4>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10535.460992654898!2d-89.60545967635932!3d20.99871870065108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56712dbaaa47ff%3A0x67f2b53ce42d8af9!2sVitality+M%C3%A9xico!5e0!3m2!1ses-419!2smx!4v1494619675904" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				
				<div class='clearfix visible-lg-block visible-md-block'></div>
				<div class='clearfix visible-sm-block'></div>
				
				<div class='col-md-12'>
					<section id='contact-section'>
						<div class='row address-details'>
							<div class='col-md-4 animate-box' data-animate-effect='fadeIn'>
								<div class='address wow fadeInLeft' data-wow-duration='500ms' data-wow-delay='.3s'>
								<i class='icon-location'></i>
								<h5>
									Calle 20 Num 300A por 11 y 13 Cámara de Comercio Norte.
									<br>CP 97133, Merida, Yucatán.
								</h5>
								</div>
							</div>
							<div class='col-md-4 animate-box' data-animate-effect='fadeIn'>
								<div class='email wow fadeInLeft' data-wow-duration='500ms' data-wow-delay='.7s'>
								<i class='icon-email'></i>
								<h5>contacto@vitalitymexico.com</h5>
								</div>
							</div>
							<div class='col-md-4 animate-box' data-animate-effect='fadeIn'>
								<div class='phone wow fadeInLeft' data-wow-duration='500ms' data-wow-delay='.9s'>
								<i class='icon-phone'></i>
								<h5>Oficina: (999)9432974 <br>Celular: (999)2285419 <br>Celular: (999)1695514</h5>
								</div>
							</div>
						</div>
					</section>
				</div>
				
			</div>
		</div>
	</div>
	<?php footer("aviso-de-privacidad-vitality.pdf"); ?>
	</div>
	</body>
</html>

