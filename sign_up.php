<?php
session_start();
include ('bd.php');
  
function refine($text)
{
    if (!isset($text))
        return "";
    return trim(htmlspecialchars(stripslashes($text)));
}
  
$username = refine($_POST["username"]);
$password = refine($_POST["password"]);
$email = refine($_POST["email"]);
$name = refine($_POST["name"]);
$surname = refine($_POST["surname"]);
$captcha = strtolower(refine($_POST["captcha"]));

    
     if (!password_verify($captcha, $_SESSION["captcha"]))
     {
         echo "<div class='row'>";
         echo "<div class='col-md-6'>";
         echo "<div class='section-title' style='text-align:left;float:left;width:100%;margin-bottom:0'>";
         echo "<span>Wrong code</span>";
         echo "</div>";
         echo "</div>";
         echo "</div>";
         echo "<a href='sign_up_form.php'><p class='montserrat-text uppercase'>Go back</p></a>";
         
     }
     else
     {
     
         $duplicate = get_single("SELECT id_user FROM user WHERE username LIKE '$username'", $database);
         if (@count($duplicate) !== 0)
         {
            include ("header.php");
            include ("sign_up_error.php");
            include ("footer.php");
             
         }
         else
         {
             $hash = password_hash($password, PASSWORD_BCRYPT);
             $success = $database->query("INSERT INTO user (username, password, email, name, surname) VALUES ('$username', '$hash', '$email', '$name', '$surname')");
     
             if ($success)
             {
                 $user = @get_single("SELECT id_user, username FROM user WHERE username LIKE '$username'", $database);
     
                 $_SESSION["id_user"] = $user["id_user"];
                 $_SESSION["username"] = $user["username"];
     
                 
                 //echo "<div class='section-title'>";
                 //echo "<span>Registration is completed saccessfully</span>";
                 //echo "</div>";
                 //echo "<a href='index.php'><p class='baskerville'>Go to main</p></a>";
                 header("Location: http://localhost/test.dev/stocky/index.php");
                 exit;
               
                
     
             }
             else
             {
                 echo "<div class='row'>";
                 echo "<div class='col-md-6'>";
                 echo "<div class='section-title' style='text-align:left;float:left;width:100%;margin-bottom:0'>";
                 echo "<span>Autorization error</span>";
                 echo "</div>";
                 echo "</div>";
                 echo "</div>";
                 echo "<a href='sign_in_form.php'><p class='baskerville'>Go back</p></a>";
                
             }
         }
     }
   
?>