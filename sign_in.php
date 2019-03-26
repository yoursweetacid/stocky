<?php
session_start();
include("bd.php");

function refine($text)
{
    if (!isset($text))
        return "";
    return trim(htmlspecialchars(stripslashes($text)));
}

$username = refine($_POST["username"]);
$password = refine($_POST["password"]);

$user = get_single("SELECT id_user, username, password FROM user WHERE username LIKE '$username'", $database);
if (!$user || !password_verify($password, $user["password"]))
{
    include ("header.php");
    include ("sign_in_error.php");
    include ("footer.php");
    }
else
{   
    $_SESSION["id_user"] = $user["id_user"];
    $_SESSION["username"] = $user["username"];
echo "<span>Добро пожаловать</span>";
header("Location: http://localhost/test.dev/stocky/index.php");
exit;
  
}
?>