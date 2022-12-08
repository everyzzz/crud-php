<?php
    $server = "localhost:3306";
    $user = "root";
    $pass = "";
    $bd = "consorcio_2019_22";

    $conexion = mysqli_connect($server, $user, $pass);
	mysqli_select_db($conexion,$bd);
	$cod=$_GET["codigo"];
	
	$res = mysqli_query($conexion,"select *from tb_empleado where cod_emp='$cod'");
	//arreglo principal
	$json = array();
	$row = mysqli_fetch_array($res);
    
		$json["buscar"] = array(
		'codigo' => $row[0],
		'nombre' => $row[1],
		'apellido' => $row[2],
		'sexo' => $row[3],
		'fecha_registro' => $row[4],
		'fecha_nacimiento' => $row[5],
		'direccion' => $row[6],
		'laboratorio' => $row[7]);
	
		
	echo json_encode($json);

?>