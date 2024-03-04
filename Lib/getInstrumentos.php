<?php

require('../database.php');


$dimension_id = $_POST['dimension_id'];
    
    $queryM = "SELECT id, nombre_instrumento FROM instrumentos WHERE dimension_id = '$dimension_id' ORDER BY nombre_instrumento ASC";
    $resultadoM = $mysqli->query($queryM);
    
    $html= "<option value='0'>Seleccionar instrumento</option>";
    
    while($rowM = $resultadoM->fetch_assoc())
    {
        $html.= "<option value='".$rowM['id']."'>".$rowM['nombre_instrumento']."</option>";
    }
    
    echo $html;

?>