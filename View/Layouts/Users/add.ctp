<?php echo $this->Form->create("Usuario"); ?>
<table>
    <tr>
        <td>
            <b>
                Usuario
            </b>
        </td>
        <td>
            <?php echo $this->Form->input("username", array("label" => "")); ?>
        </td>
    </tr>
    <tr>
        <td>
            <b>
                Contrase&ntilde;a
            </b>
        </td>
        <td>
            <?php echo $this->Form->input("password", array("label" => "")); ?>
        </td>
    </tr>
    <tr>
        <td>
            <b>
                Nombre
            </b>
        </td>
        <td>
            <?php echo $this->Form->input("nombre", array("label" => "")); ?>
        </td>
    </tr>
    <?php
    if(isset($nivs)){
    ?>
    <tr>
        <td>
            <b>
                Nivel
            </b>
        </td>
        <td>
    <?php
        echo $this->Form->select("nivel", $nivs);
    ?>
        </td>
    </tr>
    <?php
    } else {
        echo $this->Form->hidden("nivel", array("value" => "U"));
    }
    ?>
</table>
<?php echo $this->Form->end("Registrar"); ?>