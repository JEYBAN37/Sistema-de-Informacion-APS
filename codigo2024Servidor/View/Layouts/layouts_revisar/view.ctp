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
$cakeDescription = __d('cake_dev', 'Ciudad Bienestar: Sistema de Información');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $title_for_layout; ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('cake.generic.css');
        //echo $this->Html->css(array('cake.generic.css', 'bootstrap.min.css', 'bootstrap-theme.css', 'theme.css'));
        //echo $this->Html->script(array('jquery.min', 'bootstrap.min', 'docs.min', 'ie10-viewport-bug-workaround'));

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body style="font-size: 70%;">
        <div id="container">
            <div >
                <header>
                    <nav>
                        <ul>
                            <li><?php
                                echo $this->Html->link("Inicio", "/users/bienvenida", array(
                                ));
                                ?></li>
                            <li  style= "text-decoration:none; color:#FFFF00;"><?php
                                $usr = $this->Session->read("usr");
                                if (isset($usr)) {
                                    echo $this->Html->link("Cerrar Sesión: ", "/users/salir", array(
                                        "style" => "text-decoration:none; color:#FFFF00;"
                                    ));
                                    echo $usr . " ";
                                }
                                ?></li>


                        </ul>
                    </nav>
                </header>
            </div>
            <div id="content">
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
    </body>
</html>