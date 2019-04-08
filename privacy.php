<?php
session_start();
include ("bd.php");
include("header.php");
$query = "SELECT * FROM privacy"; 
echo get_single($query, $database)["data"];
include("footer.php")
?>