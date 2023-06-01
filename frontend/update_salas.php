
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Sucursal</title>
    <link rel="stylesheet" href="../css/update_salas.css">
</head>
<body>

    <?php
     session_start();
     $rol_usu = $_SESSION['id_rol1']; 
     if ($_SESSION['active']) {
      if ($rol_usu == 1) {
    include('navegacion.php');  
   include('../backend/conexion.php');
  
    $id = $_POST['id_salas'];
        $sql = "SELECT * FROM salas where id_salas = $id ";
        $result = $conexion->query($sql);
        while ($row = $result->fetch_assoc()) {

    ?>
<form action="../backend/upd_salas.php" method="POST">
<div class="container">
<div class="mb-3">
    <label for="recipient-name" class="col-form-label">Nombre de sala:</label>
    <input type="text" name="nom_sala" class="form-control" id="recipient-name" value="<?php echo $row['nom_salas'];?> ">
    <input type="hidden" name="id_salas" class="form-control" id="recipient-name" value="<?php echo $row['id_salas'];?> ">
</div>
    <div class="mb-3">
    <label for="message-text" class="col-form-label">Descripción de sala:</label>
    <textarea class="form-control" name="descrip_sala" id="message-text" value="<?php echo $row['descrip_salas'];?>"><?php echo $row['descrip_salas'];?></textarea>
</div>
<a href="adm_salas.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
<button type="submit" class="btn btn-success">Actualizar</button>  

</div>

</form>
<?php
}
?>
</body>
</html>
<?php
}
}else
{
    include('../backend/salir.php');
}
?>