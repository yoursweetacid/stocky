<?php
session_start();
$id_user = $_SESSION['id_user'];

include ("bd.php");
include ("header.php");
$query_likes = "SELECT * from  fav where id_user = '$id_user'";
function fav($query1, $start, $step, $database){
    $likes = get_multiple($query1, $database);
    for ($j = $start; $j < count($likes); $j += $step) {
        $likes_id_image = $likes[$j]["id_image"];
        $query2 = "SELECT * from images, user where user.id_user = '$id_user' and images.id_image = '$likes_id_image' union select * from images img inner join user usr on usr.id_user = img.id_user where img.id_image='$likes_id_image';";

        $photos = get_multiple($query2, $database);
        //echo '<pre>';
        //print_r($photos);
        //echo '</pre>';
        $photos_id_image = $likes_id_image;
        $photos_id_user = $photos[0]["usr.id_user"];
        echo $photos_id_user;
        $photos_image_name = $photos[0]["image_name"];
        $photos_file_name = $photos[0]["file_name"];
        $photos_uploaded_on = $photos[0]["uploaded_on"];
        $photos_tags = $photos[0]["tags"];
        $photos_hue = $photos[0]["hue"];
        $photos_username = $photos[0]["username"];
        
        echo '<div class="mt2 mb3 db b--black-10 br3 ba tc no-underline black sans-serif">'; 
        echo '<img class="db br3 br--top w-100" src="images/photos/'.$photos_file_name.'">';
        echo '<div class="pa3 tl pv2">';
        echo '<form action="search.php" method="POST" accept-charset="utf-8">';
        echo '<input type="submit" name="submit" class="btn-txt mr2 dim link f7 fw4 sans-serif" value="@'.$photos_username.'">';
        echo    '<a href="#" class="link f7 fw4 lh-solid">';
        echo        '<span class="mr2 black-40  dim">'.$photos_uploaded_on.'</span>'; 
        echo    '</a>';
        echo '<input type="hidden" class="" name="query2" value="'.$photos_username.'" />';
        echo '</form>';
        echo '</div>';
        echo '<div class="cf pa3">';
        echo   '<div class="fl  tl w-75 w-50-m">';
        echo        '<b class="mr2 tl f5 f7-m lh-solid">'.$photos_image_name.'</b>';
        echo    '</div>';
        echo '</div>';
        echo '<div class="bt  mt2 b--black-10"></div>';
        echo '<div class="tl pa3 pt2">';
        $tags_arr = explode(' ', $photos_tags);
        foreach ($tags_arr as $tag){
            echo '<form action="search.php" method="POST" accept-charset="utf-8" class="dib">';
            echo '<input type="submit" name="submit" class="btn-txt mr2 black-60 dim" style="font: inherit; font-size:.75rem;" value="#'.$tag.'">';
            echo '<input type="hidden" class="fl" name="query3" value="'.$tag.'" />';
            echo '</form>';
        }
        echo '<form action="search.php" method="POST" accept-charset="utf-8" class="dib">';
        echo '<input type="submit" name="submit" class="btn-txt mr2 black-60 dim" style="font: inherit; font-size:.75rem;" value="#'.ucfirst($photos_hue).'">';
        echo '<input type="hidden" class="fl" name="query4" value="'.$photos_hue.'" />';
        echo '</form>';    

        echo '</div></div>';
    }
    
}
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
                        <?php @fav($query_likes, 0, 2, $database); ?>
                    </div>
                    <div class="fl w-100 w-50-ns ph2">
                    <?php @fav($query_likes, 1, 2, $database); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include ("footer.php"); ?>