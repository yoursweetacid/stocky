<?php 
session_start();
$_SESSION["id_user"] = "9";
$_SESSION["username"] = "yoursweetacid";
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select Image File to Upload:
    <input type="file" name="file">
    <input type="text" name="name">
    <input type="submit" name="submit" value="Upload">
</form>