<?php
    $server = "localhost:3306";
    $user = "root";
    $pass = "";
    $bd = "consorcio_2019_22";

    $conexion = mysqli_connect($server, $user, $pass);
	mysqli_select_db($conexion,$bd);
	$res = mysqli_query($conexion,"select *from tb_laboratorio");
	//arreglo principal
	$json = array();
	while($row = mysqli_fetch_array($res))
    {
		$json[] = array(
		'codigo' => $row[0],
		'nombre' => $row[1]);
	}	
		
	echo json_encode($json);

?>

