
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador de Usuarios</title>
    <link rel="stylesheet" href="../css/adm_usuarios.css">
    <link rel="shortcut icon" href="../css/Logo.png" />
<!-- datatebles -->
<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js "></script>
</head>
<body>
<?php
include('navegacion.php');
    if ($_SESSION['active']) {
     if ($rol_usu == 1) {
     include('../backend/usuarios.php');
        $usuarios = new Usuarios();       
    ?>

    <style>
        .table-responsive{
            margin: 0 auto;
            width: 65%;
            height: 700px;
        }

        
    </style>

<!--Creación de Usuarios-->
<div class="container" >
        <h1>Administración de Usuarios</h1>
        <center><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Regis_Usu" data-bs-whatever="@mdo" style="font-size: 40px; border-radius:30px">Registro de Usuario</button></center>
        </div>

        <div class="modal fade" id="Regis_Usu" tabindex="-1" aria-labelledby="Regis_Usu" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="Regis_Usu"><h4>Creación de Usuario</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                                <form action="../backend/inser_usuarios.php" method="POST">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label"><h5>Nombre de Usuario:</h5></label>
                                            <input type="text" name="user_name" class="form-control" id="recipient-name " required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label"><h5>Usuario:(Clave)</h5></label>
                                            <input type="text" name="user" class="form-control" id="recipient-name " required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label"><h5>Contraseña:</h5></label>
                                            <input type="text" name="pas" class="form-control" id="recipient-name" required>
                                            <input name="fecha" value="<?php echo date("Y-m-d H:i:s"); ?>" hidden >  
                                        </div>
                                        <select name="rol" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required>
                                            <option selected><h5>Selecciona el Rol</h5></option>
                                            <option value="1"><h5>Administrador</h5></option>
                                            <option value="2"><h5>Usuario</h5></option>
                                        </select>

                                        <select name="area" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required>
                                            <option selected><h5>Selecciona el ÁREA</h5></option>
                                            <option value="1"><h5>Auditoria</h5></option>
                                            <option value="2"><h5>Finazas</h5></option>
                                            <option value="3"><h5>Mercadotecnia</h5></option>
                                            <option value="4"><h5>Nuevos Negocios</h5></option>
                                            <option value="5"><h5>Franquicias</h5></option>
                                            <option value="6"><h5>Operaciones</h5></option>
                                            <option value="7"><h5>Comercial</h5></option>
                                            <option value="8"><h5>Recursos Humanos</h5></option>
                                            <option value="9"><h5>TIC'S</h5></option>
                                            <option value="10"><h5>Gestion de Calidad</h5></option>

                                        </select>
                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary btn-lg">Crear Nuevo Usuario</button>
                                        </div>
                                </form>
                </div>
            </div>
        </div>
    </div>
<!--Fin de creación de usuarios-->
        <div class="table-responsive" >
            <table class="table table-striped table-bordered table-hover table-success" id="myTable">
                <thead>
                    <tr>
                    <th scope="col">Nombre de Usuarios</th>
                    <th scope="col">Usuarios</th>
                    <th scope="col">Contraseñas</th>
                    <th scope="col">Fecha de resgitro</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Area</th>
                    <th scope="col">Editar</th> 
                    <th scope="col">Eliminar</th>              
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = $usuarios->getUsuarios(); 
                    while($row = $result->fetch_assoc()){
                        //area 
                        $area = $row['area2'];
                        switch ($area) {
                            case 1:
                                $area = "AUDITORIA";
                                break;
                                case 2:
                                    $area = "FINANZAS";
                                    break;
                                    case 3:
                                        $area = "MERCADOTECNIA";
                                        break;
                                        case 4:
                                            $area = "NUEVO NEGOCIO";
                                            break;
                                            case 5:
                                                $area = "FRANQUICIAS";
                                                break;
                                                case 6:
                                                    $area = "OPERACIONES";
                                                    break;
                                                    case 7:
                                                        $area = "COMERCIAL";
                                                        break;
                                                        case 8:
                                                            $area = "RECURSOS HUMANOS";
                                                            break;
                                                            case 9:
                                                                $area = "TIC'S";
                                                                break;
                                                                case 10:
                                                                    $area = "GESTION DE CALIDAD";
                                                                    break;

                            
                            default:
                                "NO EXIXTE ESTA 'ÁREA";
                                break;
                        }
                        //rol
                        $rol = $row['id_rol1'];
                        switch ($rol) {
                            case 1:
                                $rol = "ADMINSTRADOR";
                                break;
                                case 2:
                                    $rol = "USUARIO";
                                    break;
                            
                            default:
                                # code...
                                break;
                        }


                    ?>
                        <tr>
                            <td><?php echo $row['nombre'];?></td>
                            <td><?php echo $row['usuario'];?></td>
                            <td><?php echo $row['password'];?></td>
                            <td><?php echo $row['fecha'];?></td>
                            <td><?php echo $rol;?></td>
                            <td><?php echo $area;?></td>
                            <td>
                                <form action="update_usuarios.php" method="POST">
                                    <input type="hidden" name="id_usu" value="<?php echo $row['id_usu'];?>">
                                <center><button type="submit" class="btn btn-secondary" >Editar</button></center>
                                </form>
                            </td>
                            <td>
                                <form action="../backend/delet_usuarios.php" method="POST">
                                <input type="hidden" name="id_usu" value="<?php echo $row['id_usu'];?>">
                                <center><button type="submit" class="btn btn-danger">Eliminar</button></center>
                                </form>
                            </td>
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
    }else{
 include('../backend/salir.php');
    }
                
                
?>
</body>
</html>
