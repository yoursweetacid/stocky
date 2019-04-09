<?php
session_start();
include ("bd.php");
$id_image = $_POST["id_image"];
$id_user = $_SESSION["id_user"];
$query = "SELECT * from fav where id_image = '$id_image' and id_user = '$id_user'";
if (count(get_single($query, $database)) == 0){
    $database->query("INSERT INTO fav (id_user, id_image) VALUES ('$id_user', '$id_image')");
} else {
    $database->query("delete from fav where id_user = '$id_user' and id_image='$id_image'");
}
header("Location: http://localhost/test.dev/stocky/index.php");
?>