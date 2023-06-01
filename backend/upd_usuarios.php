<?php
include('conexion.php');
include('usuarios.php');

$Usuarios = new Usuarios();
$id_usu = $_POST['id_usu'];
$nom_usu = $_POST['nom_usu'];
$pass_usu = $_POST['pass_usu'];
$fecha_modifi = date("Y-m-d H:i:s");
$id_rol1 = $_POST['id_rol1'];
$area = $_POST['area'];

 
    $id_usu = trim($id_usu);
    $nom_usu = trim($nom_usu);
    $pass_usu = trim($pass_usu);
    $fecha_modifi = trim($fecha_modifi);
    $id_rol1 = trim($id_rol1);
    $area = trim($area);
    
    $id_usu = stripslashes($id_usu);
    $nom_usu = stripslashes($nom_usu);
    $pass_usu = stripslashes($pass_usu);
    $fecha_modifi = stripslashes($fecha_modifi);
    $id_rol1 = stripslashes($id_rol1);
    $area = stripslashes($area);

if ($id_rol1 == 1 || $id_rol1 == 2) {

    if (empty($id_usu) || empty($nom_usu) || empty($pass_usu) || empty($fecha_modifi) || empty($id_rol1)|| empty($area)  || $area == 0) {
        echo "<script> alert('Por favor llene todos los campos'); </script>";
    echo "<script> window.location.href='../frontend/adm_usuarios.php'; </script>";
        exit();
    }else{
        $Usuarios->ActualizarUsuario($id_usu,$nom_usu,$pass_usu,$fecha_modifi,$id_rol1,$area);
    }

    }else{
        echo "<script> alert('Por favor llene todos los campos'); </script>";
        // echo "<script> Swal.fire('Por favor llene todos los campos') </script>";
         echo "<script> window.location.href='../frontend/adm_usuarios.php'; </script>";
        exit();
}



?>