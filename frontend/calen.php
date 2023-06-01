<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendarizacion de salas</title>
    <html lang="es">
</head>

<style>
        .table-responsive{
            margin: 0 auto;
            width: 60%;
        }
    </style>
<body>
    <?php
     $rol_usu = $_SESSION['id_rol1'];
    $reservacion = new Reservaciones();
   
    ?>
   
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover table-success">
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
                        <th scope="col">Estatus de reservación</th>
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
                     $result = $reservacion->getReservacionesDescs();
                    while($row = $result->fetch_assoc()) {
                        $estatus = $row['estatus_s1'];
                        $id_reservacion = $row['id_reservacion'];
                        $fecha_ini= $row['fecha_ini'];
                        $fecha_fin= $row['fecha_fin'];
                         

                        switch ($estatus) {
                            case 0:
                                $estatus = "finalizada";
                                break;
                            case 1:
                                $estatus = "Activa";
                                break;
                            case 2:
                                $estatus = "inactiva";
                                break;
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
                        //fecha actual menos una hora
                        date_default_timezone_set('America/Chihuahua');
                        $fecha_actual = date("Y-m-d H:i:s");
                       //condicion donde fecha actual es mayor a la fecha fin de reservacion y el estatus es 1 (activa) entonces se cambia a 0 (finalizada) 
                        if ($fecha_actual >=  $fecha_fin && $estatus == "Activa") {
                            $up = "UPDATE `reservacion` SET `estatus_s1`= '0' WHERE id_reservacion = '$id_reservacion'";
                            $up2 = $conexion -> query($up);
                        }

                        setlocale(LC_TIME, 'spanish.UTF-8');
                        $fecha_ini = strftime("%A, %d de %B del %Y %r" , strtotime($fecha_ini));
                        $fecha_fin = strftime("%A, %d de %B del %Y %r" , strtotime($fecha_fin));

                        // formto normal
                        // $fecha_fin = date("d-F-Y h:i:s A", strtotime($fecha_fin));
                    ?>
                    <tr>
                   <td><?php echo $row['nom_salas'];?></td>
                    <td><?php echo $row['descrip_salas'];?></td>
                    <td><?php echo $row['nombre_r'];?></td>
                    <td><?php echo $area;?></td>
                    <td><?php echo $row['tema_r'];?></td>
                    <td><?php echo $row['fecha_de_reservac'];?></td>
                    <td><?php echo $fecha_ini; ?></td>
                    <td><?php echo $fecha_fin; ?></td>
                    <td><?php echo $estatus; ?></td>
                   <?php
                        if ($rol_usu == 1) {
                        ?>
                        <td>
                            <form action="../backend/delet_reservacion.php" method="POST">
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
                </tbody>
            </table>
        </div>    
        
</body>
</html>