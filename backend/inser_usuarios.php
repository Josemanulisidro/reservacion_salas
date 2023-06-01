<?php
include("conexion.php");
include("usuarios.php");

$usuarios = new Usuarios();
$usuarios->insertarUsuario($user_name = $_POST['user_name'],$user = $_POST['user'],$pas = $_POST['pas'], $fecha = $_POST['fecha'], $id_rol = $_POST['rol'],$area = $_POST['area']);




?>