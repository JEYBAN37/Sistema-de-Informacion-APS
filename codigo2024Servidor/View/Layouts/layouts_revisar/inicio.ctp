<!DOCTYPE html>
<html>
<head>
    <meta http-equiv='X-UA-Compatible' content='IE=8'>
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
				<li><?php echo $this->Html->link('Inicio', array('controller'=>'users', 'action'=>'bienvenida'));?></li>
                <li><?php echo $this->Html->link('Usuarios', array('controller'=>'usuarios', 'action'=>'nuebus'));?></li>                
                <li><?php echo $this->Html->link('Registros', array('controller'=>'usuariosactividades', 'action'=>'index'));?></li>
                <li><?php echo $this->Html->link('Actividades', array('controller'=>'Actividades', 'action'=>'nuebus'));?></li>
                <li><?php echo $this->Html->link('Org.sociales', array('controller'=>'Sociales', 'action'=>'nuebus'));?></li>
                <li><?php echo $this->Html->link('Org. Comunitarias', array('controller'=>'Comunitarios', 'action'=>'nuebus'));?></li>
                <li><?php echo $this->Html->link('Instituciones', array('controller'=>'Publicos', 'action'=>'nuebus'));?></li>
                <li><?php echo $this->Html->link('Ayuda', 'http://ciudadbienestar.gov.co/tutorial/');?></li>
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


		<strong><img src="/basedatos/img/ciudad.png" alt="" ,="" style="
    padding-left: 60px;
    padding-top: 20px;
"></strong></br>
        </br><strong><img src="/basedatos/img/fotosi.gif" alt="",="" style="
    padding-left:20px;

    
"></strong></br>



		<style>
                #mnu a{
                    background-color: #A0A0FF;
                    color: #000000;
                    text-decoration: none;
                }
                
                #mnu a:hover{
                    background-color: #8080BB;
                    /*color: #FFFF00;*/
                    font-weight: bold;
                }
                
                .eMnu{
                    background-color: #8080AA;
                }
                
                .oMnu{
                    background-color: #A0A0FF;
                    font-size: 12px;
                }
            </style>

            <div id="mnu" style="width: 15%; width: 200px; height: 80%; margin-bottom: 50px; background: #8080FF;">

                
                <?php
                $nvl = $this->Session->read("nvl");
                if(isset($nvl)&&($nvl=="A")){
                ?>
                
                <?php
                }
                if(isset($nvl)&&($nvl=="U")){
                ?>
                 
                
                <?php
                }
                ?>
            </div>
	</section>
	</div>
	<footer>
	</footer>
	<?php echo $this->element('sql_dump'); ?>
	<?php echo $this->Js->writeBuffer(); // Write cached scripts ?>
</body>
</html>
