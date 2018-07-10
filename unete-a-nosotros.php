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
		<?php cabeceras("Vitality México | Bolsa de Trabajo en Mérida Enfermero Gericultor Fisioterapeuta Psicólogo",
						"Manda tu curriculum. Buscamos personal comprometido, por lo que si eres auxiliar de enfermería, enfermero general o gericultor, fisioterapeuta o psicólogo clínico, te invitamos a trabajar con nosotros.",
						"bolsa de trabajo en merida, curriculum vitae, enfermero, gericultor, fisioterapeuta, psicólogo",
						"images/vitality-unete.png"); ?>
		<?php estilos_scripts(""); ?>
	</head>
	<body>
		<?php flecha_arriba(); ?>
	<div id='page'>
	<?php menu(4); ?>
	<br>
	<br>
	<br>
	<div id='gtco-subscribe'>
		<div class='gtco-container'>
			<div class='row'>
				<div class='col-md-12'>
				
						<div class='col-md-3 col-sm-3'>
							<div class='form-group2'>
								<img src='images/vitality-unete.png' class='img-responsive center-block' style='padding-top: 76px; margin-bottom: 0px;'>
							</div>
						</div>
						<div class='col-md-1 col-sm-1'></div>
						<div class='col-md-8 col-sm-8'>
							<div class='form-group2'>
								<br>	
								<h3>Únete y pertenece a vitality</h3>
								<p>Buscamos personal comprometido, por lo que si eres <strong>auxiliar de enfermería, enfermero general o gericultor, fisioterapeuta o psicólogo clínico</strong>, te invitamos a trabajar con nosotros.</p>
								<p>Buscamos personal con las siguientes características:</p>
								<ul>
									<li>- Con gran vocación por ayudar a los demás.</li>
									<li>- Con actitud de servicio.</li>
									<li>- Sus valores: honestidad, eficiencia, responsabilidad, humanidad, empatía, iniciativa y respeto.</li>
									<li>- Que posea experiencia previa en <strong>enfermería geriátrica, psicología clínica o fisioterapia (terapia manual)</strong> con mínimo un año de experiencia.</li>
									<li>- Con ganas de seguir aprendiendo y mejorando para ofrecer un continuo mejoramiento en su servicio.</li>
								</ul>
								<div class='row'>
									<div class='col-md-2'>
										<img src='images/vitality-mail.png' class='img-responsive' style='width: 70px;margin-bottom: 0px;margin-top: 18px;margin-left: 22px;'>
									</div>
									<div class='col-md-10'>
										<br>
										<p>Mándanos tu curriculum a contacto@vitalitymexico.com, para agendar una entrevista.</p>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
	<br>

	<div class='gtco-section-overflow'>

		<div class='gtco-section' id='gtco-services' data-section='services'>
			<div class='gtco-container'>
				<div class='clearfix visible-lg-block visible-md-block'></div>
				<div class='clearfix visible-sm-block'></div>
				<div class='col-md-3' ></div>
				<div class='col-md-6 animate-box' data-animate-effect='fadeIn'>
				
				<?php
					extract($_POST);
					if(isset($telefono)&& $telefono!='' ){
						$texto="Nombre del aspirante: $nombre<br>".
								"Puesto solicitado: $puesto<br>".
								"Correo electrónico: $correo<br>".
								"Teléfono de contacto: $telefono<br>".
								"Mensaje: $mensaje<br>".
								"";
						correoSendGrid("contacto@vitalitymexico.com", "Formulario_unete", "www.vitalitymexico.com", $texto);
						echo "	<br>
								<br>
								<br>
								<div class='alert alert-success'>
									<button type='button' class='close' data-dismiss='alert'>&times;</button>
									<strong>¡Bien Hecho!</strong> El correo se envió correctamente.
								</div>
						";
					}
					$telefono="";
					unset($telefono);
				?>

					<h3 class='text-center'>Agenda una entrevista</h3>
					<div class='contact-form'><form id='contact-form' method='post' action='' role='form'>
						<div class='form-group'>
							<input required type='text' placeholder='Nombre del aspirante' class='form-control' name='nombre'>
						</div>
						<div class='form-group'>
							<input required type='text' placeholder='Puesto solicitado' class='form-control' name='puesto'>
						</div>
						<div class='form-group'>
							<input required type='email' placeholder='Correo electrónico' class='form-control' name='correo'>
						</div>
						<div class='form-group'>
							<input required type='text' placeholder='Teléfono de contacto'  pattern='[0-9]+(\.[0-9]{0,2})?' class='form-control' name='telefono'>
						</div>
						<div class='form-group'>
							<textarea rows='6' placeholder='Mensaje' class='form-control' name='mensaje'></textarea>    
						</div>

						<div class='form-group'>
						<input type='submit' class='btn btn-default btn-send' value='Enviar'>
						</div>                      

					</form></div>
				</div>
				<div class='col-md-3' ></div>
			</div>
		</div>

	</div>

	<br>
	<br>
	<?php footer("aviso-de-privacidad-vitality.pdf"); ?>
	</div>
	</body>
</html>

