<?php
    $server = "localhost:3306";
    $user = "root";
    $pass = "";
    $bd = "consorcio_2019_22";

    $conexion = mysqli_connect($server, $user, $pass);
	mysqli_select_db($conexion,$bd);
	$res = mysqli_query($conexion,"SELECT tb_cliente.COD_CLI, tb_cliente.NOM_CLI,tb_cliente.APE_CLI,tb_cliente.SEX_CLI,tb_cliente.FEC_REG_CLI, tb_cliente.DIR_CLI, tb_distrito.NOM_DIS from tb_cliente INNER JOIN tb_distrito ON tb_cliente.COD_DIS_CLI=tb_distrito.COD_DS");
	//arreglo principal
	$json = array();
	while($row = mysqli_fetch_array($res))
    {
		$json[] = array(
		'codigo' => $row[0],
		'nombre' => $row[1],
		'apellido' => $row[2],
		'sexo' => $row[3],
		'fecha' => $row[4],
		'direccion' => $row[5],
		'distrito' => $row[6]
		);
	}	
		
	echo json_encode($json);

?>