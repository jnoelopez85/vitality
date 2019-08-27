<?php
	error_reporting(0);
	function eTag(){
		$file = $_SERVER[SCRIPT_FILENAME];
		//$file = (basename($file));
		$last_modified_time = filemtime($file);
		$etag = md5_file($file); 

		header("Last-Modified: ".gmdate("D, d M Y H:i:s", $last_modified_time)." GMT"); 
		header("Etag: $etag"); 

		if (@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == $last_modified_time || @trim($_SERVER['HTTP_IF_NONE_MATCH']) == $etag) { 
				header("HTTP/1.1 304 Not Modified"); 
				exit; 
			}
	}
	
	function cabeceras($titulo,$descripcion,$claves,$img){
		eTag();
		$dominio="http://".$_SERVER["HTTP_HOST"]."/";
		$img=$dominio.$img;
		$url="http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
		echo"
			<meta charset='utf-8'>
			<meta http-equiv='X-UA-Compatible' content='IE=edge'>
			<link rel='shortcut icon' href='images/vitality.ico'/>
			<meta http-equiv='expires' content='86400'/>
			
			<title>$titulo</title>
			<meta name='viewport' content='width=device-width, initial-scale=1'>
			<meta name='description' content='$descripcion' />
			<meta name='keywords' content='$claves' />
			<meta name='author' content='$dominio' />

			<meta property='og:title' content='$titulo' />
			<meta property='og:image' content='$img' />
			<meta property='og:type' content='website' /> 
			<meta property='og:url' content='$url' />
			<meta property='og:site_name' content='$dominio' />
			<meta property='og:description' content='$descripcion' />
			
			<meta name='twitter:title' content='$titulo' />
			<meta name='twitter:image' content='$img' />
			<meta name='twitter:url' content='$url' />
			<meta name='twitter:card' content='$dominio' />
		";
	}
	
	function analitycs(){
		echo"
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-94094662-1', 'auto');
		  ga('send', 'pageview');

		</script>
		";
	}
	
	function facebook_pixel(){
		echo"
			<!-- Facebook Pixel Code -->
				<script>
					!function(f,b,e,v,n,t,s)
					{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
					n.callMethod.apply(n,arguments):n.queue.push(arguments)};
					if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
					n.queue=[];t=b.createElement(e);t.async=!0;
					t.src=v;s=b.getElementsByTagName(e)[0];
					s.parentNode.insertBefore(t,s)}(window,document,'script',
					'https://connect.facebook.net/en_US/fbevents.js');
					 fbq('init', '1944563072445890'); 
					fbq('track', 'PageView');
				</script>
				<noscript>
					 <img height='1' width='1' 
					src='https://www.facebook.com/tr?id=1944563072445890&ev=PageView
					&noscript=1'/>
				</noscript>
			<!-- End Facebook Pixel Code -->
		";
	}
	
	function estilos_scripts($ruta){
		facebook_pixel();
		printf("<link rel='stylesheet' href='%scss/animate.css'>",$ruta);
		printf("<link rel='stylesheet' href='%scss/icomoon.css'>",$ruta);
		printf("<link rel='stylesheet' href='%scss/themify-icons.css'>",$ruta);
		printf("<link rel='stylesheet' href='%scss/bootstrap.css'>",$ruta);
		printf("<link rel='stylesheet' href='%scss/bootstrap.min.css'>",$ruta);
		printf("<link rel='stylesheet' href='%scss/magnific-popup.css'>",$ruta);
		printf("<link rel='stylesheet' href='%scss/owl.carousel.min.css'>",$ruta);
		printf("<link rel='stylesheet' href='%scss/owl.theme.default.min.css'>",$ruta);
		printf("<link rel='stylesheet' href='%scss/style.css'>",$ruta);
		printf("<link rel='stylesheet' href='%scarusel/carusel.css'>",$ruta);

		printf("<script src='%sjs/modernizr-2.6.2.min.js'></script>",$ruta);
		printf("<script src='%sjs/jquery.min.js'></script>",$ruta);
		printf("<script src='%sjs/jquery.easing.1.3.js'></script>",$ruta);
		printf("<script src='%sjs/bootstrap.min.js'></script>",$ruta);
		printf("<script src='%sjs/jquery.waypoints.min.js'></script>",$ruta);
		printf("<script src='%sjs/owl.carousel.min.js'></script>",$ruta);
		printf("<script src='%sjs/jquery.countTo.js'></script>",$ruta);
		printf("<script src='%sjs/jquery.magnific-popup.min.js'></script>",$ruta);
		printf("<script src='%sjs/magnific-popup-options.js'></script>",$ruta);
		printf("<script src='%sjs/main.js'></script>",$ruta);
		printf("<script src='%scarusel/carusel.js'></script>",$ruta);
	}
	
	function flecha_arriba(){
		echo"
			<div class='gototop js-top'>
				<a href='#' class='js-gotop'><i class='icon-arrow-up'></i></a>
			</div>
			<div class='gtco-loader'></div>
		";
	}
	
	function menu($numero){
		
		if($numero==1){
			echo "
				<nav class='gtco-nav' role='navigation'>
					<div class='gtco-container'>
						<div class='row'>
							<div class='col-sm-2 col-xs-6'>
								<div id='gtco-logo'><a href='index.php' title='Ir a HOME'><img src='images/LogoVitalityhorizontalslogan.png' alt='Logo vitalitymexico' class='img-responsive'></a></div>
							</div>
							<div class='col-xs-10 text-right menu-1 main-nav'>
								<ul>
									<li><a style='color: #836fa8;' href='index.php' class='external' title='Inicio | Enfermería adulto mayor en Mérida' >HOME</a></li>
									<li><a href='quienes-somos.php' class='external' title='Nuestra historia, misión y visión'>¿QUIÉNES SOMOS?</a></li>
									<li><a href='nuestros-servicios.php' class='external' title='Variedad de servicios y compromiso'>NUESTROS SERVICIOS</a></li>
									<li><a href='unete-a-nosotros.php' class='external' title='Bolsa de trabajo y vacantes Vitality'>ÚNETE</a></li>
									<li><a href='de-interes-vitality.php' class='external' title='Eventos, promociones a través de facebook'>DE INTERÉS</a></li>
									<li><a href='contacto-vitality.php' class='external' title='Cotizaciones, mensajes y sugerencias'>CONTACTO</a></li>
									<li><a target='_blank' href='kids/' class='external' title='Servicio a domicilio para niños en Mérida'>NIÑOS</a></li>
								</ul>
							</div>
						</div>
						
					</div>
				</nav>
			";
		}else if($numero==2){
			echo "
				<nav class='gtco-nav' role='navigation'>
					<div class='gtco-container'>
						<div class='row'>
							<div class='col-sm-2 col-xs-6'>
								<div id='gtco-logo'><a href='index.php' title='Ir a HOME'><img src='images/LogoVitalityhorizontalslogan.png' alt='Logo vitalitymexico' class='img-responsive'></a></div>
							</div>
							<div class='col-xs-10 text-right menu-1 main-nav'>
								<ul>
									<li><a href='index.php' class='external' title='Inicio | Enfermería adulto mayor en Mérida' >HOME</a></li>
									<li><a style='color: #836fa8;' href='quienes-somos.php' class='external' title='Nuestra historia, misión y visión'>¿QUIÉNES SOMOS?</a></li>
									<li><a href='nuestros-servicios.php' class='external' title='Variedad de servicios y compromiso'>NUESTROS SERVICIOS</a></li>
									<li><a href='unete-a-nosotros.php' class='external' title='Bolsa de trabajo y vacantes Vitality'>ÚNETE</a></li>
									<li><a href='de-interes-vitality.php' class='external' title='Eventos, promociones a través de facebook'>DE INTERÉS</a></li>
									<li><a href='contacto-vitality.php' class='external' title='Cotizaciones, mensajes y sugerencias'>CONTACTO</a></li>
									<li><a target='_blank' href='kids/' class='external' title='Servicio a domicilio para niños en Mérida'>NIÑOS</a></li>
								</ul>
							</div>
						</div>
						
					</div>
				</nav>
			";
		} else if($numero==3){
			echo "
				<nav class='gtco-nav' role='navigation'>
					<div class='gtco-container'>
						<div class='row'>
							<div class='col-sm-2 col-xs-6'>
								<div id='gtco-logo'><a href='index.php' title='Ir a HOME'><img src='images/LogoVitalityhorizontalslogan.png' alt='Logo vitalitymexico' class='img-responsive'></a></div>
							</div>
							<div class='col-xs-10 text-right menu-1 main-nav'>
								<ul>
									<li><a href='index.php' class='external' title='Inicio | Enfermería adulto mayor en Mérida' >HOME</a></li>
									<li><a href='quienes-somos.php' class='external' title='Nuestra historia, misión y visión'>¿QUIÉNES SOMOS?</a></li>
									<li><a style='color: #836fa8;' href='nuestros-servicios.php' class='external' title='Variedad de servicios y compromiso'>NUESTROS SERVICIOS</a></li>
									<li><a href='unete-a-nosotros.php' class='external' title='Bolsa de trabajo y vacantes Vitality'>ÚNETE</a></li>
									<li><a href='de-interes-vitality.php' class='external' title='Eventos, promociones a través de facebook'>DE INTERÉS</a></li>
									<li><a href='contacto-vitality.php' class='external' title='Cotizaciones, mensajes y sugerencias'>CONTACTO</a></li>
									<li><a target='_blank' href='kids/' class='external' title='Servicio a domicilio para niños en Mérida'>NIÑOS</a></li>
								</ul>
							</div>
						</div>
						
					</div>
				</nav>
			";
		} else if($numero==4){
			echo "
				<nav class='gtco-nav' role='navigation'>
					<div class='gtco-container'>
						<div class='row'>
							<div class='col-sm-2 col-xs-6'>
								<div id='gtco-logo'><a href='index.php' title='Ir a HOME'><img src='images/LogoVitalityhorizontalslogan.png' alt='Logo vitalitymexico' class='img-responsive'></a></div>
							</div>
							<div class='col-xs-10 text-right menu-1 main-nav'>
								<ul>
									<li><a href='index.php' class='external' title='Inicio | Enfermería adulto mayor en Mérida' >HOME</a></li>
									<li><a href='quienes-somos.php' class='external' title='Nuestra historia, misión y visión'>¿QUIÉNES SOMOS?</a></li>
									<li><a href='nuestros-servicios.php' class='external' title='Variedad de servicios y compromiso'>NUESTROS SERVICIOS</a></li>
									<li><a style='color: #836fa8;' href='unete-a-nosotros.php' class='external' title='Bolsa de trabajo y vacantes Vitality'>ÚNETE</a></li>
									<li><a href='de-interes-vitality.php' class='external' title='Eventos, promociones a través de facebook'>DE INTERÉS</a></li>
									<li><a href='contacto-vitality.php' class='external' title='Cotizaciones, mensajes y sugerencias'>CONTACTO</a></li>
									<li><a target='_blank' href='kids/' class='external' title='Servicio a domicilio para niños en Mérida'>NIÑOS</a></li>
								</ul>
							</div>
						</div>
						
					</div>
				</nav>
			";
		} else if($numero==5){
			echo "
				<nav class='gtco-nav' role='navigation'>
					<div class='gtco-container'>
						<div class='row'>
							<div class='col-sm-2 col-xs-6'>
								<div id='gtco-logo'><a href='index.php' title='Ir a HOME'><img src='images/LogoVitalityhorizontalslogan.png' alt='Logo vitalitymexico' class='img-responsive'></a></div>
							</div>
							<div class='col-xs-10 text-right menu-1 main-nav'>
								<ul>
									<li><a href='index.php' class='external' title='Inicio | Enfermería adulto mayor en Mérida' >HOME</a></li>
									<li><a href='quienes-somos.php' class='external' title='Nuestra historia, misión y visión'>¿QUIÉNES SOMOS?</a></li>
									<li><a href='nuestros-servicios.php' class='external' title='Variedad de servicios y compromiso'>NUESTROS SERVICIOS</a></li>
									<li><a href='unete-a-nosotros.php' class='external' title='Bolsa de trabajo y vacantes Vitality'>ÚNETE</a></li>
									<li><a style='color: #836fa8;' href='de-interes-vitality.php' class='external' title='Eventos, promociones a través de facebook'>DE INTERÉS</a></li>
									<li><a href='contacto-vitality.php' class='external' title='Cotizaciones, mensajes y sugerencias'>CONTACTO</a></li>
									<li><a target='_blank' href='kids/' class='external' title='Servicio a domicilio para niños en Mérida'>NIÑOS</a></li>
								</ul>
							</div>
						</div>
						
					</div>
				</nav>
			";
		} else if($numero==6){
			echo "
				<nav class='gtco-nav' role='navigation'>
					<div class='gtco-container'>
						<div class='row'>
							<div class='col-sm-2 col-xs-6'>
								<div id='gtco-logo'><a href='index.php' title='Ir a HOME'><img src='images/LogoVitalityhorizontalslogan.png' alt='Logo vitalitymexico' class='img-responsive'></a></div>
							</div>
							<div class='col-xs-10 text-right menu-1 main-nav'>
								<ul>
									<li><a href='index.php' class='external' title='Inicio | Enfermería adulto mayor en Mérida' >HOME</a></li>
									<li><a href='quienes-somos.php' class='external' title='Nuestra historia, misión y visión'>¿QUIÉNES SOMOS?</a></li>
									<li><a href='nuestros-servicios.php' class='external' title='Variedad de servicios y compromiso'>NUESTROS SERVICIOS</a></li>
									<li><a href='unete-a-nosotros.php' class='external' title='Bolsa de trabajo y vacantes Vitality'>ÚNETE</a></li>
									<li><a href='de-interes-vitality.php' class='external' title='Eventos, promociones a través de facebook'>DE INTERÉS</a></li>
									<li><a style='color: #836fa8;' href='contacto-vitality.php' class='external' title='Cotizaciones, mensajes y sugerencias'>CONTACTO</a></li>
									<li><a target='_blank' href='kids/' class='external' title='Servicio a domicilio para niños en Mérida'>NIÑOS</a></li>
								</ul>
							</div>
						</div>
						
					</div>
				</nav>
			";
		}else if($numero==7){
			echo "
				<nav class='gtco-nav' role='navigation'>
					<div class='gtco-container'>
						<div class='row'>
							<div class='col-sm-2 col-xs-6'>
								<div id='gtco-logo'><a href='index.php' title='Ir a HOME'><img src='../images/imgkids/logovitalitykids-01.png' alt='Logo vitalitymexico Kids' class='img-responsive'></a></div>
							</div>
							<div class='col-xs-10 text-right menu-1 main-nav'>
								<ul>
									<li><a href='../index.php' class='external' title='Inicio | Enfermería adulto mayor en Mérida' >HOME</a></li>
									<li><a href='../quienes-somos.php' class='external' title='Nuestra historia, misión y visión'>¿QUIÉNES SOMOS?</a></li>
									<li><a href='../nuestros-servicios.php' class='external' title='Variedad de servicios y compromiso'>NUESTROS SERVICIOS</a></li>
									<li><a href='../unete-a-nosotros.php' class='external' title='Bolsa de trabajo y vacantes Vitality'>ÚNETE</a></li>
									<li><a href='../de-interes-vitality.php' class='external' title='Eventos, promociones a través de facebook'>DE INTERÉS</a></li>
									<li><a href='../contacto-vitality.php' class='external' title='Cotizaciones, mensajes y sugerencias'>CONTACTO</a></li>
									<li><a style='color: #836fa8;' href='index.php' class='external' title='Servicio a domicilio para niños en Mérida'>NIÑOS</a></li>
								</ul>
							</div>
						</div>
						
					</div>
				</nav>
			";
		}
		echo "<main role='main'>";
	}
	
	function slider($imagen, $active){
		if ($active=="1"){
			$active="active";
		}else{
			$active="";
		}
		
		echo "
			<div class='item $active'>
				<img src='$imagen' alt='Agencia de cuidado integral de la salud'>
				<div class='slide-text slide_style_center'>
					<h1>Agencia de cuidado integral de la salud</h1>
							<br><a href='nuestros-servicios.php' title='Servicios y compromiso con el adulto mayor' class='btn btn-primary btn-lg'>Conócenos</a>
					<div class='main-nav'> 
						<a href='#' data-nav-section='conocenos_vitality'><img src='images/flecha.png' title='Ir abajo y continuar leyendo' alt='flecha Ir abajo y continuar leyendo' style='width: 80px;'></a>
					</div>
				</div>
			</div>
		";
	}
	
	function slider_simple($imagen){
		echo "
			<div class='item active'>
				<img src='$imagen' alt='Agencia de cuidado integral de la salud KIDS'>
			</div>
		";
	}

	function footer($aviso_path){
		$anno=date(Y);
		echo"	
			</main>
				<footer id='gtco-footer' role='contentinfo' style='background-color: #ddd;'>
					<div class='gtco-container'>
						
						<div class='row copyright'>
							<div class='col-md-12'>
								<div class='pull-right'>
									<ul class='gtco-social-icons pull-right'>
										<li><a title='Síguenos en Facebook' href='https://www.facebook.com/Vitalitymexico/'><i class='icon-facebook'></i></a></li>
										<li><a title='Síguenos en nuestro blog WordPress' href='https://vitalitymexico.wordpress.com'><i class='icon-globe'></i></a></li>
										<li><a title='Síguenos en Instagram' href='https://www.instagram.com/vitalitymexico/'><i class='icon-instagram'></i></a></li>
									</ul>
								</div>
							</div>
							<br>
							<div class='col-md-6'>
								<div class='text-center'>
									<i class='icon-home'></i> <b>SUCURSAL MÉRIDA</b>
									<small class='block'>C 20 No. 300A por 11 y 13 Cámara de Comercio Norte </small>
									<small class='block'>Tel: 999.9432974 Celular: 999.2285419</small>
								</div>
							</div>
							
							<div class='col-md-6'>
								<div class='text-center'>
									<i class='icon-home'></i> <b>SUCURSAL CAMPECHE</b>
									<small class='block'>Celular: 999.2285419</small>
								</div>
							</div>
							
							<div class='col-md-12'>
								<div class='text-center'>
									<small class='block'><a href='$aviso_path'  target='_blank' >Aviso de privacidad | </a>
										<a href='http://www.vitalitymexico.com/' target='_blank'>VitalityMexico.com &copy; $anno </a> 
									</small>
								</div>
							</div>
						</div>

					</div>
				</footer>
		";
		//echo" <script async='1' type='text/javascript' src='//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5919cf14af64f579'></script>";
		analitycs();
	}
	function footer_kids($aviso_path){
		$anno=date(Y);
		echo"	
			</main>
				<footer id='gtco-footer' role='contentinfo' style='background-color: #ddd;'>
					<div class='gtco-container'>
						
						<div class='row copyright'>
							<div class='col-md-12'>
								<div class='pull-right'>
									<ul class='gtco-social-icons pull-right'>
										<li><a title='Síguenos en Facebook' href='https://www.facebook.com/Vitalitymexico/'><i class='icon-facebook'></i></a></li>
										<li><a title='Síguenos en nuestro blog WordPress' href='https://vitalitymexico.wordpress.com'><i class='icon-globe'></i></a></li>
										<li><a title='Síguenos en Instagram' href='https://www.instagram.com/vitalitymexico/'><i class='icon-instagram'></i></a></li>
									</ul>
								</div>
							</div>
							<br>
							<div class='col-md-12'>
								<div class='text-center'>
									<i class='icon-home'></i> <b>SUCURSAL MÉRIDA</b>
									<small class='block'>C 20 No. 300A por 11 y 13 Cámara de Comercio Norte </small>
									
								</div>
							</div>

							<div class='col-md-12'>
								<div class='text-center'>
									<small class='block'>Tel: 999.9432974 Celular: 999.2285419 Celular: 999.1695514</small>
								</div>
							</div>
							
							<div class='col-md-12'>
								<div class='pull-left'>
									<small class='block'><a href='$aviso_path'  target='_blank' >Aviso de privacidad | </a>
										<a href='http://www.vitalitymexico.com/' target='_blank'>VitalityMexico.com &copy; $anno </a> 
									</small>
								</div>
							</div>
						</div>

					</div>
				</footer>
		";
		//echo" <script async='1' type='text/javascript' src='//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5919cf14af64f579'></script>";
		analitycs();
	}
?>

