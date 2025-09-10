<?php $this->layout = 'tablas'?>

<div class="actions">
    <h3><?php echo __('Opciones'); ?></h3>
    <ul>

        <li> <a  href="../users/bienvenida"   >Inicio</a></li>

        <li><?php echo $this->Html->link(__('Regresar'), array('action' => 'admin')); ?></li></li>  
        <li><?php echo $this->Html->link(__('Nuevo usuario sistema'), array('action' => 'add')); ?></li>

                      
                
    </ul>
</div>

<table border="1" cellpadding="0" cellspacing="0">
    <tr>
        <th>
            No
        </th>
        <th>
            <?php echo $this->paginator->sort('nombre', 'NOMBRES'); ?>
        </th>
        <th>
            <?php echo $this->paginator->sort('username', 'USUARIO'); ?>
        </th>

        <th>
            <?php echo $this->paginator->sort('nivel', 'NIVEL'); ?>
        </th>
        <th>
            Mod
        </th>
        <th>
            Bor
        </th>
    </tr>
    <?php
        foreach($usrs as $i => $v){
    ?>
    <tr>
        <td align="center">
            <?php echo $v['User']['id']; ?>
        </td>
        <td>
            <?php echo $v["User"]["nombre"]; ?>
        </td>
        <td>
            <?php echo $v["User"]["username"]; ?>
        </td>
        <td>
            <?php echo $v["User"]["nivel"]; ?>
        </td>
        <td>
            <?php echo $this->Html->link($this->html->image('editar.png', array('border' => 0, 'height' => 40, 'title' => 'Editar la información')), "edit/".$v["User"]["id"], array('escape' => false)); ?>
        </td>
        <td>
            <?php 
            echo  $this->Form->postLink(
                    $this->Html->image('/img/borrar.png', array('alt' => __('Borrar',array('border' => 0, 'height' => 30, 'title' => 'Editar la información')))), 
                    array('controller' => 'users', 'action' => 'delete', $v['User']['id']), 
                    array('escape' => false), 
                    __('Esta seguro de borrar el/la usuario(a) %s?', $v['User']['nombre']));


            ?>
        </td>
    </tr>
    <?php
        }
    ?>
</table>
<div align="left" style="float:left;">
    <?php echo $this->Paginator->numbers(); ?>
</div>
<div align="right">
    <?php echo $this ->html->link($this->html->image('agregar.gif', array('border' => 0, 'height' => 30, 'title' => 'Agregar información')),'add/', array('escape' => false))?>
</div>

