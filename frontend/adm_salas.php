
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion de Salas</title>
    <link rel="stylesheet" href="../css/adm_salas.css">
    <link rel="shortcut icon" href="../css/Logo.png" />
    <!-- datatebles -->
<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js "></script>
</head>
<body>
    <?php
    session_start();
    $id_usu = $_SESSION['id_usu'];
    $nombre_usu = $_SESSION['nombre'];
    $user_usu = $_SESSION['usuario'];
    $passw_usu = $_SESSION['password']; 
    $fecha_usu = $_SESSION['fecha'];
    $rol_usu = $_SESSION['id_rol1']; 
    $rol_usu = $_SESSION['id_rol1']; 
    if ($_SESSION['active']) {
        include('navegacion.php');
        if ($rol_usu == 1) {
    include('../backend/salas.php');
    $salas = new Salas();

        ?>
      <style>
        .table-responsive{
            margin: 0 auto;
            width: 65%;
            height: 700px;
        }
    </style>

<?php
include('../backend/conexion.php');
$sql = "SELECT * FROM `salas` posicion ORDER BY posicion DESC";
$result = $conexion->query($sql);
$row = $result->fetch_assoc();
$posicion = $row['posicion'];
$posicion = $posicion + 1;
?>


<!--Creación de salas-->
<div class="container" >
        <h1>Admistración de Salas</h1>
        <center><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Regis_salas" data-bs-whatever="@mdo" style="font-size: 40px; border-radius:30px">Creación de sala</button></center>
        </div>

        <div class="modal fade" id="Regis_salas" tabindex="-1" aria-labelledby="Regis_salas" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="Regis_salas"><h4>Creación de Salas</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                                <form action="../backend/inser_salas.php" method="POST">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label"><h5>Nombre de sala:</h5></label>
                                            <input type="text" name="nom_sala" class="form-control" id="recipient-name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label"><h5>Descripción de sala:</h5></label>
                                            <textarea class="form-control" name="descrip_sala" id="message-text" required></textarea>
                                            <input type="hidden" name="id_usu" value="<?php echo $id_usu ?>">
                                            <input type="hidden" name="posicion" value="<?php echo $posicion ?>">
                                        </div>
                                        
                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Cerrra</button>
                                            <button type="submit" class="btn btn-primary btn-lg">Crear Nueva sala</button>
                                        </div>
                                </form>
                </div>
            </div>
        </div>
    </div>


    <!--Tabla de salas -->
            <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover table-success" id="myTable">
                <thead>
                    <tr>
                    <th scope="col">Nombre de la sala</th>
                    <th scope="col">Descripción de la sala</th>
                    <th scope="col">Editar</th> 
                    <th scope="col">Eliminar</th>              
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = $salas->getSalas(); 
                    while($row = $result->fetch_assoc()){

                    ?>
                        <tr>
                            <td><?php echo $row['nom_salas'];?></td>
                            <td><?php echo $row['descrip_salas'];?></td>

                            <td>
                            <form action="update_salas.php" method="POST">
                                <input type="hidden" name="id_salas" value="<?php echo $row['id_salas'];?>" >
                                <center><button type="submit" class="btn btn-secondary">Editar</button></center>                    
                            </form>

                            </td>
                            <form action="../backend/delet_salas.php" method="POST">
                            <input type="hidden" name="id_salas" value="<?php echo $row['id_salas'];?>">
                            <td><center><button type="submit" class="btn btn-danger">Eliminar</button></center></td>
                            </form>
                        </tr>

                        <?php
                    }
                    ?>
                    
                </tbody>
            </table>
        </div>

        <script>
      $(document).ready(function () {
    $('#myTable').DataTable();
});
        </script> 

        
<?php
        }
    } else{
        include('../backend/salir.php');
    }   
?>
</body>
</html>
