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
	$lab=$json["laboratorio"];
	$pre=$json["precio"];
	$sto=$json["stock"];
	$fec=$json["fecha"];
	if($cod==0)
		mysqli_query($conexion,"insert into tb_medicamento ".
						"values(null,'$nom','$lab','$sto','$pre','$fec')");
	else
		mysqli_query($conexion,"update tb_medicamento set ".
	            "nom_med='$nom',cod_lab='$lab',stock_med='".
				"$sto',pre_med='$pre',fec_ven_med='$fec' where cod_med='$cod'");

?>


