<?php
session_start(); 
include ("header.php");
include ("bd.php");




?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <form action="stream.php" method="post">
                        <div class="col-md-6">
                            <div class="input_1" style="margin-bottom:30px">
                                <input type="text" name="text" required maxlength="200">
                                <span>Enter your comment</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input_2">
                                <input  type="submit" value="Enter comment">
                            </div>
                        </div>

                    </form>
                </div>
            </div><!-- end col -->

        </div>
    </div>
    
</section>

<?php

if (isset($_SESSION["id_user"])){
                        
                        echo "<br><br>";
                        $comments = get_multiple("SELECT * FROM comments", $database);
                        if (!$comments)
                            echo "<h4 class='montserrat-text uppercase' style='margin-top:100px'>Комментариев нет :(</h4>";
                        else
                        {
                            foreach ($comments as $comment)
                            {
                                
                                $commenter = get_single("SELECT * FROM user inner join comment on comment.id_user = user.id_user", $database);
                                $commenter_id = $commenter["comment.id_user"];
                                $commenter_name = $commenter["user.username"];
                                echo $commenter_name;
                                $text = $comment["text"];
                                

                                echo "<div class='textarea_1'>";
                                echo "<a href=#><p class='montserrat-text uppercase'>$commenter_name</p></a> ";
                               
                                echo "<h5>$text</h5>";
                                echo "</div><br>";
                            }
                        }
}
                    else
                    {
                        echo "Ошибка";
                    }
                    

include ("footer.php");?>