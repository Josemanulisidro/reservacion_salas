<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de reservaciones de salas</title>
    <link rel="stylesheet" href="../css/historial.css">
    <link rel="shortcut icon" href="../css/Logo.png" />
        <!-- datatebles -->
<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js "></script>
</head>
<style>
        .table-responsive{
            margin: 0 auto;
            width: 65%;
            height: 700px;
        }
    </style>
<body>
<?php
 session_start();
 $rol_usu = $_SESSION['id_rol1']; 
 if ($_SESSION['active']) {
    include('navegacion.php');  
     if ($rol_usu == 1) {
     
    ?>
<div class="container">
       <h1>Historial de reservaciones de salas</h1>
       
       <form action="Historial.php" method="POST">
        <label for="site-search">Buscador:</label>
            <input type="text" class="w-25 form-control mb-2" name="busqueda">
            <button class="btn btn-primary mb-2" type="submit">Buscar</button>
        </form>
        </div>
        <?php
                include('../backend/conexion.php');
                isset($_POST['busqueda']) ? $busqueda = $_POST['busqueda'] : $busqueda = "";
                $sql = "SELECT * FROM salas INNER JOIN reservacion ON salas.id_salas = reservacion.id_salas1 WHERE salas.nom_salas LIKE '%$busqueda%' or reservacion.nombre_r LIKE '%$busqueda%' or reservacion.area3 LIKE '%$busqueda%' or reservacion.tema_r LIKE '%$busqueda%' or reservacion.fecha_de_reservac LIKE '%$busqueda%' or reservacion.fecha_ini LIKE '%$busqueda%' or reservacion.estatus_s1 LIKE '%$busqueda%' ORDER BY reservacion.estatus_s1 DESC";
                $result = $conexion->query($sql);
        ?>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover table-success" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">sala</th>
                        <th scope="col">Capacidad</th>
                        <th scope="col">Reservo</th>
                        <th scope="col">Área</th>
                        <th scope="col">Asunto</th>
                        
                        <th scope="col">Fecha de reservación</th>
                        <th scope="col">Fecha de inicio de reservación</th>
                        <th scope="col">Fecha de terminación de reservación</th>
                        <th scope="col">Estatus</th>
                        <?php
                        if ($rol_usu == 1) {
                        ?>
                        <th scope="col">Acción</th>
                        <?php
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                <?php

                    while ($row = $result->fetch_assoc()) {
                        $estatus = $row['estatus_s1'];
                        if ($estatus == 0) {
                            $estatus = "finalizada";
                        }
                        if ($estatus == 1) {
                            $estatus = "Activa";
                        }elseif ($estatus == 2){    
                            $estatus = "inactiva";
                        }

                        $fecha_ini= $row['fecha_ini'];
                        $fecha_fin= $row['fecha_fin'];
                        setlocale(LC_TIME, 'spanish.UTF-8');
                        $fecha_ini = strftime("%A, %d de %B del %Y %r" , strtotime($fecha_ini));
                        $fecha_fin = strftime("%A, %d de %B del %Y %r" , strtotime($fecha_fin));
                    ?>
                    <tr>
                   <td><?php echo $row['nom_salas'];?></td>
                   <td><?php echo $row['descrip_salas'];?></td>
                   <td><?php echo $row['nombre_r'];?></td>
                   <td><?php echo $row['area3'];?></td>
                   <td><?php echo $row['tema_r'];?></td>
                   <td><?php echo $row['fecha_de_reservac'];?></td>
                   <td><?php echo $fecha_ini; ?></td>
                   <td><?php echo $fecha_fin;?></td>
                   <td><?php echo $estatus;?></td>
                   <?php
                        if ($rol_usu == 1) {
                        ?>
                        <td>
                            <form action="../backend/delet_reservacionH.php" method="POST">
                            <input type="hidden" name="id_reserv" value="<?php echo $row['id_reservacion'];?>">
                            <button type="submit" class="btn btn-danger">Eliminar Reservación</button>
                            </form>
                        </td>
                        <?php
                        }
                        ?>


                    </tr>
                    <?php   
                    }
                    ?>
            </table>
        </div>     

        <script>
      $(document).ready(function () {
    $('#myTable').DataTable();
    
});
        </script> 

        
<?php
        }
      }else{  
        include('../backend/salir.php');
    }
    ?>
</body>
</html>
