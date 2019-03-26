<?php
    session_start();
    if (isset($_SESSION['username']))
        {}
    else
    {$_SESSION['username']="";}

    include("header.php");
    //$_SESSION['username']="Nik";
?>
<html>
<!--<iframe alloytransparency seamless name="CONTENT" src="signin.php" align="center" width="100%"  style="border: 0;">Ваш браузер не поддерживает iframe</iframe>-->
</html>
<?php 
//echo "<a href=\"signup.html\" target=\"CONTENT\">Регистрация</a></center>";
include("body.php");
include("footer.php");
?>