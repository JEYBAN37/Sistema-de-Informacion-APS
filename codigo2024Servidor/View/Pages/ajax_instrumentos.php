<?php

/*if(isset($_POST['id'])):
	require "database.php";
	$user=new ApptivaDB();
	$u=$user->buscar("instrumentos","dimenisiones_id=".$_POST['id']);
	$html="";
	foreach ($u as $value)
		$html.="<option value='".$value['id']."'>".$value['nombre_instrumento']."</option>";
	echo $html;	
endif;*/

?>


<?php
$html = '';
$conexion = new mysqli('localhost', 'root', '', 'auditoria');
$id_category = $_POST['id_category'];
$result = $conexion->query(
    "SELECT i.id, nombre_instrumento FROM instrumento i    
    WHERE id_parent = ".$id_category." ORDER BY name ASC"

);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {                
        $html .= '<option value="'.$row['id_category'].'">'.$row['name'].'</option>';
    }
}
echo $html;

?>