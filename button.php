<?php
    if ($_SESSION['username']=="") 
    {
        echo '<a href="sign_in_form.php" class="db dim tc ba br3 b--black-10 pa2 ph0 link black-80 lh-title">';
        echo '<span class="mr2-l mb1 fa fa black fa-sign-in" style="vertical-align: sup"></span>';
        echo '<span class="ml1-ns fw7 f7 f6-l black underline-hover">Login</span>';
        echo '</a>';
    }
    else {
        echo "<form action=\"button_sign_out.php\" method=\"POST\" accept-charset=\"utf-8\">";
        echo "<button type=\"submit\" class=\"db bg-white w-100 fw7 dark-red dim tc ba br3 b--black-10 pa2 ph0 link black-80 lh-title\">";
        echo "<span class=\"mb1 mr2 dark-red fa fa-sign-out\" style=\"vertical-align: sup\"></span>Sign Out</button>";
        echo "</form>";
        //echo '<a href="main.php?username=""" class="db dim tc ba br3 b--black-10 pa2 ph0 link black-80 lh-title">';
        //echo '<span class="mr2-l mb1 fa fa dark-red fa-sign-out" style="vertical-align: sup"></span>';
        //echo '<span class="ml1-ns fw7 f7 f6-l dark-red underline-hover">Logout</span>';
        //echo '</a>';
    }
    //Засунь сюда js код который будет обнулять переменные сессии во внешнем файле, а затем обновлять страницу
?>