<?php
    $server = "localhost:3306";
    $user = "root";
    $pass = "";
    $bd = "consorcio_2019_22";

    $conexion = mysqli_connect($server, $user, $pass);
	mysqli_select_db($conexion,$bd);
	$res = mysqli_query($conexion,"SELECT tb_medicamento.COD_MED , tb_medicamento.NOM_MED ,tb_laboratorio.DES_LAB,tb_medicamento.STOCK_MED,tb_medicamento.PRE_MED,tb_medicamento.FEC_VEN_MED from tb_medicamento INNER JOIN tb_laboratorio ON tb_medicamento.COD_LAB=tb_laboratorio.COD_LAB");
	//arreglo principal
	$json = array();
	while($row = mysqli_fetch_array($res))
    {
		$json[] = array(
		'codigo' => $row[0],
		'nombre' => $row[1],
		'laboratorio' => $row[2],
		'stock' => $row[3],
		'precio' => $row[4],
		'fecha' => $row[5]);
	}	
		
	echo json_encode($json);

?>