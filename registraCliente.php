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
	$ape=$json["apellido"];
	$sex=$json["sexo"];
	$fec=$json["fecha"];
	$dir=$json["direccion"];
	$dis=$json["distrito"];
	if($cod==0)
		mysqli_query($conexion,"insert into tb_cliente ".
						"values(null,'$nom','$ape','$sex','$fec','$dir','$dis')");
	else
		mysqli_query($conexion,"update tb_cliente set ".
				"nom_cli='$nom',ape_cli='$ape',sex_cli='".
				"$sex',fec_reg_cli='$fec',dir_cli='$dir' , cod_dis_cli='$dis' where cod_cli='$cod'");

?>


