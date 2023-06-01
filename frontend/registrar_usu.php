<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
</head>
<body>
    <?php
    include('bootstrap.php');
    ?>
    <center>
    <div class="container" style="margin-top:80px;">
    <div class="card" style="width: 500px;">
    <h1>Registro de Usuarios</h1>
        <form action="../backend/registrar_usu.php" method="POST">
            <div class="form-floating mb-2">
                <input type="text" name="user" class="form-control" id="floatingInput" placeholder="Username" require>
                    <label for="floatingInput"><h5>Usuario</h5></label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password" require>
                    <label for="floatingPassword"><h5>Password</h5></label>
            </div>
                <input name="fecha" value="<?php echo date("Y-m-d H:i:s"); ?>" hidden>  
            <select name="rol" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected><h5>Selecciona el rol</h5></option>
                <option value="1">Administrador</option>
                <option value="2">Usuario</option>
            </select>
            <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
        </form>
            <a href="loguin.php"><button class="btn btn-secondary btn-lg">Regresar</button></a>
    </div>  
    </div>
    </center>      
</body>
</html> -->