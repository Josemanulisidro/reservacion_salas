
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salas</title>
</head>
<body>
    <?php
    session_start();
    $id_usu = $_SESSION['id_usu'];
    $nombre_usu = $_SESSION['nombre'];
    $passw_usu = $_SESSION['password']; 
    $fecha_usu = $_SESSION['fecha'];
    $rol_usu = $_SESSION['id_rol1']; 
       if ($_SESSION['active']) {
    include('navegacion.php');
    include('../backend/salas.php');
    $salas = new Salas();
    ?>
        <?php
       $result_salas = $salas->getSalas();
       while ($row = $result_salas->fetch_assoc()) {
        ?>
        <div class="container" style="background-color:#ECCD22; width:300px; margin-left: 5px;padding: 0px; border: 1px solid black;display: ">
                <div class="btn-group-vertical" draggable="true" style="">
                    <div id="boton" style="clip-path: polygon(0 24%, 51% 0, 100% 24%, 100% 100%, 0% 100%);font-size: 80px; background-color:#03BB85; "><?php echo $row['nom_salas']; ?></div>
                    <form action="reservar.php" method="POST">
                        <input type="hidden" name="id_s" value="<?php echo $row['id_salas']; ?>" >
                        <input type="hidden" name="nom_s" value="<?php echo $row['nom_salas']; ?>">
                        <input type="hidden" name="id_usu" value="<?php echo $id_usu; ?>">
                        <input type="hidden" name="nom_usu" value="<?php echo $nombre_usu; ?>">
                        <button type="submit" class="btn btn-primary">Reservar</button>
                    </form>
                </div>  
        </div>
        <?php
        }
        ?>

         <div style="background-color:grey;width:500px;height:400px;" id="contenedor_llegada" ></div> 

        
        <script>
       var boton;
        var contenedor_llegada;

        function comenzar(e){
            // dragstart: desencadena la acción al comenzar a arrastrar
            boton = document.getElementById('boton');
            boton.addEventListener("dragstart",comenzamos_arrastrar,false);

            // dragenter: Cuando el raton entra al area de destino
            contenedor_llegada = document.getElementById('contenedor_llegada');
            contenedor_llegada.addEventListener("dragenter",function(e){
                e.preventDefault();
            },false);
            // dragover: Cuando el raton se mueve sobre el area de destino
            contenedor_llegada.addEventListener("dragover",function(e){
                e.preventDefault();
            },false);
            // drop: Cuando el elemento es soltado en el area de destino
            contenedor_llegada.addEventListener("drop", soltado,false);

            boton.addEventListener("dragover",terminado,false);
        }

        function comenzamos_arrastrar(e){
            var codigo = "<button type='button' draggable='true' class='btn btn-primary' id='boton' style='clip-path: polygon(0 24%, 51% 0, 100% 24%, 100% 100%, 0% 100%);font-size: 80px; '>1" + boton.getAttribute('') + "</button>";
            e.dataTransfer.setData("Text",codigo);
        }
        function soltado(e){
            e.preventDefault();
            contenedor_llegada.innerHTML = e.dataTransfer.getData('Text');
        }
        function terminado(e){
            var elemento = e.target;
            elemento.style.visibility = "hidden";
        }
        window.addEventListener("load", comenzar, false);
        </script>

<?php
    }else{
        include('../backend/salir.php');
    }
?>

</body>
</html>

