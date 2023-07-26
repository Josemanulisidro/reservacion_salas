<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incio de sesion Salas</title>
    <link rel="stylesheet" href="../css/loguin.css">
    <link rel="shortcut icon" href="../css/Logo.png" />
</head>
<body>
   
    <?php
    include('bootstrap.php');
        ?>
    <center>
    <div class="container" style="margin-top:300px;">
    <div class="card" style="width: 500px;">
    <h1>Iniciar sesión</h1>
        <form action="../backend/loguin.php" method="POST">

            <div class="form-floating mb-4">
                <input type="text" name="user" class="form-control" id="floatingInput" placeholder="Username">
                    <label for="floatingInput"><center><h5>Usuario</h5></center></label>
            </div>
            <div class="form-floating mb-4">
                <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword"><h5>Password</h5></label>
            </div> 
            <button type="submit" class="btn btn-primary btn-lg">Iniciar sesión</button>
        </form>
            <!-- <a href="registrar_usu.php"><button class="btn btn-secondary btn-lg">Registrar</button></a> -->
            </div>  
            
    </div>  
    </div> 
    </center> 


    <?php
 session_start();
 session_destroy();

    ?>
</body>
</html>