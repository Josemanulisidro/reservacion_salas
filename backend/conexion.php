<?php
	date_default_timezone_set('America/Mexico_City');
	// date_default_timezone_set('America/Mazatlan');

	$servidor="localhost";
	$usuario="root";
	$pass="";
	$bd="agenda";
	
    $conexion= mysqli_connect($servidor,$usuario,$pass,$bd);

    // if ($datos = $conexion) {
	// 	echo "Conexion exitosa";
	// }
	// else {
	// 	echo "No hay conexion";
	// }
?>