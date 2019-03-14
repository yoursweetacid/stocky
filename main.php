<?php
    session_start();
    if (isset($_SESSION['login']))
        {}
    else
    {$_SESSION['login']="";}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/tachyons.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <title>Stocky</title>
    <nav class="db bg-white dt-l w-100 border-box ph3-l pv3 mb2 bb b--black-10 ph3">
        <a class="db dtc-l v-mid mid-gray link dim w-100 w-25-l tc tl-l mb2 mb0-l" href="#" title="Home">
            <img src="images/userpics/logo.png" class="dib w4 h3 pr7-l br-100" alt="Site Name">
        </a>
        <div class="tc pl4-l dib-l pt2-l pb0-l pb3">
        <div class="dtc-l pl2-l dib w-10-l">
            <form action="search" method="get" accept-charset="utf-8">
                <fieldset id="search" class="ba b--transparent ph0 mh0">
                    <div>
                    <input class="b pa2 input-reset ba b--black-10 br3 bg-transparent" type="search" name="search"  id="search">
                    <span class="fa  fa-search sspan-l black-20 sspan"  ></span>
                    </div>
                </fieldset>
            </form>
             
        </div>
        <div class="dim dib dtc-l pl3-l pl2" ><input class="b ph3 pv2 input-reset ba b--black-10 br3 dark-gray fw4 bg-transparent pointer f6"  type="submit" value="Search"></div> 
        </div>
        
        <div class="db dtc-l v-mid w-100 w-75-l tc baskerville tr-l">
            <a class="link dim dark-gray f6 f5-l dib mr3 mr4-l underline-hover" href="#" title="Home">Home</a>
            <a class="link dim dark-gray f6 f5-l dib mr3 mr4-l underline-hover" href="#" title="Blog">Blog</a>
            <a class="link dim dark-gray f6 f5-l dib mr3 mr4-l underline-hover" href="#" title="Blog">Terms</a>
            <a class="link dim dark-gray f6 f5-l dib mr3 mr4-l underline-hover" href="#" title="Blog">Privacy</a>
        </div>
    </nav>
</head>
<body class="bg-near-white">
    <div class="cf ph2-ns">
        <div class="fl w-25 pa2 ">
            <div>
                <article class="mw6 center baskerville bg-white br3 pt4 pb2 mw3 ba b--black-10">
                    <div class="tc">
                        <img src="images/userpics/admin.jpg" class="br-100 h3 w3 dib ba b--black-10 pa2" title="Photo of a kitty staring at you">
                        <h1 class="f4-l f4-m f5 mb2">Nikita Levchenko</h1>
                        <h2 class="f5 fw4 f7 f5-m f5-l gray mt0">@yoursweetacid, designer</h2>
                    </div>
                    <div class="bt mt2 b--black-10"></div>
                    <div class="tl ph3-l ph1 ph2-m ph3-l">
                        <span class="f7 fw4 lh-solid">
                            <ul class="list pl0 pb2 f6 mt3 mb0 sans-serif"> 
                                <li class="pv2 w-auto ph1 ph2-l mh2-l">
                                    <a href="#" class="db dim tc ba br3 b--black-10 pa2 ph0 link black-80 lh-title">
                                        <span class="mr2-l mb1 fa fa fa-wrench vertical-align: middle"></span>
                                        <span class="ml1-ns fw7 f7 f6-l underline-hover">Edit Settings</span>
                                    </a>
                                </li> 
                                <li class="pv2 w-auto ph1 ph2-l mh2-l">
                                    <a href="#" class="db dim tc ba br3 b--black-10 pa2 ph0 link black-80 lh-title">
                                        <span class="mr2-l mb1 fa fa fa-camera vertical-align: middle"></span>
                                        <span class="ml1-ns fw7 f7 f6-l underline-hover">Photos</span>
                                    </a>
                                </li> 
                                <li class="pv2 w-auto ph1 ph2-l mh2-l">
                                    <a href="#" class="db dim tc ba br3 b--black-10 pa2 ph0 link black-80 lh-title">
                                        <span class="mr2-l mb1 fa fa fa-heart vertical-align: middle"></span>
                                        <span class="ml1-ns fw7 f7 f6-l underline-hover">Likes</span>
                                    </a>
                                </li>
                            </ul>
                        </span> 
                    </div>
                    <div class="bt mt2 b--black-10"></div>
                    
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
                        
                 
                </article>
            </div>
        </div>
        <div class="fl w-75 pr2 pt2 pl2 ">
            <div class="bg-white b--black-10 br bl bt br3 br--top">
                <div class="cf pa2">
                    <div class="fl w-100 w-50-ns ph2">
                        <div class="mt2 mb3 db b--black-10 br3 ba tc no-underline black sans-serif"> 
                            <img class="db br3 br--top w-100" src="images/photos/06.jpg">
                            <div class="pa3 tl pv2">
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-80 dim">@yoursweetacid</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-40 dim">April 1, 2019</span> 
                                </a>
                            </div>
                            <div class="cf pa3">
                                <div class="fl  tl w-75 w-50-m">
                                    <b class="mr2 tl f5 f7-m lh-solid">Pattern</b> 
                                </div>
                                <div class="fl dim pl1-m tr w-25 w-50-m">
                                    <span class="f7 ba br3 b--black-10 pa2 fw4 lh-solid"> 
                                        <span class="tr fw4  f6 lh-solid">38</span>
                                        <span class="tl fa fa-lg fa-heart-o" style="vertical-align: middle"></span>
                                    </span> 
                                </div>
                            </div>
                            <div class="bt  mt2 b--black-10"></div>
                            <div class="tl pa3 pt2">
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#White</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#Cubes</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#Are</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#Everywhere</span> 
                                </a>
                            </div>
                        </div>
                        
                        <div class="mt2 mb3 db b--black-10 br3 ba tc no-underline black sans-serif"> 
                            <img class="db br3 br--top w-100" src="images/photos/18.jpg">
                            <div class="pa3 tl pv2">
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-80 dim">@helvete</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-40 dim">April 14, 2019</span> 
                                </a>
                            </div>
                            <div class="cf pa3">
                                <div class="fl  tl w-75 w-50-m">
                                    <b class="mr2 tl f5 f7-m lh-solid">Leafs</b> 
                                </div>
                                <div class="fl dim pl1-m tr w-25 w-50-m">
                                    <span class="f7 ba br3 b--black-10 pa2 fw4 lh-solid"> 
                                        <span class="tr fw4  f6 lh-solid">49</span>
                                        <span class="tl fa fa-lg fa-heart-o" style="vertical-align: middle"></span>
                                    </span> 
                                </div>
                            </div>
                            <div class="bt  mt2 b--black-10"></div>
                            <div class="tl pa3 pt2">
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#Green</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#Leafs</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#Look</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#Very</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#Fabulous</span> 
                                </a>
                            </div>
                        </div>
                        
                        <div class="mt2 mb3 db b--black-10 br3 ba tc no-underline black sans-serif"> 
                            <img class="db br3 br--top w-100" src="images/photos/16.jpg">
                            <div class="pa3 tl pv2">
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-80 dim">@marblestatue</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-40 dim">March 2, 2019</span> 
                                </a>
                            </div>
                            <div class="cf pa3">
                                <div class="fl  tl w-75 w-50-m">
                                    <b class="mr2 tl f5 f7-m lh-solid">Lightning</b> 
                                </div>
                                <div class="fl dim pl1-m tr w-25 w-50-m">
                                    <span class="f7 ba br3 b--black-10 pa2 fw4 lh-solid"> 
                                        <span class="tr fw4  f6 lh-solid">14</span>
                                        <span class="tl fa fa-lg fa-heart-o" style="vertical-align: middle"></span>
                                    </span> 
                                </div>
                            </div>
                            <div class="bt  mt2 b--black-10"></div>
                            <div class="tl pa3 pt2">
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#White</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#Wire</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#That</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#Charges</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#Your</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#Phone</span> 
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="fl w-100 w-50-ns ph2">
                        <div class="mt2 mb3 db b--black-10 br3 ba tc no-underline black sans-serif"> 
                            <img class="db br3 br--top w-100" src="images/photos/07.jpg">
                            <div class="pa3 tl pv2">
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-80 dim">@yoursweetacid</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-40 dim">May 5, 2019</span> 
                                </a>
                            </div>
                            <div class="cf pa3">
                                <div class="fl  tl w-75 w-50-m">
                                    <b class="mr2 tl f5 f7-m lh-solid">Forest</b> 
                                </div>
                                <div class="fl dim pl1-m tr w-25 w-50-m">
                                    <span class="f7 ba br3 b--black-10 pa2 fw4 lh-solid"> 
                                        <span class="tr fw4  f6 lh-solid">179</span>
                                        <span class="tl fa fa-lg fa-heart-o" style="vertical-align: middle"></span>
                                    </span> 
                                </div>
                            </div>
                            <div class="bt  mt2 b--black-10"></div>
                            <div class="tl pa3 pt2">
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#Green</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#Wood</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#Is</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#Fading</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#Away</span> 
                                </a>
                            </div>
                        </div>
                        
                        <div class="mt2 mb3 db b--black-10 br3 ba tc no-underline black sans-serif"> 
                            <img class="db br3 br--top w-100" src="images/photos/11.jpg">
                            <div class="pa3 tl pv2">
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-80 dim">@handh</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-40 dim">April 26, 2019</span> 
                                </a>
                            </div>
                            <div class="cf pa3">
                                <div class="fl  tl w-75 w-50-m">
                                    <b class="mr2 tl f5 f7-m lh-solid">Another Leafs</b> 
                                </div>
                                <div class="fl dim pl1-m tr w-25 w-50-m">
                                    <span class="f7 ba br3 b--black-10 pa2 fw4 lh-solid"> 
                                        <span class="tr fw4  f6 lh-solid">86</span>
                                        <span class="tl fa fa-lg fa-heart-o " style="vertical-align: middle"></span>
                                    </span> 
                                </div>
                            </div>
                            <div class="bt  mt2 b--black-10"></div>
                            <div class="tl pa3 pt2">
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#Something</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#Beautiful</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#Happens</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#Here</span> 
                                </a>
                            </div>
                        </div>
                        
                        <div class="mt2 mb3 db b--black-10 br3 ba tc no-underline black sans-serif"> 
                            <img class="db br3 br--top w-100" src="images/photos/12.jpg">
                            <div class="pa3 tl pv2">
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-80 dim">@divinity</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-40 dim">April 1, 2019</span> 
                                </a>
                            </div>
                            <div class="cf pa3">
                                <div class="fl  tl w-75 w-50-m">
                                    <b class="mr2 tl f5 f7-m lh-solid">Flower</b> 
                                </div>
                                <div class="fl dim pl1-m tr w-25 w-50-m">
                                    <span class="f7 ba br3 b--black-10 pa2 fw4 lh-solid"> 
                                        <span class="tr fw4  f6 lh-solid">165</span>
                                        <span class="tl fa fa-lg fa-heart-o" style="vertical-align: middle"></span>
                                    </span> 
                                </div>
                            </div>
                            <div class="bt  mt2 b--black-10"></div>
                            <div class="tl pa3 pt2">
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#I</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#Am</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#So</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#Tired</span> 
                                </a>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    <footer style="background-image:url(images/background/bg_04.gif);" class="white-80 pv4 ph5 cover">
        <p class="f6 db v-mid w-100 tc"><span class="dib mr4 mr5-ns">©2019 Stocky</span>
            <a class="link white-80 hover-green" href="/terms">Terms</a> /
            <a class="link white-80 hover-green" href="/privacy"> Privacy </a> /
            <a class="link white-80 hover-green" href="#">nikmurrey@gmail.com </a>
            <a href="#" class="db mt4 link white-80 hover-green">
                <span class="fw4 f7 f6-l">Made with</span>
                <span class="fa fa fa-heart red" style="vertical-align: middle"></span>
                <span class="fw4 f7 f6-l ">by @yoursweetacid</span>
            </a>
        </p>
    </footer>
</html>