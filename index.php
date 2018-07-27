<html>
<head>
    <title>Lol</title>
    <meta charset="utf8_general_ci">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <p><a name="top"></a></p>
    <img class="FonImg" src="img/FonProz35.png">
    <header><div class="containerHead">
        <nav>
            <ul>
                <li><a href="">Здесь</a></li>
                <li><a href="">Какаято</a></li>
                <li><a href="">Шапка</a></li>
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
            <?php
            
            function printRes ($result){
            $cont = "";
                while(($row = $result->fetch_assoc()) != false) {
                    $cont = "<div class='post' id='Post".$row['id']."'><div class='postHead'><strong>".$row["name"]."</strong></div><div class='textCont'>".$row["content"]."</div><div class='postUnder'>Дата: ".$row["date"].". Автор:какойто чел.<div class = 'PostUnderDel' id = 'PostUnderDel".$row['id']."'>Удалить</div></div></div>".$cont;
                } echo $cont;
            } 
            if(isset($_POST["done"])){
        if($_POST["name"] != "" AND $_POST["PostText"] != ""){
            $sql = new mysqli("localhost","root", "", "Posts");
            $sql->query ("SET NAMES 'UTF8'");

            $sql->query ("INSERT INTO  `poststab` (
                `id` ,
                `name` ,
                `content` ,
                `date`
                )
                VALUES (
                NULL , '".$_POST["name"]."',  '".$_POST["PostText"]."', 
                CURRENT_TIMESTAMP
                );");
            $sql->close();
        }
    }/*Отправили данные*/
            
            $sql = new mysqli("localhost","root", "", "Posts");
            $sql->query ("SET NAMES 'UTF8'");
            $result = $sql->query("SELECT * FROM poststab");
            printRes($result);/*Вывод результата*/
            $sql->close();
            ?>
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
            <img id='CloseForm' class="exit" src="img/exit.png">
            </div>
            
            <hr>
            
            <div class="formInp">
                <textarea id='idPostName' name="name" class="themeName" rows="2" cols="87" placeholder="Тема поста" maxlength="40"></textarea>
                
                <textarea id='idPostText' name="PostText" class="PostText" cols="87" rows="6" placeholder="Введите текст..." maxlength="400"></textarea>
                            
            </div>
            
        <input type="submit" id='idPostSend' name="done" class="PostSend" value="Отправить">
            
        </form>
        
        
    </div> <!--Закрытие FORM-->
        
    <script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
    <script src="Script.js"></script>

</body>   
</html>