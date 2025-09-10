
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('reset','style','fonts', 'generic.university',
											 'ui-lightness/jquery-ui-1.8.23.custom','http://fonts.googleapis.com/css?family=Amaranth'));
		echo $this->Html->script(array('jquery-1.8.1.min','jquery-ui-1.8.23.custom.min'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<header>
			<a href="<?php echo $this->base;?>">Sistema de Información</a></br>
        <?php
                    $usr = $this->Session->read("usr");
                    if(isset($usr)){
                        echo $usr."<br/>";
                        echo $this->Html->link("Cerrar Sesión", "/users/salir", array(
                            "style" => "text-decoration:none; color:#FFFFFF;"
                        ));
                    }
                    ?>
		<nav>
			<ul>
				
				 <li><?php echo $this->Html->link('Usuarios', array('controller'=>'usuarios', 'action'=>'index'));?></li>
				
			</ul>
		</nav>
	</header>
	<div class="wrapper_all">
	<section class="content_left">
		<section id="render">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</section>
		<section id="video"></section>
		<section id="noticia-principal"></section>
	</section>
	<section class="content_right">
		<aside id="podcast-rel">
		</aside>
		<aside id="noticias-rel"><?php echo $this->element("latest");?></aside>
	</section>
	</div>
	<footer>
	</footer>
	<?php echo $this->element('sql_dump'); ?>
	<?php echo $this->Js->writeBuffer(); // Write cached scripts ?>
</body>
</html>
