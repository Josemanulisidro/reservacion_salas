<?php
include('conexion.php');

class Rol{
    public function getRol(){
        include('conexion.php');
        $query = "SELECT * FROM `rol`";
        $result = $conexion->query($query);
        return $result;
    }
}



?>