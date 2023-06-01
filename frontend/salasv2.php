<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salas</title>
</head>
<body>



      <div class="btn-group btn-group-justified" id="zona1" style="position: relative; left: -300px; right:300px; top: -50px; z-index: 2 display:inline-block; height:140px;">
    
    </div>
      

    <?php
       function getSalas(){
        include('../backend/conexion.php');
        $sql = "SELECT * FROM salas ORDER BY posicion";
        $result = $conexion->query($sql);
        while($row = $result->fetch_assoc()){
            $id_sala = $row['id_salas'];
            $nom_sala = $row['nom_salas'];
            $descrip_sala = $row['descrip_salas'];
            $posicion = $row['posicion'];
            
            $cadena = "<div Style='width:50px;height:50px';backgroud:yellow> " . $id_sala . " </div>";
        }
            return $cadena;
        }


    
    ?>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
      function habitaciones() {
          var zona1 = "<?php echo getSalas(); ?>"
          $('#zona1').html(zona1);
          
        }
        document.body.onload = function() {

        habitaciones()
        }
    </script>


</body>
</html>