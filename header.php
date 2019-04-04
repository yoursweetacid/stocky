<!DOCTYPE html>
<html>
<head >
    <link rel="stylesheet" type="text/css" href="css/tachyons.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <title>Stocky</title>
    <nav class="db bg-white dt-l w-100 border-box ph3-l pv3 bb mb2 b--black-10 ph3">
        <a class="db dtc-l v-mid mid-gray link dim w-100 w-25-l tc tl-l mb0-l" href="index.php" title="Home">
            <img src="images/userpics/logo.png" class="dib w4 h3 pr7-l br-100" alt="Site Name">
        </a>
        <div class="tc pl4-l dib-l pt2-l pb0-l pb3">
        <form action="search.php" method="POST" accept-charset="utf-8">
        <div class="dtc-l pl2-l dib w-10-l">
            
                <div id="search" class="ba b--transparent ph0 mh0">
                    <div class="dib">
                    <input class="b pa2 input-reset ba b--black-10 br3 bg-transparent" type="search" name="query" id="search">
                    <span class="fa  fa-search sspan-l black-20 sspan"  ></span>
                    </div>
                </div>
                
                
        </div>
        <div class="dim dib dtc-l pl3-l pl2" ><input class="b ph3 pv2 input-reset ba b--black-10 br3 dark-gray fw4 bg-transparent pointer f6"  type="submit" value="Search"></div> 
        </form> 
        </div>
        <div class="db dtc-l v-mid w-100 w-75-l tc baskerville tr-l">
            <a class="link dim dark-gray f6 f5-l dib mr3 mr4-l underline-hover" href="index.php" title="Home">Home</a>
            <a class="link dim dark-gray f6 f5-l dib mr3 mr4-l underline-hover" href="stream.php" title="Stream">Stream</a>
            <a class="link dim dark-gray f6 f5-l dib mr3 mr4-l underline-hover" href="privacy.php" title="Privacy">Privacy</a>
            <?php 
                include ("link.php");
            ?>
        </div>
    </nav>
</head>