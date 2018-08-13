<?php
            
function printRes ($result){
            $cont = "";
                while(($row = $result->fetch_assoc()) != false) {
                    $del = "";
                    if($row['Author'] == $_COOKIE["login"]){
                        $del = "<div class = 'PostUnderDel' id = 'PostUnderDel".$row['id']."'>Удалить</div>";
                    }
                    $cont = "<div class='post' id='Post".$row['id']."'><div class='postHead'><strong>".$row["name"]."</strong></div><div class='textCont'>".$row["content"]."</div><div class='postUnder'>Дата: ".$row["date"].". Автор:".$row['Author'].".".$del."</div></div>".$cont;
                } echo $cont;
            } 


if($_POST["action"] == 1){
        if($_POST["title"] != "" AND $_POST["content"] != ""){
            $sql = new mysqli("localhost","root", "", "logotipiwe");
            $sql->query ("SET NAMES 'UTF8'");
            $sql->query ("INSERT INTO  `logotipiwe`.`switterposts` (
                `id` ,
                `name` ,
                `content` ,
                `Author` ,
                `date`
            )
                VALUES (
                NULL , '".$_POST["title"]."',  '".$_POST["content"]."',
                '".$_COOKIE['login']."',
                CURRENT_TIMESTAMP
                );");
            $sql->close();
        }
    }/*Отправили данные добавить пост*/
if($_POST["action"] == 2){
    $sql = new mysqli("localhost","root", "", "logotipiwe");
            $sql->query ("SET NAMES 'UTF8'");
            $sql->query ("DELETE FROM  `Switterposts` WHERE  `Switterposts`.`id` =".$_POST["item"].";");
            $sql->close();
} /*Отправили данные удалить пост*/
            
            $sql = new mysqli("localhost","root", "", "logotipiwe");
            $sql->query ("SET NAMES 'UTF8'");
            $result = $sql->query("SELECT * FROM Switterposts ORDER BY  `switterposts`.`id` ASC ");
            printRes($result);/*Вывод результата*/
            $sql->close();
?>