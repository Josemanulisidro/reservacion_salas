<?php

include('conexion.php');
$user = $_POST['user'];
$pass = $_POST['pass'];

$query = mysqli_query($conexion, "SELECT * FROM `usuarios` Where usuario = '$user' and password = '$pass'");
$result = mysqli_num_rows($query);

if ($result > 0) {
    $datos = mysqli_fetch_array($query);
    session_start();
    $_SESSION['active'] = true;
    $_SESSION['id_usu'] = $datos['id_usu'];
    $_SESSION['nombre'] = $datos['nombre'];
    $_SESSION['usuario'] = $datos['usuario'];
    $_SESSION['password'] = $datos['password'];
    $_SESSION['fecha'] = $datos['fecha'];
    $_SESSION['id_rol1'] = $datos['id_rol1'];
    $_SESSION['area2'] = $datos['area2'];
    header("location:../frontend/index.php");


    } else {
        header("location:../frontend/login.php");
    }

?>