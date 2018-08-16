<?
function back(){
    header("location:SignUp.php");
}

if($_POST['Reglogin']!='' && $_POST['Regpassword']!=''){
    $sql = new mysqli('localhost', 'root','','logotipiwe');
    $sql->query("SET NAMES 'UTF8'");
    $res = $sql->query ("SELECT * FROM `users` WHERE `Login` = '".$_POST['Reglogin']."'");
    if(mysqli_num_rows($res) == 0){
        $sql->query("INSERT INTO `users` (`Login`, `Password`) VALUES ('".$_POST['Reglogin']."', '".$_POST['Regpassword']."');");
        setcookie('login',$_POST['Reglogin']);
        header("location:index.php");
    } else {back();}
} else {
    back();
}

?>
