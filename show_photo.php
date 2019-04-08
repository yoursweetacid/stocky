<?php
$query = $database->query("SELECT * FROM images ORDER BY uploaded_on DESC");
$query_user_quantity = $database->query("SELECT images.id_image, images.id_user, images.image_name, images.file_name, images.uploaded_on, images.tags, images.hue, user.username FROM images inner join user on images.id_user = user.id_user ORDER BY images.uploaded_on DESC");
$user_quantity = $query_user_quantity->num_rows;
$query_user = "SELECT images.id_image, images.id_user, images.image_name, images.file_name, images.uploaded_on, images.tags, images.hue, user.username FROM images inner join user on images.id_user = user.id_user ORDER BY images.uploaded_on DESC";

function show_col($query, $start, $step, $database){
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
        $tmp = strtoupper(substr($hue, 0, 1));
        //echo $tmp;
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
