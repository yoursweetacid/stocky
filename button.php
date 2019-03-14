<?php
    if ($_SESSION['login']=="") 
    {
        echo '<a href="" class="db dim tc ba br3 b--black-10 pa2 ph0 link black-80 lh-title">';
        echo '<span class="mr2-l mb1 fa fa black fa-sign-in" style="vertical-align: sup"></span>';
        echo '<span class="ml1-ns fw7 f7 f6-l black underline-hover">Login</span>';
        echo '</a>';
    }
    else {
        echo '<a href="" class="db dim tc ba br3 b--black-10 pa2 ph0 link black-80 lh-title">';
        echo '<span class="mr2-l mb1 fa fa dark-red fa-sign-out" style="vertical-align: sup"></span>';
        echo '<span class="ml1-ns fw7 f7 f6-l dark-red underline-hover">Logout</span>';
        echo '</a>';
    }
?>