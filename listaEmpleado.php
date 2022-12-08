<?php
    $server = "localhost:3306";
    $user = "root";
    $pass = "";
    $bd = "consorcio_2019_22";

    $conexion = mysqli_connect($server, $user, $pass);
	mysqli_select_db($conexion,$bd);
	$res = mysqli_query($conexion,"SELECT tb_empleado.COD_EMP,tb_empleado.NOM_EMP,tb_empleado.APE_EMP,tb_empleado.SEX_EMP,tb_empleado.FEC_REG_EMP,tb_empleado.FEC_NAC_EMP,tb_empleado.DIR_EMP ,tb_distrito.NOM_DIS from tb_empleado INNER JOIN tb_distrito ON tb_empleado.COD_DIS_EMP=tb_distrito.COD_DS");
	//arreglo principal
	$json = array();
	while($row = mysqli_fetch_array($res))
    {
		$json[] = array(
		'codigo' => $row[0],
		'nombre' => $row[1],
		'apellido' => $row[2],
		'sexo' => $row[3],
		'fecha_registro' => $row[4],
		'fecha_nacimiento' => $row[5],
		'direccion' => $row[6],
		'laboratorio' => $row[7]);
	}	
		
	echo json_encode($json);

?>