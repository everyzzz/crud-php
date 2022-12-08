<?php
    $server = "localhost:3306";
    $user = "root";
    $pass = "";
    $bd = "consorcio_2019_22";

    $conexion = mysqli_connect($server, $user, $pass);
	mysqli_select_db($conexion,$bd);
	$json=json_decode($_GET["data"],true);
	$cod=$json["codigo"];
	$nom=$json["nombre"];


	if($cod==0)
		mysqli_query($conexion,"insert into tb_laboratorio ".
						"values(null,'$nom')");
	else
		mysqli_query($conexion,"update tb_laboratorio set ".
				"des_lab='$nom' where cod_lab='$cod'");


?>
