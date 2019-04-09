<?php
session_start();
$query = $_POST["query"];
//echo $query;
$query_user = "SELECT * FROM `images` inner join user on images.id_user = user.id_user WHERE image_name like '%$query%' or hue like '%$query%' ORDER BY images.uploaded_on DESC";
$query_user_photo = "SELECT * FROM `images` inner join user on images.id_user = user.id_user WHERE username = '%$query%' ORDER BY images.uploaded_on DESC";
//echo $query_user;
include ("bd.php");
include ("header.php");
function search($query, $start, $step, $database){
    $photos = get_multiple($query, $database);
    for ($i = $start; $i < count($photos); $i += $step){
        $photos_id_image = $photos[$i]["id_image"];
        $photos_id_user = $photos[$i]["id_user"];
        $photos_image_name = $photos[$i]["image_name"];
        $photos_file_name = $photos[$i]["file_name"];
        $photos_uploaded_on = $photos[$i]["uploaded_on"];
        $photos_tags = $photos[$i]["tags"];
        $photos_hue = $photos[$i]["hue"];
        $photos_username = $photos[$i]["username"];
        //echo "<pre>";
        //echo $photos_username;
        //echo "</pre>";
        echo '<div class="mt2 mb3 db b--black-10 br3 ba tc no-underline black sans-serif">'; 
        echo '<img class="db br3 br--top w-100" src="images/photos/'.$photos_file_name.'">';
        echo '<div class="pa3 tl pv2">';
        echo    '<a href="#" class="link f7 fw4 lh-solid">';
        echo        '<span class="mr2 black-80 dim">@'.$photos_username.'</span>';
        echo    '</a>';
        echo    '<a href="#" class="link f7 fw4 lh-solid">';
        echo        '<span class="mr2 black-40 dim">'.$photos_uploaded_on.'</span>'; 
        echo    '</a>';
        echo '</div>';
        echo '<div class="cf pa3">';
        echo   '<div class="fl  tl w-75 w-50-m">';
        echo        '<b class="mr2 tl f5 f7-m lh-solid">'.$photos_image_name.'</b>';
        echo    '</div>';
        echo '<form action="add_to_fav.php" method="POST" accept-charset="utf-8">';
        echo '<input type="hidden" class="" name="id_image" value="'.$photos_id_image.'" />';
        $id_user = $_SESSION["id_user"];
        $query6 = "SELECT * from fav where id_image = '$photos_id_image' and id_user = '$id_user'";
        if (count(get_single($query6, $database)) == 0 && isset($_SESSION["id_user"])){
            
            echo '<input type="submit" name="submit" class="btn-txt mr2 dim link f7 fw4 sans-serif" value="Like">';
        } else if (count(get_single($query6, $database)) !== 0 && isset($_SESSION["id_user"])){
            echo '<input type="submit" name="submit" class="btn-txt mr2 dim link f7 fw4 sans-serif" value="Unlike">';
        } else {};
        
        echo '</form>';
        //echo    '<div class="fl dim pl1-m tr w-25 w-50-m">';
        //echo        '<span class="f7 ba br3 b--black-10 pa2 fw4 lh-solid">'; 
        //echo           '<span class="tr fw4  f6 lh-solid">38</span>';
        //echo           '<span class="tl fa fa-lg fa-heart-o" style="vertical-align: middle"></span>';
        //echo        '</span>' ;
        //echo    '</div>';
        echo '</div>';
        echo '<div class="bt  mt2 b--black-10"></div>';
        echo '<div class="tl pa3 pt2">';
        $tags_arr = explode(' ', $photos_tags);
        foreach ($tags_arr as $tag){
            echo  '<a href="#" class="link f7 fw4 lh-solid">';
            echo '<span class="mr2 black-60 dim">#'.$tag.'</span>'; 
            echo '</a>';
        }
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
                            echo "<h2 class=\"f5 fw4 f7 f5-m f5-l gray mt0\">@".$username."</h2>";
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
                        <?php @search($query_user_photo, 0, 2, $database); ?>
                    </div>
                    <div class="fl w-100 w-50-ns ph2">
                    <?php @search($query_user_photo, 1, 2, $database); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php 
include ("footer.php");
?>