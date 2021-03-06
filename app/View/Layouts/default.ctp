<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$appDescription = __d('app_dev', 'Proyecto Sin Techo');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
	<!--<![endif]-->
<html>
	<head>
		<?php echo $this -> Html -> charset(); ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title> <?php echo $appDescription ?>:
			<?php echo $title_for_layout; ?>
		</title>
		<meta name="description" content="Proyecto Final de la Carrera Ingeniería en Sistemas de Información. Alumnos: María Celeste Weidmann y Alejandro Esteban Prieto.">
		<meta name="viewport" content="width=device-width">
		<style>
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
		</style>
		<?php
		echo $this -> Html -> meta('icon');
		echo $this -> fetch('meta');
		# Estilos
		echo $this -> Html -> css(array('bootstrap', 'bootstrap-responsive', 'main', 'default'));
		echo $this -> fetch('css');
		# Modernizr
		echo $this -> Html -> script('vendor/modernizr-2.6.1-respond-1.1.0.min');
		?>
	</head>
	<body>
		<!--[if lt IE 7]>
		<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
		<![endif]-->

		<!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
					<!-- <a class="brand" href="#">Trama Tierra</a> -->
					<?=$this -> Html -> image('nube.png', array('class' => 'brand')); ?>
					<?=$this -> Html -> link('Proyecto Sin Techo', '/', array('class' => 'brand')) ?>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li <?=($this -> request -> controller == 'pages' && $this -> request -> action == 'display' && $this -> request -> pass[0] == 'inicio') ? 'class="active"' : 'class=""' ?>>
								<?=$this -> Html -> link('Inicio', '/') ?>
							</li>
							<li>
								<a href="#about">Acerca de</a>
							</li>
							<li>
								<a href="#contact">Contacto</a>
							</li>
							<!-- 			Menú Ejes				 -->
							<li <?=($this -> request -> controller == 'secciones') ? 'class="dropdown active"' : 'class="dropdown"' ?>> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ejes <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li>
										<?=$this -> Html -> link('Agua', array('controller' => 'secciones', 'action' => 'view', 2)) ?>
									</li>
									<li>
										<?=$this -> Html -> link('Cultura libre', array('controller' => 'secciones', 'action' => 'view', 4)) ?>
									</li>
									<li class="dropdown-submenu">
										<?=$this -> Html -> link('Energia', array('controller' => 'secciones', 'action' => 'view', 3)) ?>
										<ul class="dropdown-menu">
											<li>
												<?=$this -> Html -> link('Renovables', array('controller' => 'areas', 'action' => 'view', 1)) ?>
											</li>
											<li>
												<?=$this -> Html -> link('Modelo energético', array('controller' => 'areas', 'action' => 'view', 2)) ?>
											</li>
										</ul>
									</li>
									<li>
										<?=$this -> Html -> link('Género', array('controller' => 'secciones', 'action' => 'view', 5)) ?>
									</li>
									<li>
										<?=$this -> Html -> link('Gestión de residuos', array('controller' => 'secciones', 'action' => 'view', 6)) ?>
									</li>
									<li>
										<?=$this -> Html -> link('Soberanía Alimentarias', array('controller' => 'secciones', 'action' => 'view', 7)) ?>
									</li>
									<!--
									<li class="divider"></li>
									<li class="nav-header">Nav header</li>
									<li><a href="#">Separated link</a></li>
									<li><a href="#">One more separated link</a></li>
									-->
								</ul>
							</li><!-- 			Fin Menú Ejes				 -->
							<!-- 			Menú Admin				 -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li>
										<?=$this -> Html -> link('Agregar Multimedia', array('controller' => 'multimedia', 'action' => 'agregar')) ?>
									</li>
									<li>
										<?=$this -> Html -> link('Agregar Evento', array('controller' => 'eventos', 'action' => 'agregar')) ?>
									</li>
									<!--
									<li class="divider"></li>
									<li class="nav-header">Nav header</li>
									<li><a href="#">Separated link</a></li>
									<li><a href="#">One more separated link</a></li>
									-->
								</ul>
							</li><!-- 			Fin Menú Admin				 -->
						</ul>

						<form class="navbar-form pull-right">
							<input class="span2" type="text" placeholder="Usuario">
							<input class="span2" type="password" placeholder="Contraseña">
							<button type="submit" class="btn">
								Ingresar
							</button>
						</form>

					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
		<div class="container">
			<!-- <div id="header">
			<h1><?php echo $this -> Html -> link($appDescription, 'http://proyectosintecho.com.ar'); ?></h1>
			</div> -->
			<!-- 			<div id="content"> -->

			<?php echo $this -> Session -> flash(); ?>

			<?php echo $this -> fetch('content'); ?>
			<!-- 			</div> -->
			<hr />
			<footer>
				<div class="row">
					<div class="span4">
						<dl>
							<dt>
								Desarrolladores
							</dt>
							<dd>
								<i class="icon-user"></i> María Celeste Weidmann
							</dd>
							<dd>
								<i class="icon-user"></i> Alejandro Esteban Prieto
							</dd>
						</dl>
					</div>
					<div class="span4">
						<dl>
							<dt>
								Institución
							</dt>
							<dd>
								<i class="icon-map-marker"></i> Universidad Tecnológica Nacional
							</dd>
							<dd>
								<i class="icon-map-marker"></i> Facultad Regional Santa Fe
							</dd>
							<dd>
								<i class="icon-map-marker"></i> Ingeniería en Sistemas de Información
							</dd>
						</dl>
					</div>
					<div class="span4">
						<dl>
							<dt>
								Colaboradores
							</dt>
							<dd>
								<i class="icon-thumbs-up"></i> Laboratorio de Conectividad (UTN FRSF)
							</dd>
							<dd>
								<i class="icon-thumbs-up"></i> Cooperativa Colectivo Libre Ltda.
							</dd>
						</dl>
					</div>
				</div>
				<div class="row">
					<div id="licencia" class="span12">
						<p>
							<?php echo $this -> Html -> link($this -> Html -> image('copyleft_30.png', array('alt' => $appDescription, 'border' => '0', 'id' => 'copyleft')), 'http://www.proyectosintecho.com.ar/', array('target' => '_blank', 'escape' => false)); ?>
							Copyleft 2012. Sistema desarrollado completamente con Software Libre y respetando los estándares internacionales.
						</p>
						<p>
							<a href="http://creativecommons.org/licenses/by/3.0/" rel="license"><img alt="Licencia Creative Commons" src="http://i.creativecommons.org/l/by/3.0/88x31.png" /></a>
							El contenido de esta web est&aacute; sujeto a una licencia de Creative Commons si no se indica lo contrario.
							<a href="http://proyectosintecho.com.ar" rel="source">ProyectoSinTecho.com.ar</a> es realizado por <a cc="http://creativecommons.org/ns#" href="http://proyectosintecho.com.ar" property="attributionName" rel="attributionURL">María Celeste Weidmann y Alejandro Esteban Prieto</a> y se encuentra bajo una Licencia <a href="http://creativecommons.org/licenses/by/3.0/" rel="license">Creative Commons Atribuci&oacute;n 3.0 Unported</a>.
							Basada en la obra <a dct="http://purl.org/dc/terms/" href="http://proyectosintecho.com.ar" rel="source">proyectosintecho.com.ar</a>.
							Permisos que vayan m&aacute;s all&aacute; de lo cubierto por esta licencia pueden encontrarse en <a cc="http://creativecommons.org/ns#" href="http://proyectosintecho.com.ar" rel="morePermissions">http://proyectosintecho.com.ar/licencia</a>
						</p>
					</div>
				</div>
			</footer>
		</div><!-- /container -->
		<!-- <div class="navbar navbar-inverse navbar-fixed-bottom">
		<div class="navbar-inner">
		<div class="container">
		<?php echo $this -> Html -> link($this -> Html -> image('copyleft_30.png', array('alt' => $appDescription, 'border' => '0', 'id' => 'layout_nube')), 'http://www.proyectosintecho.com.ar/', array('target' => '_blank', 'escape' => false)); ?>
		<span>Proyecto Final de Carrera :: María Celeste Weidmann y Alejandro Esteban Prieto.</span>
		</div>
		</div>
		</div> -->

		<?php echo $this -> element('sql_dump'); ?>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script>
			window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')
		</script>
		<?php echo $this -> Html -> script(array('vendor/bootstrap.min', 'plugins', 'main')); ?>
		<?php echo $this -> fetch('script'); ?>
		<script>
			var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
			( function(d, t) {
					var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
					g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
					s.parentNode.insertBefore(g, s)
				}(document, 'script'));
		</script>
		<?php //echo $this -> Js -> writeBuffer(); ?>
	</body>
</html>
