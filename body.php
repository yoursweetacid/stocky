<?php
include("bd.php");
?>
<body class="bg-near-white">
    <div class="cf ph2-ns">
        <div class="fl w-25 pa2 sticky">
            <div >
                <article class="mw6 center baskerville bg-white br3 pt4 pb2 mw3 ba b--black-10">
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
                                    <b class="mr2 tl f5 f7-m lh-solid">Rose</b> 
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
                                    <span class="mr2 black-60 dim">#Pink</span> 
                                </a>
                                <a href="#" class="link f7 fw4 lh-solid">
                                    <span class="mr2 black-60 dim">#Rose</span> 
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