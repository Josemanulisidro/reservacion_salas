<?php
include('conexion.php');
include('salas.php');

$Salas = new Salas();

$nom_sala = $_POST['nom_sala']; 
$descrip_sala = $_POST['descrip_sala'];
$id_salas = $_POST['id_salas'];

    $nom_sala = trim($nom_sala);
    $descrip_sala = trim($descrip_sala);
    $id_salas = trim($id_salas);

    $nom_sala = stripslashes($nom_sala);
    $descrip_sala = stripslashes($descrip_sala);
    $id_salas = stripslashes($id_salas);

    if (empty($nom_sala) || empty($descrip_sala) || empty($id_salas)) {
        echo "<script> alert('Por favor llene todos los campos'); </script>";
        echo "<script> window.location.href='../frontend/adm_salas.php'; </script>";
        exit();
    }else{
        $Salas->ActualizarSala($nom_sala, $descrip_sala, $id_salas);
    }

?>