<?php 
session_start();
unset($_SESSION["username"]);
unset($_SESSION["id_user"]);
header("Location: http://localhost/test.dev/stocky/index.php");
?>