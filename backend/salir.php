<?php
session_start();
header("location: ../frontend/loguin.php");
session_unset();
session_destroy();

exit();
?>