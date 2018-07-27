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