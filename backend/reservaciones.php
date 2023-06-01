<?php

class Reservaciones{

    
    //FUNCION DONDE SE INSERTA UNA RESERVACION PERO SOLO SI NO HAY UNA RESERVACION EN EL RANGO DE FECHAS DE FECHA INICIO Y FECHA FINAL DE LA RESERVACION QUE SE QUIERE INSERTAR
    function insertarReservacionn($nombre_r,$tema_r,$area,$fecha_r,$fecha_ini,$fecha_fin,$id_usu2,$id_s,$estatus_s1){
        include('conexion.php');
        date_default_timezone_set('America/Chihuahua');
        $fecha_actual = date("Y-m-d H:i:s");
        $sql = "SELECT * FROM reservacion WHERE id_salas1 = '$id_s' AND ((fecha_ini >= '$fecha_ini' AND fecha_ini <= '$fecha_fin') OR (fecha_fin >= '$fecha_ini' AND fecha_fin <= '$fecha_fin'))";
        $result = $conexion->query($sql);
        if($result->num_rows > 0){
           
            echo "<script> alert('No se puede reservar en ese rango de fechas'); </script>";
            echo "<script> window.location.href='../frontend/salas.php'; </script>";
    
        }
        //Si la fecha de inicio es menor a la fecha actual no se puede reservar
        else if($fecha_ini < $fecha_actual){
            echo "<script> alert('No se puede reservar en esa fecha'); </script>";
            echo "<script> window.location.href='../frontend/salas.php'; </script>";
        }
        
        else{
            $sql = "INSERT INTO `reservacion`(`id_reservacion`, `nombre_r`, `tema_r`, `area3`, `fecha_de_reservac`, `fecha_ini`, `fecha_fin`, `id_usu2`, `id_salas1`, `estatus_s1`) VALUES (NULL,'$nombre_r','$tema_r','$area','$fecha_r','$fecha_ini','$fecha_fin','$id_usu2','$id_s','$estatus_s1')";
            $result = $conexion->query($sql);
            if($result){
                echo "Reservacion realizada";
                header("Location: ../frontend/salas.php");
            }else{
                //echo "Error al realizar reservacion";
                echo "<script> alert('Error al realizar reservacion'); </script>";
            echo "<script> window.location.href='../frontend/salas.php'; </script>";
            }
        }
    }

//SE OBTIENEN TODAS LAS RESERVACIONES
    function getReservaciones(){
        include('conexion.php');
        $sql = "SELECT * FROM salas INNER JOIN reservacion ON salas.id_salas = reservacion.id_salas1";
        $result = $conexion->query($sql);
        return $result;
    }

    //SE OBTIENEN LAS RESERVACIONES POR ORDENAMIENTO DE ESTATUS DE MANERA DESCENDENTE SOLO DE LOS DE ESTATUS 1 se mostraran en el salas.php
    function getReservacionesDescs(){
        include('conexion.php');
        $sql = "SELECT * FROM salas INNER JOIN reservacion ON salas.id_salas = reservacion.id_salas1 WHERE estatus_s1=1 ORDER BY reservacion.estatus_s1 DESC";
        $result = $conexion->query($sql);
        return $result;
    }

    //SE OBTIENEN LAS RESERVACIONES CON ESTATUS 0
    function getreservacionesE(){
        include('conexion.php');
        $sqlr = "SELECT estatus_s1 FROM `reservacion` WHERE estatus_s1=0 ";
        $result = $conexion->query($sqlr);
        $row2 = $result->fetch_assoc();
        $estatus_s1 = isset($row2['estatus_s1']) ? $row2['estatus_s1'] : 0;
      
    }

//ELIMINAR RESERVACION 
    function eliminarReservacion($id_r){
        include('conexion.php');
        $consulta = "DELETE FROM `reservacion` WHERE id_reservacion = '$id_r'";
        $resultado = $conexion->query($consulta);
        if($resultado){
            echo "Reservacion eliminada";
            header("Location: ../frontend/salas.php");
        }else{
            echo "Error al eliminar reservacion";
        }
    }

    //ELIMINAR RESERVACION DEL HISTORIAL
    function eliminarReservacionH($id_r){
        include('conexion.php');
        $consulta = "DELETE FROM `reservacion` WHERE id_reservacion = '$id_r'";
        $resultado = $conexion->query($consulta);
        if($resultado){
            echo "Reservacion eliminada";
            header("Location: ../frontend/Historial.php");
        }else{
            echo "Error al eliminar reservacion";
        }
    }

    //funcion que me trae todos los id de usuarios en la tabla de  reservaciones
    function id_usu_reserv(){
    include('conexion.php');
    $sql = "SELECT id_usu2 FROM `reservacion` WHERE id_usu2 ";
    $result = $conexion->query($sql);
    //recorrer los datos de la consulta con un for y guardarlos en un array y retornarlos
    $id_usu2 = array();
    for($i=0; $i<$result->num_rows; $i++){
        $result->data_seek($i);
        $id_usu2[] = $result->fetch_assoc();
    }
    return $id_usu2;
    } 

}

?>  