<?php
include('conexion.php');

$busqueda = $_POST['busqueda'];
$sql = "SELECT * FROM salas INNER JOIN reservacion ON salas.id_salas = reservacion.id_salas1 WHERE salas.nom_salas LIKE '%$busqueda%' ORDER BY reservacion.estatus_s1 DESC";
$result = $conexion->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('../frontend/navegacion.php');
    ?>
    
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Area</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['nom_salas'] ?></td>
            <td><?php echo $row['descrip_salas'] ?></td>
            <td><?php echo $row['area3'] ?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>


</body>
</html>