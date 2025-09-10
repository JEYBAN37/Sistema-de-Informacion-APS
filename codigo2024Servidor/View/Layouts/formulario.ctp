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

    echo $this->Html->css(array('cake.generic.css', 'bootstrap.min.css',  'sb-admin-2.css'));
    echo $this->Html->script(array('jquery-1.11.0', 'metisMenu.min', 'sb-admin-2', 'bootstrap.min'));
   
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
    

</head>


<body>


<div class="contanier">	
 
<nav class="navbar" style="background-color: #3366CC;">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">
		<img src="https://m.www.gov.co/assets/logos/transversales/GOVCO.svg" alt="">
	</span>
  </div>
</nav>
	 <div >
		<div >
			<!--h1>ficha familiar</h1-->
		</div>
		<div>

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<!--div>
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div-->
	
	 <!--?php echo $this->element('sql_dump'); ?-->

	
	   </div>
	  </div>
	</div>
	
</div>

</body>
</html>