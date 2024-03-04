<?php

/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
// $cakeDescription = __d('cake_dev', 'Ciudad Bienestar: Sistema de Información');
// $cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());
$cakeDescription = 'Ciudad Bienestar: Sistema de Información';
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SICB - PIC - 2020</title>

    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $title_for_layout; ?>
    </title>
    <?php
    echo $this->Html->meta('icon');

    //echo $this->Html->css(array('style','cover.css','bootstrap.min.css','bootstrap-theme.min.css'));
    echo $this->Html->css(array('bootstrap.min.css', 'bootstrap-theme.css', 'sb-admin-2.css', 'font-awesome.min.css', 'metisMenu.min.css', 'css.css', 'stylepage.css', 'responsive.css', 'colors.css', 'tech.css'));
    //echo $this->Html->script(array('bootstrap.min','jquery.min'));
    // echo $this->Html->script(array());
    echo $this->Html->script(array('jquery-1.11.0', 'jquery', 'jquery.min', 'docs.min', 'metisMenu.min', 'sb-admin-2', 'bootstrap.min', 'raphael-min', 'build-svgs', 'tether.min', 'custom'));

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    echo $this->fetch('js');
    ?>

</head>

<!--body class="bs-docs-home"-->

<body>

    <div id="wrapper">

        <?php echo $this->element('nav'); ?>

        <?php echo $this->element('nav_vertical'); ?>

        <?php echo $this->Session->flash(); ?>
        <?php echo $this->fetch('content'); ?>


    </div>
    <!-- /#wrapper -->

</body>


<footer class="footer" style="
    background-color: #e2e1e1;">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="widget">
                    <div class="footer-text text-left">
                        <a href="https://www.ciudadbienestar.gov.co/"><img src="../img/logo.png" alt="" class="img-fluid"></a>
                        <p>Plan de salud publica de intervenciones colectivas</br> Estrategia de Movilización Social Ciudad Bienestar</p>
                        <div class="social">
                            <a href="https://www.facebook.com/ciudadbienestarpasto" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i> <img src="../img/facebook.png" alt="" width="25px" height="25px"></i></a>
                            <a href="https://twitter.com/cuidadbienestar" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i><img src="../img/twitter.png" alt="" width="25px" height="25px"></i></a>
                            <a href="https://www.youtube.com/channel/UCkpnph2Lyb9DusMnwDkC9OQ" data-toggle="tooltip" data-placement="bottom" title="youtube"><i><img src="../img/youtube.png" alt="" width="25px" height="25px"></i></a>

                        </div>

                        <hr class="invis">


                    </div><!-- end footer-text -->
                </div><!-- end widget -->
            </div><!-- end col -->


            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <h2 class="widget-title">Salud Publica</h2>
                    <div class="link-widget">
                        <ul>
                            <li><a href="https://www.ciudadbienestar.gov.co/">Ciudad bienestar</a></li>
                            <li><a href="http://138.0.91.230/moodle/">Aula Virtual</a></li>
                            <li><a href="https://www.youtube.com/channel/UCkpnph2Lyb9DusMnwDkC9OQ">Canal ciudad bienestar</a></li>
                            <li><a href="https://www.saludpasto.gov.co/">Secretaría de Salud</a></li>
                            <li><a href="https://www.pasto.gov.co/">Alclida de Pasto</a></li>
                        </ul>
                    </div><!-- end link-widget -->
                </div><!-- end widget -->
            </div><!-- end col -->
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <br>
                <div class="copyright">&copy; Gestión de la Salud Publica. Versión 4.0 - 2020 <a href="https://www.saludpasto.gov.co/">Secretaria Municipal de Salud</a>.</div>
            </div>
        </div>
    </div><!-- end container -->
</footer><!-- end footer -->