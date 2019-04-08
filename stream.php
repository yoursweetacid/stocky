<?php
session_start();
include ("bd.php");
function refine($text)
        {
            if (!isset($text))
                return "";
            return trim(htmlspecialchars(stripslashes($text)));
        }

        $text = refine($_POST["text"]);
        $id_user = $_SESSION["id_user"];


            $success = $database->query("INSERT INTO comments (id_user,  text) VALUES ('$id_user', '$text')");

            if ($success)
            {
                echo "<h4 class='montserrat-text uppercase' style='margin-top:100px'>Комментарий сохранен</h4>";
                echo "<a href='contact.php'><p class='montserrat-text uppercase'>Вернуться к обсуждению</p></a>";
            }
            else
            {
                echo "<h4 class='montserrat-text uppercase' style='margin-top:100px'>Ошибка</h4>";
                echo "<a href='contact.php'><p class='montserrat-text uppercase'>Вернуться к комментарию</p></a>";
            }

?>