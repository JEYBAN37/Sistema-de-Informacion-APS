<?php

/**
 *
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */
$cakeDescription = __d('cake_dev', 'Aplicativo APS - Pasto');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>

<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('APS - Ficha Familia'); ?>
	</title>
	<?php
	echo $this->Html->meta('icon');


	echo $this->Html->css(array('cake.generic.css'));


	?>

	<!-- Latest compiled and minified CSS -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

</head>

<body>
	<div class="contanier">

		<nav class="row navbar navbar-expand-lg navbar-light" style=" background-color: #3366CC;">


			<label for="btn-menu" style="color: white;  font-size: 30px; padding-left: 15px;  ">☰</label>

			<a class="navbar-brand" href="#">
				<img src="https://tramites.pasto.gov.co/info/pasto_se/media/bloque3.png" alt="">
			</a>

		</nav>

		<div style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>

		<input type="checkbox" id="btn-menu">
		<div class="container-menu">
			<div class="cont-menu" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
				<nav>
					<a>
						<?php echo $this->Html->link(('Agregar Nueva vivienda'), array('controller' => 'Sociambientals', 'action' => 'add'), array('class' => 'nav-link', 'style' => 'color: white;')); ?>
					</a>
					<a>
						<?php echo $this->Html->link(('Registros familias'), array('controller' => 'familias', 'action' => 'index'), array('class' => 'nav-link', 'style' => 'color: white;')); ?>
					</a>

					<a href="#">Registros primera infancia</a>
					<a href="#">Registros infancia</a>
					<a href="#">Registros adolescencia</a>
					<a href="#">Registros mayores 18 años </a>
					<a>Usuario: <?= $usr = $this->Session->read("usr");
								echo $this->Html->link("Cerrar Sesión", "/users/salir", array());
								?> </a>

				</nav>
				<label for="btn-menu" style="color: white;">x
				</label>
			</div>
		</div>
		<!--?php echo $this->Html->link(
			$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
			'http://www.cakephp.org/',
			array('target' => '_blank', 'escape' => false)
		);
		?>
		</div-->


	</div>
	</div>
	</div>

	</div>
</body>

</html>