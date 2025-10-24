<?php
$cakeDescription = __d('cake_dev', 'Aplicativo APS - Pasto');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $this->Html->charset(); ?>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>APS - Ficha Familiar</title>


    <?php

    echo $this->Html->meta('icon');



    echo $this->Html->css(array('cake.generic.css', 'bootstrap.min.css'));
    echo $this->Html->script(array('jquery.min',  'bootstrap.min', 'jquery.dataTables.min'));
    echo $this->fetch('css');
    echo $this->fetch('script');      
    // Enlaza el archivo JavaScript desde la carpeta webroot/js
    echo $this->Html->script('validationSocioAmbiental'); // 'validation' es el nombre del archivo sin la extensión .js
  
    ?>

    <!-- Bootstrap and jQuery dependencies for modal functionality -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">

    <!-- JavaScript de jQuery y DataTables -->

    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

    <!-- Choices.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>


    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker"></script>



 








</head>

<body>


    <div class="contanier">
        <div style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
            <?php echo $this->element('nav'); ?>
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>



        </div>

        <input type="checkbox" id="btn-menu">
        <div class="container-menu" style="  z-index: 1000;">
            <div class="cont-menu" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                <nav>


                    <?php echo $this->Html->link(('Agregar Nueva vivienda'), array('controller' => 'Sociambientals', 'action' => 'add'), array('class' => 'nav-link', 'style' => 'color: white;')); ?>
                    <?php echo $this->Html->link(('Agregar novedad'), array('controller' => 'visitasnegadas', 'action' => 'add'), array('class' => 'nav-link', 'style' => 'color: white;')); ?>
                    <?php echo $this->Html->link(('Registros Familias'), array('controller' => 'sociambientals', 'action' => 'index'), array('class' => 'nav-link', 'style' => 'color: white;')); ?>
                    <?php echo $this->Html->link(('Canalizaciones'), array('controller' => 'canalizacions', 'action' => 'index'), array('class' => 'nav-link', 'style' => 'color: white;')); ?>
                    <?php echo $this->Html->link(('Registros Primera Infancia'), array('controller' => 'primerainfancias', 'action' => 'index'), array('class' => 'nav-link', 'style' => 'color: white;')); ?>
                    <?php echo $this->Html->link(('Registros Infancia'), array('controller' => 'infantils', 'action' => 'index'), array('class' => 'nav-link', 'style' => 'color: white;')); ?>
                    <?php echo $this->Html->link(('Registros Adolescencia'), array('controller' => 'adolescencias', 'action' => 'index'), array('class' => 'nav-link', 'style' => 'color: white;')); ?>
                    <?php echo $this->Html->link(('Registros Mayores 18'), array('controller' => 'juventudadultos', 'action' => 'index'), array('class' => 'nav-link', 'style' => 'color: white;')); ?>

                    <?php echo $this->Html->link(('Registros Novedades'), array('controller' => 'Visitasnegadas', 'action' => 'index'), array('class' => 'nav-link', 'style' => 'color: white;')); ?>
                    <a style="color: white;">Usuario: <?= $usr = $this->Session->read("usr");
                                                        echo $this->Html->link("Cerrar Sesión", "/users/salir", array('style' => 'color: white;'));
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
        ?-->
    </div>
    <!--?php echo $this->element('sql_dump'); ?-->

    </div>

</body>


<footer class="form-group col-sm-12">


    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <div class="copyright">&copy; Gestión de la Salud Publica. Versión 1.0 - 2023 <a
                    href="https://www.saludpasto.gov.co/">Secretaria Municipal de Salud</a>.</div>
        </div>
    </div>

</footer>

</html>