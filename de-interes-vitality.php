<?php require('libvitality.php'); ?>
<!DOCTYPE HTML>
<html lang='es'>
	<head>
		<?php cabeceras("Vitality México | Agencia Geriátrica Mérida Yucatán en Facebook",
						"Síguenos en Facebook para estar al pendiente de nuestras noticias, servicios y promociones",
						"facebook, promociones, servicios, noticias vitality",
						"images/Vitality_Slide_02.jpg"); ?>
		<?php estilos_scripts(); ?>
	</head>
	<body>
		<?php flecha_arriba(); ?>
	
	<div id='page'>
	
	<?php menu(5); ?>
	
	
	<div id='gtco-blog' data-section='blog'>
		<div class='gtco-container'>
			<div class='row'>
				<br>
				<br><br>
				<div class='col-md-6 animate-box' data-animate-effect='fadeIn'>
					<h1 class='text-center'><a href='https://www.facebook.com/Vitalitymexico/'>Síguenos en Facebook</a></h1>
					<br>
					<div class="post-content">
								<div id="fb-root"></div>
								<script>(function(d, s, id) {
								  var js, fjs = d.getElementsByTagName(s)[0];
								  if (d.getElementById(id)) return;
								  js = d.createElement(s); js.id = id;
								  js.async = true;
								  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5";
								  fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));
								</script>
							</div>
							<div class="fb-page" data-href="https://www.facebook.com/VitalityMexico/" data-tabs="timeline" data-width="500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/VitalityMexico/"><a href="https://www.facebook.com/VitalityMexico/">Vitality México</a></blockquote></div></div>
				</div>
				
				<div class='col-md-6 animate-box' data-animate-effect='fadeIn'>
					<!-- <img src="images/logotipo-vertical-vitality.png" class="img-responsive"> -->
					<h1 class='text-center'><a href='https://vitalitymexico.wordpress.com/'>Síguenos en el Blog</a></h1>
						<br>
						<iframe  width="100%" height="500" seamless="seamless" frameborder='0' class="embed-responsive-item" src="https:///vitalitymexico.wordpress.com"></iframe>
				</div>
				
				<div class='clearfix visible-lg-block visible-md-block'></div>
				<div class='clearfix visible-sm-block'></div>
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

