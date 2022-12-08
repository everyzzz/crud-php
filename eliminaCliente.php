<?php
    $server = "localhost:3306";
    $user = "root";
    $pass = "";
    $bd = "consorcio_2019_22";

    $conexion = mysqli_connect($server, $user, $pass);
	mysqli_select_db($conexion,$bd);
	$cod=$_GET["codigo"];
	
	mysqli_query($conexion,"delete from tb_cliente where cod_cli='$cod'");

?>

