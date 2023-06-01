<?php
include('conexion.php');
include('usuarios.php');

$usuarios = new Usuarios();
$usuarios->EliminarUsuario($id_usu = $_POST['id_usu']);

?>