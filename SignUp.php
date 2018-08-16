<html>
    <head>
        <title>Вход</title>
        <meta charset="utf-8">
        <link href="css/SignUpStyle.css" rel="stylesheet">
    </head>
    
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
            <form method="post" action="PHPsignin.php">
                    <input name="InLogin" class="login" type="text" placeholder="Логин" autofocus>
                    <input name="InPassword" class="password" type="text" placeholder="Пароль">
                    <input class="submit" type="submit" value="Войти">
            </form>
        </div>
        <div class="b">
            <div class="Divtitle">Зарегистрироваться</div>
            <form method="post" action="PHPsignup.php">
                    <input name='Reglogin'class="login" type="text" placeholder="Логин">
                    <input name='Regpassword' class="password" type="text" placeholder="Пароль">
                    <input class="submit" type="submit" value="Зарегистрироваться">
            </form>
        </div>
        <script src="http://logotipiwe/Jquery.js"></script>
    </body>
</html>