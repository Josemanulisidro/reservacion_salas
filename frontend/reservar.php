<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar</title>
    <link rel="stylesheet" href="../css/reservaciones.css">
</head>
<body>
<?php
   include('../backend/conexion.php');
    include('navegacion.php');
    session_start();
    if ($_SESSION['active']) {

    if(isset($_POST['id_s'])){
        $id_s = $_POST['id_s'];
    }
    if(isset($_POST['nom_s'])){
        $nom_s = $_POST['nom_s'];
    }
    if(isset($_POST['id_usu'])){
        $id_usu = $_POST['id_usu'];
    }
    if(isset($_POST['nom_usu'])){
        $nom_usu = $_POST['nom_usu'];
    }
    if(isset($_POST['area'])){
        $area = $_POST['area'];
    } 
    switch ($area) {
        case 1:
            $area = "Auditoria";
            $areas = 1;
            break;
            case 2:
                $area = "Finazas";
                $areas = 2;
                break;
                case 3:
                    $area = "Mercadotecnia";
                    $areas = 3;
                    break;
                    case 4:
                        $area = "Nuevos Negocios";
                        $areas = 4;
                        break;
                        case 5:
                            $area = "Franquicias";
                            $areas = 5;
                            break;
                            case 6:
                                $area = "Operaciones";
                                $areas = 6;
                                break;
                                case 7:
                                    $area = "Comercial";
                                    $areas = 7;
                                    break;
                                    case 8:
                                        $area = "Recursos Humanos";
                                        $areas = 8;
                                        break;
                                        case 9:
                                            $area = "TIC'S";
                                            $areas = 9;
                                            break;
                                            case 10:
                                                $area = "Gestión de Calidad";
                                                $areas = 10;
                                                break;
            default:
            "NO EXIXTE ESTA 'ÁREA";
            break;
    }
    ?>
    <div class="container">
        <h1>Reservación de <?php echo $nom_s?></h1>
        <form action="../backend/inser_reservacion.php" method="POST">
            <div class="row justify-content-md-center">    
                <div class="col-5">
                    <div class="mb-5">
                        <center><label class="col-form-label center"><h5>Usuario</h5></label></center>
                        <input type="button" class="form-control"  value="<?php echo $nom_usu; ?>">
                    </div>
                </div>
            </div>

            <div class="row justify-content-md-center">
                <div class="col-4">
                <div class="mb-5">
                    <center><label class="col-form-label"><h5>Asunto</h5></label></center>
                    <input type="text" class="form-control" name="tema_r" required>
                </div>

                </div>
                <div class="col-4">
                <div class="mb-5">
                    <center><label class="col-form-label"><h5>Área</h5></label></center>
                    <input type="button" class="form-control"   value="<?php echo $area; ?>">
                    <input type="hidden" name="area" class="form-control"   value="<?php echo $areas; ?>">
                </div>
                </div>
            </div>
                 
            <div class="row justify-content-md-center">
                <div class="col-4">
                <div class="mb-5">
                    <center><label class="col-form-label"><h5>fecha Inicio</h5></label><br></center>
                    <input type="datetime-local" class="form-control" name="fecha_ini" required>
                </div>
                </div>
                <div class="col-4">
                <div class="mb-5">
                    <center><label class="col-form-label"><h5>Fecha Final</h5></label></center>
                    <input type="datetime-local" class="form-control" name="fecha_fin" required>
                </div>
                </div>
            </div>

                <!-- <div class="input-group mb-12"></div> -->
                <input type="hidden" name="name_re" value="<?php echo $nom_usu; ?>">
                <input type="hidden" name="id_usu2" value="<?php echo $id_usu; ?>">
                <input type="hidden" name="id_s" value="<?php echo $id_s; ?>">
                <input type="hidden" name="estatus_s1" value="1">

                <button type="submit" class="btn btn-primary btn-lg">Reservar</button>
                <a href="salas.php"><button type="button" class="btn btn-danger btn-lg">Cancelar</button></a>
        </form>
    </div>

        <?php
    }else{  
        include('../backend/salir.php');
    }
        ?>
    
</body>
</html>