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

    ?>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js">
    </script>

    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js">
    </script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>



    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/searchbuilder/1.0.0/css/searchBuilder.dataTables.min.css">

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js">
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/searchbuilder/1.0.0/js/dataTables.searchBuilder.min.js"></script>


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
                    <?php echo $this->Html->link(('Registros familias'), array('controller' => 'familias', 'action' => 'index'), array('class' => 'nav-link', 'style' => 'color: white;')); ?>
                    <?php echo $this->Html->link(('Canalizaciones'), array('controller' => 'canalizacions', 'action' => 'index'), array('class' => 'nav-link', 'style' => 'color: white;')); ?>
                    <?php echo $this->Html->link(('Registros Primera Infancia'), array('controller' => 'primerainfancias', 'action' => 'index'), array('class' => 'nav-link', 'style' => 'color: white;')); ?>
                    <?php echo $this->Html->link(('Registros Infancia'), array('controller' => 'infantils', 'action' => 'index'), array('class' => 'nav-link', 'style' => 'color: white;')); ?>
                    <?php echo $this->Html->link(('Registros Adolescencia'), array('controller' => 'adolescencias', 'action' => 'index'), array('class' => 'nav-link', 'style' => 'color: white;')); ?>
                    <?php echo $this->Html->link(('Registros Mayores 18'), array('controller' => 'juventudadultos', 'action' => 'index'), array('class' => 'nav-link', 'style' => 'color: white;')); ?>
                    <?php echo $this->Html->link(('Registros Socioambiental'), array('controller' => 'sociambientals', 'action' => 'index'), array('class' => 'nav-link', 'style' => 'color: white;')); ?>
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