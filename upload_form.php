<?php 
session_start();
include ("header.php");
?>
<link rel="stylesheet" type="text/css" href="css/tachyons.min.css">
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
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

<body class="bg-near-white">
<article class="pa5 pt2 black-80">
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <div class="mt3">
    <label class="db fw4 lh-copy f6" for="username"> Select Image File to Upload</label>
    <input type="file" name="file" class="pa2 input-reset ba br3 b--black-10 bg-white w-100 measure" onchange="preview_image(event)">
    </div>
    <img id="i" class="mt3 dib  br3 w-25"/>
    <div class="mt3">
    <label class="db fw4 lh-copy f6" for="username">Type photo name and insert tags</label>
    <input class="pa2 input-reset ba br3 b--black-10 bg-white " type="text" name="image_name" required>
    <input class="pa2 input-reset ba br3 b--black-10 bg-white " type="text" name="tags" required value="Tags">
    </div>
    <input type="hidden" name="hue" id="hue" value="" />
    <div class="mb5 mt3">
    <input type="submit" class="b mb6 mt3 ph3 pv2 input-reset ba br3 b--black-50 bg-white pointer f6" name="submit" id="get_color" value="Upload">
  </div>
        

    
    
</form>
<p id="demo" ></p>
</article>
</body>
<script src="js/get_color.js"></script>
<?php include ('footer.php'); ?>
