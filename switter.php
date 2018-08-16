<html>
<head>
    <title>Switter</title>
    <meta charset="utf8_general_ci">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://logotipiwe/Jquery.js"></script>
    <script src="js/switterScript.js"></script>
</head>
<body>
    <p><a name="top"></a></p>
    <img class="FonImg" src="css/img/FonProz35.png">
    <header>
        <div class="to_index">
            <a href="Index.php">На главную</a>
        </div>
        <div class="log_in">
            <?
            if($_COOKIE['login']!='') {
                echo "Вы вошли как ".$_COOKIE['login']." | <a href='PHPlogout.php'>Выйти</a>";
            }
            ?>
        </div>
    </header> <!--Шапка-->
    

    
    <a href='#top'>
        <div class="anchor">
            Наверх
        </div>
    </a>    <!--Кнопка Вверх-->
    <div class="main">
        <?
        
        if($_COOKIE['login']!='') {
            echo "<button id='NewPostButton' class='bar'>Написать</button>";
        }   
        ?>
        <div id='CPost' class="containerPost">
        </div>
        <div class="menuLine">
                <a href="SignUp.php">
                    <?
                    if($_COOKIE['login']=='') {
                        echo "<div class='menu'>Вход/регистрация</div>";
                    }
                    ?>
                </a>
        </div>
    </div> <!--Закрытие MAIN-->
        
    <div id="lol" class="PUwindow">
        <form class="ClassFormm">
            <div class='formHead'>
                Новый пост
            <img id='CloseForm' class="exit" src="css/img/exit.png">
            </div>
            
            <hr>
            
            <div class="formInp">
                <textarea id='idPostName' name="name" class="themeName" rows="2" cols="87" placeholder="Тема поста" maxlength="40" autofocus></textarea>
                
                <textarea id='idPostText' name="PostText" class="PostText" cols="87" rows="6" placeholder="Введите текст..." maxlength="400"></textarea>
                            
            </div>
            
        <input type="button" id='idPostSend' name="done" class="PostSend" value="Отправить">
            
        </form>
        
        
    </div> <!--Закрытие FORM-->

</body>   
</html>