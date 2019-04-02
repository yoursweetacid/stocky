<?php 
session_start();
$_SESSION["id_user"] = "9";
$_SESSION["username"] = "yoursweetacid";
?>

<script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('i');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
 
}


</script>
<style>
body
{
 width:100%;
 margin:0 auto;
 padding:0px;
 font-family:helvetica;
 background-color:#0B3861;
}
#wrapper
{
 text-align:center;
 margin:0 auto;
 padding:0px;
 width:995px;
}
#i
{
 max-width:300px;
}
</style>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    Select Image File to Upload:
    <input type="text" name="tags" required value="Tags">
    <input type="file" name="file" onchange="preview_image(event)">
    <input type="text" name="image_name" required>
    <input type="submit" name="submit" value="Upload">
    
        
    <img id="i"/>
    
</form>
<p id="demo"></p>
<script src="get_color.js"></script>
