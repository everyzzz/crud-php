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
	$fr=$json["fecha_registro"];
	$fn=$json["fecha_nacimiento"];
	$dir=$json["direccion"];
    $codDist=$json["laboratorio"];

	if($cod==0)
		mysqli_query($conexion,"insert into tb_empleado ".
						"values(null,'$nom','$ape','$sex','$fr','$fn','$dir','$codDist')");
	else
		mysqli_query($conexion,"update tb_empleado set ".
				"nom_emp='$nom',ape_emp='$ape',sex_emp='".
				"$sex',fec_reg_emp='$fr',fec_nac_emp='".
				"$fn',dir_emp='$dir',cod_dis_emp='$codDist' where cod_emp='$cod'");


?>
