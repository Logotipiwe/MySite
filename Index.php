<html>
    <head>
        <title>Logotipiwe</title>
        <link href="css/indexStyle.css" rel="stylesheet">
        <meta charset="utf-8">
    </head>
    
    <body>
        <div class="header2">
            <div class="log_in">
                <?
                if($_COOKIE['login']!='') {
                    echo "Вы вошли как ".$_COOKIE['login']." | <a href='PHPlogout.php'>Выйти</a>";
                }                
                ?>
            </div>
        </div>
        <header></header>
        <main>
            <div class="zag"></div>
            <ul>
                <a href="SignUp.php"><li>
                    <div class="name">
                        <b>Регистрация/Вход</b>
                    </div>
                    <div class="text">
                        Единый аккаунт для всех нижеперечисленных страничек. Можно и не регистрироваться, но тогда ничего нельзя будет сделать, так шо давай, это быстро.
                    </div>
                </li></a>
                <a href="switter.php"><li>
                    <div class="name">
                        <b>switter.ru - Запостить что-нибудь</b>
                    </div>                    
                    <div class="text">
                        Эта страница представляет собой ленту с постами. Сделать бы конечно ещё регистрацию и авторизацию... чтобы знать кто отправил пост, но это как-нить потом.
                    </div>
                </li></a>
                <li>
                    <div class="name">
                        <b>Ещё что-нибудь</b>
                    </div>
                    <div class="link"></div>
                    <div class="text">
                        Эта страница представляет собой страницу с блин html разметкой. Сделать бы конечно ещё хоть что-то на ней... чтобы знать зачем это тут, но это как-нить потом.
                    </div>
                </li>
            </ul>            
        </main>
        <script src="http://logotipiwe/Jquery.js"></script>
        <script>
            $(window).scroll(function() {
                if ($(this).scrollTop() > 393){
                    $('.header2').css('background-image', 'url(css/img/header2.png)')
                } else { 
                    $('.header2').css('background-image', 'none')
                }
            });
        </script>
    </body>
</html>