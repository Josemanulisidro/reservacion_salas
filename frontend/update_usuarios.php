
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="../css/update_usuarios.css">
</head>
<body>
    <?php
     include('navegacion.php');
     if ($_SESSION['active']){
      if ($rol_usu == 1) {
        
        include('../backend/conexion.php');
       
    $id_usu = $_POST['id_usu'];
    $sql = "SELECT * FROM usuarios where id_usu = '$id_usu' ";
    $result = $conexion->query($sql);
    while ($row = $result->fetch_assoc()) {
        $area = $row['area2'];
        switch ($area) {
            case 1:
                $area = "AUDITORIA";
                $areas = 1;
                break;
                case 2:
                    $area = "FINANZAS";
                    $areas = 2;
                    break;
                    case 3:
                        $area = "MERCADOTECNIA";
                        $areas = 3;
                        break;
                        case 4:
                            $area = "NUEVO NEGOCIO";
                            $areas = 4;
                            break;
                            case 5:
                                $area = "FRANQUICIAS";
                                $areas = 5;
                                break;
                                case 6:
                                    $area = "OPERACIONES";
                                    $areas = 6;
                                    break;
                                    case 7:
                                        $area = "COMERCIAL";
                                        $areas = 7;
                                        break;
                                        case 8:
                                            $area = "RECURSOS HUMANOS";
                                            $areas = 8;
                                            break;
                                            case 9:
                                                $area = "TIC'S";
                                                $areas = 9;
                                                break;
                                                case 10:
                                                    $area = "GESTION DE CALIDAD";
                                                    $areas = 10;
                                                    break;

            
            default:
                "NO EXIXTE ESTA 'ÁREA";
                break;
        }

        $rol = $row['id_rol1'];
        switch ($rol) {
            case 1:
                $rol = "ADMINSTRADOR";
                $rols = 1;
                break;
                case 2:
                    $rol = "USUARIO";
                    $rols = 2;
                    break;
            
            default:
                # code...
                break;
        }

    ?>

<form action="../backend/upd_usuarios.php" method="POST">
            <div class="container">
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nombre nuevo de la sala:</label>
                <input type="text" name="nom_usu" id= "nom_usu" class="form-control" id="recipient-name" value="<?php echo $row['nombre'];?>">
                <input type="hidden" name="id_usu" class="form-control" id="recipient-name" value= "<?php echo $row['id_usu'];?>">
            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Contraseña:</label>
                <input type="text" name="pass_usu" class="form-control" id="recipient-name" value="<?php echo $row['password'];?>">
            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Fecha de modificación:</label>
                <input name="fecha_modifi" class="form-control" id="recipient-name" placeholder="<?php echo $row['fecha'];?>" disabled>
            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Id rol:</label>
                <select name="id_rol1" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected value="<?php echo $rols?>"><h5><?php echo $rol?></h5></option>
                    <option value="1"><h5>ADMINISTRADOR</h5></option>
                    <option value="2"><h5>USUARIO</h5></option>
                </select>

                <select name="area" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected  value="<?php echo $areas; ?>"><h5><?php echo $area; ?></h5></option>
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
            <a href="adm_usuarios.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
            <button type="submit" class="btn btn-success">Actualizar</button>  

            </div>
</form>

<?php

}
     }
    }else{
        include('../backend/salir.php');
    }
?>
</body>
</html>

