
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Salas</title>
    <link rel="stylesheet" href="../css/inicio.css">
    <link rel="shortcut icon" href="../css/Logo.png" />
</head>
<body>
 
<?php
     include("navegacion.php");
     session_start();
     $id_usu = $_SESSION['id_usu'];
     $nombre_usu = $_SESSION['nombre'];
     $passw_usu = $_SESSION['password'];
     $fecha_usu = $_SESSION['fecha'];
     $rol_usu = $_SESSION['id_rol1'];
        if ($_SESSION['active']) {
     ?>
 
    

     <?php
        }else{
            include('../backend/salir.php');
        }
        
?>
</body>
</html>
