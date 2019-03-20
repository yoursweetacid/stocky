<?php
include ('bd.php');
  

  
    if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
    if (isset($_POST['surname'])) { $surname = $_POST['surname']; if ($surname == '') { unset($surname);} }
    if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} }
    if (isset($_POST['username'])) { $username = $_POST['username']; if ($username == '') { unset($username);} }

    if (empty($email) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
     {
         echo "<p><a href=\"signup.php\">НАЗАД</a></p>";
         mysqli_close($link);
         exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
     }
     if($_POST['password'] != $_POST['password_02']){
        echo 'пароли не совпадают';
        mysqli_close($link);
        exit ("Пароли не совпадают");
     }
     /*
     if(emailValid($_POST['email']) === false){
           echo 'Не правильно введен E-mail'."\n";
           mysqli_close($link);
           exit ("sa");
           }
    */
     
        //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
        $username = stripslashes($username);
        $username = htmlspecialchars($username);
        $password = stripslashes($password);
        $password = htmlspecialchars($password);
        //удаляем лишние пробелы
        $username = trim($username);
        $password = trim($password);
        $_SESSION['login']=$username;

    

    // проверка на существование пользователя с таким же логином
    $query ="SELECT id_user FROM user WHERE username='$username'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    $row = mysqli_fetch_row($result);
    if (!empty($row[0]))
    {
        echo "<p><a href=\"signup.html\">НАЗАД</a></p>";
        mysqli_close($link);
        exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }
    else
    {
        // если такого нет, то сохраняем данные
        $query ="INSERT INTO user (username, password, surname, name, email) VALUES('$username','$password','$surname','$name','$email')";
        $result2 = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    }


    // закрываем подключение
    mysqli_close($link);

    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
        echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='main.php'>Главная страница</a>";
    }
    else {
        echo "Ошибка! Вы не зарегистрированы.";
        mysqli_close($link);
        exit ("Ошибка! Вы не зарегистрированы.");
    }
  

?>