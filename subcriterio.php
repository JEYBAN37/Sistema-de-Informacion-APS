
<?php
$html = '';
$conexion = new mysqli('localhost', 'root', '', 'auditoria');

$id_category = $_POST['id_category'];

$result = $conexion->query(
    

    "SELECT i.dimension_id, nombre_instrumento FROM instrumentos i
                            LEFT JOIN verificaciones v ON (v.dimension_id = i.dimension_id AND v.instrumento_id = 1)WHERE id_parent = ".$id_category." ORDER BY nombre_instrumento ASC"
);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {                
        $html .= '<option value="'.$row['id_category'].'">'.$row['nombre_instrumento'].'</option>';
    }
}
echo $html;
?>