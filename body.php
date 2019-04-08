<?php
include("bd.php");
include("show_photo.php");
?>
<body class="bg-near-white">
    <div class="cf ph2-ns">
        <div class="fl w-25 pa2 sticky">
            <div >
                <div class="mw6 center baskerville bg-white br3 pt4 pb2 mw3 ba b--black-10">
                    <div class="tc">
                        <img src="images/userpics/no.jpg" class="br-100 h3 w3 dib ba b--black-10 pa2" title="Photo of a kitty staring at you">
                        
                        <?php 
                        if (isset($_SESSION["id_user"]))
                        {
                            
                
                            $id_user = $_SESSION["id_user"];
                
                            $user = get_single("SELECT * FROM user WHERE id_user = $id_user", $database);
                
                            $username = $user["username"];
                            $email = $user["email"];
                            $name = $user["name"];
                            $surname = $user["surname"];


                            echo "<h1 class=\"f4-l f4-m f5 mb2\">".$name." ".$surname."</h1>";
                            echo '<form action="search.php" method="POST" accept-charset="utf-8">';
                            echo '<input type="submit" name="submit" class="btn-txt mr2 dim link f7 fw4" style="font: inherit;" value="@'.$username.'">';
                            echo '<input type="hidden" class="" name="query2" value="'.$username.'" />';
                            echo '</form>';



                            
                            //echo "<h2 class=\"f5 fw4 f7 f5-m f5-l gray mt0\">@".$username."</h2>";
                            include("buttons.php");

                        }
                        else {
                            
                            echo "<h1 class=\"f4-l f4-m f5 mb2\">Hi, stranger</h1>";
                            echo "<h2 class=\"f5 fw4 f7 f5-m f5-l gray mt0\">Login or register</h2>";
                        }
                        ?>
                        
                    </div>
                    
                    
                    
                    <div class="tl ph1 ph2-m ph3-l">
                        <span class="f7 fw4 lh-solid">
                           <ul class="list pl0 pb2 f6 mt3 mb0 sans-serif"> 
                               <li class="pv2 w-auto ph1 ph2-l mh2-l">
                                  
                                    <?php 
                                    include ("button.php"); 
                                    ?>
                                  
                               </li>
                           </ul>
                        </span>
                       </div>
                        
                 
                    </div>
            </div>
        </div>
        <div class="fl w-75 pr2 pt2 pl2 ">
            <div class="bg-white b--black-10 br bl bt br3 br--top">
                <div class="cf pa2">
                    <div class="fl w-100 w-50-ns ph2">
                        <?php @show_col($query_user, 0, 2, $database); ?>
                    </div>
                    <div class="fl w-100 w-50-ns ph2">
                    <?php @show_col($query_user, 1, 2, $database); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>