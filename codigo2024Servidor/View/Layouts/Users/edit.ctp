<?php echo $this->Form->create("User"); ?>
<?php echo $this->Form->hidden("id", array("value" => $datos["User"]["id"])); ?>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <td>
            <b>
                USUARIO
            </b>
        </td>
        <td>
            <?php echo $this->Form->input("username", array("label" => false, "value" => $datos["User"]["username"])); ?>
        </td>
    </tr>
    <tr>
        <td>
            <b>
                CONTRASE&Ntilde;A
            </b>
        </td>
        <td>
            <?php echo $this->Form->input("password", array("label" => false, "value" => $datos["User"]["password"])); ?>
        </td>
    </tr>
    <tr>
        <td>
            <b>
                NOMBRE
            </b>
        </td>
        <td>
            <?php echo $this->Form->input("nombre", array("label" => false, "value" => $datos["User"]["nombre"])); ?>
        </td>
    </tr>
    <tr>
        <td>
            <b>
                NIVEL
            </b>
        </td>
        <td>
            <?php echo $this->Form->select("nivel", $nivs, array("label" => false, "value" => $datos["User"]["nivel"], "empty" => false)); ?>
        </td>
    </tr>
</table>
<?php echo $this->Form->end("Actualizar"); ?>