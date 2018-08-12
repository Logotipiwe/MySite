<html>
<head>
    <title>Lol</title>
    <meta charset="utf8_general_ci">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
    <script src="js/switterScript.js"></script>
</head>
<body>
    <p><a name="top"></a></p>
    <img class="FonImg" src="css/img/FonProz35.png">
    <header><div class="containerHead">
        <nav>
            <ul>
                <li><a href="Index.html">Здесь</a></li>
                <li><a href="Index.html">Какаято</a></li>
                <li><a href="Index.html">Шапка</a></li>
            </ul>
        </nav>
    </div>
    </header> <!--Шапка-->
    

    
    <a href='#top'>
        <div class="anchor">
            Наверх
        </div>
    </a>    <!--Кнопка Вверх-->
    <div class="main">
        <button id='NewPostButton' class="bar">
           Написать
        </button>
        <div id='CPost' class="containerPost">
        </div>
        <div class="menuLine">
                <a href="SignUp.php">
                    <div class="menu">Вход/регистрация</div>
                </a>
        </div>
    </div> <!--Закрытие MAIN-->
        
    <div id="lol" class="PUwindow">
        <form class="ClassFormm" action="" method="post">
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