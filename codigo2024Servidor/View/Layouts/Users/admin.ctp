

<?php echo $this->element('menuinicio');?>

<table border="1" cellpadding="0" cellspacing="0">
    <tr>
        <th>
            No
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
            <?php echo ($i+1); ?>
        </td>
        <td>
            <?php echo $v["User"]["username"]; ?>
        </td>
        <td>
            <?php echo $nivs[$v["User"]["nivel"]]; ?>
        </td>
        <td>
            <?php echo $this->Html->link($this->html->image('editar.png', array('border' => 0, 'height' => 40, 'title' => 'Editar la información')), "edit/".$v["User"]["id"], array('escape' => false)); ?>
        </td>
        <td>
            <?php echo $this->Html->link($this->html->image('borrar.png', array('border' => 0, 'height' => 40, 'title' => 'Borrar la información')), "delete/".$v["User"]["id"], array('escape' => false)); ?>
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
    <?php echo $this ->html->link($this->html->image('agregar.gif', array('border' => 0, 'height' => 40, 'title' => 'Agregar información')),'add/', array('escape' => false))?>
</div>