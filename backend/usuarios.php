<?php

class Usuarios{
//Funcion de insertar un usuario
     public function insertarUsuario($user_name,$user,$pas,$fecha,$id_rol,$area){

        include('conexion.php');
        $query_inserU = "INSERT INTO `usuarios`(`id_usu`, `nombre`, `usuario`, `password`, `fecha`, `id_rol1`, `area2`) VALUES (Null,'$user_name','$user','$pas','$fecha','$id_rol','$area')";
        $inserU = $conexion->query($query_inserU);

            if ($inserU == true) {
                echo "<script> alert('Registro exitoso'); </script>";  
                header("Location: ../frontend/adm_usuarios.php");
                
            }else{
                echo "<script> alert('Error al registrar Usuario'); </script>"; 
                }
    } 
    
//Se selecciona todos los campos de usuarios
    public function getUsuarios(){
        include('conexion.php');
        $sql = "SELECT * FROM usuarios";
        $result = $conexion->query($sql);
        return $result;
}

//Funcion de actualizar un usuario
    public function ActualizarUsuario($id_usu,$nom_usu,$pass_usu,$fecha_modifi,$id_rol1,$area){
        include('conexion.php');
        $query_actualizarU = "UPDATE `usuarios` SET `nombre`='$nom_usu', `password`='$pass_usu', `fecha`='$fecha_modifi', `id_rol1`='$id_rol1',`area2`='$area'  WHERE id_usu = '$id_usu'";
        $actualizarU = $conexion -> query($query_actualizarU);
        
            if($actualizarU){
                echo "<script> alert('Actualizacion exitosa'); </script>"; 
                header("Location: ../frontend/adm_usuarios.php");

            }else{
                echo "<script> alert('Error al actualizar'); </script>";
                header("Location: ../frontend/adm_usuarios.php");
            }   
    }

//Funcion de eliminar un usuario
    public function EliminarUsuario($id_usu){
        include('conexion.php');
        $query_delete = "DELETE FROM `usuarios` WHERE id_usu = '$id_usu'";
        $delete_usuario = $conexion -> query($query_delete);
            
            if($delete_usuario){
                echo "<script> alert('Eliminacion de Usuario Exitoso'); </script>"; 
                header("Location: ../frontend/adm_usuarios.php");
            }else{
                echo "<script> alert('Error al eliminar'); </script>"; 
            }
        }
}

?>