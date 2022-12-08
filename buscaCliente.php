<?php
    $server = "localhost:3306";
    $user = "root";
    $pass = "";
    $bd = "consorcio_2019_22";

    $conexion = mysqli_connect($server, $user, $pass);
	mysqli_select_db($conexion,$bd);
	$cod=$_GET["codigo"];
	
	$res = mysqli_query($conexion,"select *from tb_cliente where cod_cli='$cod'");
	//arreglo principal
	$json = array();
	$row = mysqli_fetch_array($res);
    
			$json["buscar"] = array(
		'codigo' => $row[0],
		'nombre' => $row[1],
		'apellido' => $row[2],
		'sexo' => $row[3],
		'fecha' => $row[4],
		'direccion' => $row[5],
		'distrito' => $row[6]
		);
		
	echo json_encode($json);

?>