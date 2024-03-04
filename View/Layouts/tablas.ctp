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
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<?php echo $this->Html->charset(); ?>
        <title>
        <?php echo $cakeDescription ?>:
        <?php echo $title_for_layout; ?>
        </title>
            <?php
            echo $this->Html->meta('icon');

           
            echo $this->Html->css(array('bootstrap.min.css', 'bootstrap-theme.css','sb-admin-2.css','font-awesome.min.css','metisMenu.min.css','cake.generic_modify.css'));
            echo $this->Html->script(array('jquery.min', 'metisMenu.min','bootstrap.min','ie10-viewport-bug-workaround.js', 'sb-admin-2','funciones'));


            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
            ?>

    </head>

     <?php echo $this->element('nav');?>
     

    <body >




<?php echo $this->fetch('content'); ?>

        <div class="container theme-showcase" role="main">

        </div>


    </body>

<!--?php echo $this->element('sql_dump'); ?-->
<!--?php echo $this->Js->writeBuffer(); // Write cached scripts  ?-->

</html>



