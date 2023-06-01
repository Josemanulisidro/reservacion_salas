<?php

class Salas{

//insertar sala
    function insertarSala($nom_sala, $descrip_sala, $id_usu, $posicion){
        include('conexion.php');
        $query_salas = "INSERT INTO `salas`(`id_salas`, `nom_salas`, `descrip_salas`, `id_usuarios`, `posicion`) VALUES (Null,'$nom_sala','$descrip_sala','$id_usu','$posicion')";
        $resultado_salas = $conexion->query($query_salas);

        if($resultado_salas){

            echo "<script> alert('Registro exitoso de sala'); </script>";
            header("Location: ../frontend/adm_salas.php");
        }else{  
            echo "<script> alert('Error al registrar sala'); </script>";
            header("Location: ../frontend/adm_salas.php");
           
        }
    }
//obtener salas
    // function getSalas(){
    //     include('conexion.php');
    //     $sql = "SELECT * FROM salas ";
    //     $result = $conexion->query($sql);
    //     return $result;
    // }

    // obtener salas
    function getSalas(){
        include('conexion.php');
        $sql = "SELECT * FROM salas ORDER BY posicion";
        $result = $conexion->query($sql);
        return $result;
    }


//funcion para actualizar sala
    function ActualizarSala($nom_sala, $descrip_sala, $id_salas){
        include('conexion.php');
        $query_actualizarS = "UPDATE `salas` SET `nom_salas`='$nom_sala',`descrip_salas`='$descrip_sala' WHERE id_salas = $id_salas";
        $actualizarS = $conexion -> query($query_actualizarS);
        if($actualizarS){
            echo "<script> alert('Actualizacion exitosa de sala'); </script>";
            header("Location: ../frontend/adm_salas.php");
        }else{
            echo "<script> alert('Error al actualizar sala'); </script>";
            header("Location: ../frontend/adm_salas.php");
        }
    }
    
//funcion para eliminar sala

    function EliminarSala($id_sala){
        include('conexion.php');
        $query_delete = "DELETE FROM `salas` WHERE id_salas = '$id_sala'";
        $delete_sala = $conexion -> query($query_delete);
        if($delete_sala){
            echo "<script> alert('Eliminacion exitosa'); </script>";
            header("Location: ../frontend/adm_salas.php");
        }else{
            echo "Error al eliminar";
            echo "<script> alert('Error al eliminar'); </script>";
            header("Location: ../frontend/adm_salas.php");
        }

    }

//funcion para cambiar de estatus de sala si estatus es igual 1 entonce es igual reservado
    function CambiarEstadoSala(){
        include('conexion.php');
        $cam = "SELECT `estatus_s1` FROM `reservacion` WHERE estatus_s1 = 1";
        $reservar = $conexion -> query($cam);
     
    }
}

?>