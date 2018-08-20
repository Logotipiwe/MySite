<?php
if(isset($_POST['Insub'])){
    if($_POST['InLogin']!="" && $_POST['InPassword']!='') {
    $sql = new mysqli("localhost","root", "", "logotipiwe");
    $sql->query ("SET NAMES 'UTF8'");
    $res = $sql->query ("SELECT * FROM `users` WHERE `Login` = '".$_POST['InLogin']."'");
    $row = $res->fetch_assoc();
    
    if($row['Password'] == $_POST['InPassword']) {
        setcookie('login',$row['Login']);
        header('location:index.php');
    } else {
        $al = "<script>alert('Логин или пароль введен неверно')</script>";    
    }
    
} else {
    $al = "<script>alert('Вы что-то не ввели')</script>";
}
} else if (isset($_POST['Regsub'])){
    if($_POST['Reglogin']!='' && $_POST['Regpassword']!=''){
    $sql = new mysqli('localhost', 'root','','logotipiwe');
    $sql->query("SET NAMES 'UTF8'");
    $res = $sql->query ("SELECT * FROM `users` WHERE `Login` = '".$_POST['Reglogin']."'");
    if(mysqli_num_rows($res) == 0){
        $sql->query("INSERT INTO `users` (`Login`, `Password`) VALUES ('".$_POST['Reglogin']."', '".$_POST['Regpassword']."');");
        setcookie('login',$_POST['Reglogin']);
        header("location:index.php");
    } else {
        $al = "<script>alert('Такой пользователь уже существует')</script>"; 
    }
} else {
    $al = "<script>alert('Вы что-то не ввели')</script>";
}
}
?>
<html>
    <head>
        <title>Вход</title>
        <meta charset="utf-8">
        <link href="css/SignUpStyle.css" rel="stylesheet">
    </head>
    <?
    if ($al !=''){
        echo $al;
    }
    ?>
    <body>
        
        <div class="head">
            <div class='link'><a href="Index.php">На главную</a></div>
            <div class="log_in">
                <?
                if($_COOKIE['login']!=''){
                    echo "Вы вошли, как ".$_COOKIE['login']." | <a href='PHPlogout.php'>Выйти</a>";
                }
                ?>
            </div>
        </div>
        <div class="a">
            <div class="Divtitle">Войти</div>
            <form method="post" action="SignUp.php">
                    <input name="InLogin" class="login" type="text" placeholder="Логин" autofocus>
                    <input name="InPassword" class="password" type="text" placeholder="Пароль">
                    <input name='Insub' class="submit" type="submit" value="Войти">
            </form>
        </div>
        <div class="b">
            <div class="Divtitle">Зарегистрироваться</div>
            <form method="post" action="SignUp.php">
                    <input name='Reglogin'class="login" type="text" placeholder="Логин">
                    <input name='Regpassword' class="password" type="text" placeholder="Пароль">
                    <input name='Regsub' class="submit" type="submit" value="Зарегистрироваться">
            </form>
        </div>
        <script src="http://logotipiwe/Jquery.js"></script>
    </body>
</html>