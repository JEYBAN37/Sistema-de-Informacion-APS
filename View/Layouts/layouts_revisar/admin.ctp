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
        <meta http-equiv="X-UA-Compatible" content="IE=8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<?php echo $this->Html->charset(); ?>
        <title>
        <?php echo $cakeDescription ?>:
        <?php echo $title_for_layout; ?>
        </title>
            <?php
            echo $this->Html->meta('icon');

            //echo $this->Html->css(array('cake.generic.css','style','theme.css','bootstrap.min.css','bootstrap-theme.min.css'.'cover.css'));
            //echo $this->Html->script(array('bootstrap.min','jquery.min','docs.min.js','ie10-viewport-bug-workaround.js'));
            echo $this->Html->css(array('cake.generic.css', 'style', 'theme.css', 'bootstrap.min.css', 'bootstrap-theme.css' . 'cover.css'));
            echo $this->Html->script(array('jquery.min', 'bootstrap.min', 'docs.min.js', 'ie10-viewport-bug-workaround.js'));

            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
            ?>



    </head>

    <body class="document" style="height: 100%;
          background: url(&quot;/basedatos/img/fondo_blanco.jpg&quot;) center top repeat-x #FFFFFF;

          background-repeat: no-repeat;
          background-position: top center;
          position: relative;
          z-index: 1;
          ">


<?php echo $this->fetch('content'); ?>
<?php echo $this->element('menuinicio'); ?>


        <div class="container theme-showcase" role="main">


    </body>
</html>



