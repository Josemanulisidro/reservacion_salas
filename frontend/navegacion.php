
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navegacion</title>
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/SweetAlert/sweetalert2.css">
    <link rel="shortcut icon" href="../css/logoGK.png" type="image/ico">
    <link rel="shortcut icon" href="../css/logoGK.jpg" type="image/ico">  
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
$area = $_SESSION['area2'];
if ($_SESSION['active']) {
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <?php
      if($rol_usu == 1){
      ?>
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="adm_usuarios.php">Administrador de Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="adm_salas.php">Administrador de Salas</a>
        </li>
        <?php
      }
      ?>

      <?php
      if($rol_usu == 2){
      ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="adm_usuarios.php" hidden></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="adm_salas.php" hidden></a>
        </li>
      <?php
      }
      ?>

        
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="salas.php">Salas</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Opciones
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php
      if($rol_usu == 1){
      ?>
            <li><a class="dropdown-item" href="Historial.php">Historial</a></li>
            <?php
            }?>
               <?php
      if($rol_usu == 2){
      ?>
            <li><a class="dropdown-item" href="Historial.php" hidden></a></li>
      <?php
      }?>
            <li><a class="dropdown-item" href="calendario.php">Calendario</a></li>
          </ul>
        </li>
        <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="../backend/salir.php" >Salir</a>
        </li>
        <li class="nav-item">
      <h3 class="h3">Bienvenido <?php echo $nombre_usu?></h3>
        </li>
      </ul>
     
      
      
    </div>
  </div>
</nav>
<script src="../css/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../css/SweetAlert/sweetalert2.js"></script>

<?php
}else{
  header('location: ../index.php');
}
?>

</body>
</html>