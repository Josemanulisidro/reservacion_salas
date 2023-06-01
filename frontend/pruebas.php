<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRUEBAS</title>
</head>
<body>
    <?php
    include('bootstrap.php');
    date_default_timezone_set('America/Mexico_City');
    ?>
    
<H1>PRUEBAS</H1>
<?php
function tiempo_ini(){
  //año-mes-dia hora:minutos:segundos
$fecha_ini = '2023-02-02 16:00:00';
return $fecha_ini;
}
?>
<div id="id" class="caja"></div>

<script>
      var fecha1 = "<?php echo tiempo_ini(); ?>";
    console.log(fecha1);
    timer_1(fecha1);

 function timer_1(data) {
        
          //Establecer la fecha en la que estamos contando hacia atrás
          var countDownDate = new Date(data).getTime();

          //Actualizar la cuenta regresiva cada 1 segundo
          var x = setInterval(function() {

            //Obtener la fecha y hora actuales
            var now = new Date().getTime();

            //Encontrar la distancia entre ahora y la fecha de cuenta regresiva
            var distance = countDownDate - now;

            //Cálculos de tiempo para días, horas, minutos y segundos
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            //Mostrar el resultado en el elemento con id = "demo"
            document.getElementById('id').innerHTML = hours + "h " + minutes + "m " + seconds + "s ";

            //Si la cuenta regresiva ha terminado, escriba un texto
            if(hours == 0 && minutes <= 7){
                document.getElementById('id').style.color = 'green';
            }
            if (distance < 0) {
              clearInterval(x);
              document.getElementById('id').innerHTML = "<h1>EXPIRED</h1>";
              document.getElementById('id').style.color = 'blue';
            }
          }, 1000);
        }
</script>



<div id="idd"></div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function alerta(){
   Swal.fire({
  title: 'Error al actualizar! intentelo de nuevo',
  showClass: {
    popup: 'animate__animated animate__fadeInDown'
  },
  hideClass: {
    popup: 'animate__animated animate__fadeOutUp'
  }
})
}
</script>

<button onclick="alerta()">boton</button>


</body>
</html>