<?php
session_start();
header("location: ../frontend/login.php");
session_unset();
session_destroy();

exit();
?>