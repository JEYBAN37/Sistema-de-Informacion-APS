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

            //echo $this->Html->css(array('style','cover.css','bootstrap.min.css','bootstrap-theme.min.css'));
            //echo $this->Html->script(array('bootstrap.min','jquery.min'));
            echo $this->Html->css(array('cover.css', 'bootstrap.min.css', 'bootstrap-theme.css'));
            echo $this->Html->script(array('jquery.min', 'bootstrap.min'));

            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
            ?>



    </head>
    <body>
<?php echo $this->Session->flash(); ?>
<?php echo $this->fetch('content'); ?>
        <div class="container">

            <form class="form-signin">
                <h2 class="form-signin-heading">Please sign in</h2>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>

        </div> <!-- /container -->

        <div class="mastfoot">
            <div class="inner">
                <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
        </div>

    </body>
</html>
