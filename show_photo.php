<?php
//include ("bd.php");
$query = $database->query("SELECT * FROM images ORDER BY uploaded_on DESC");
$query_user_quantity = $database->query("SELECT images.id_image, images.id_user, images.image_name, images.file_name, images.uploaded_on, images.tags, images.hue, user.username FROM images inner join user on images.id_user = user.id_user ORDER BY images.uploaded_on DESC");
//$quantity = $query->num_rows;
$user_quantity = $query_user_quantity->num_rows;
//echo $user_quantity;
//echo gettype($query_user);



$query_user = "SELECT images.id_image, images.id_user, images.image_name, images.file_name, images.uploaded_on, images.tags, images.hue, user.username FROM images inner join user on images.id_user = user.id_user ORDER BY images.uploaded_on DESC";
/*
echo '<pre>';
echo gettype((get_multiple($query_user, $database)));
print_r(get_multiple($query_user, $database));
echo '</pre>';
*/


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
        echo    '<div class="fl dim pl1-m tr w-25 w-50-m">';
        echo        '<span class="f7 ba br3 b--black-10 pa2 fw4 lh-solid">'; 
        echo           '<span class="tr fw4  f6 lh-solid">38</span>';
        echo           '<span class="tl fa fa-lg fa-heart-o" style="vertical-align: middle"></span>';
        echo        '</span>' ;
        echo    '</div>';
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




/*
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>
*/
?>
