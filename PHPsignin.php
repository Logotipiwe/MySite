<?

function back(){
    header("location:SignUp.php");
}

if($_POST['InLogin']!="") {
    $sql = new mysqli("localhost","root", "", "logotipiwe");
    $sql->query ("SET NAMES 'UTF8'");
    $res = $sql->query ("SELECT * FROM `users` WHERE `Login` = '".$_POST['InLogin']."'");
    $row = $res->fetch_assoc();
    
    if($row['Password'] == $_POST['InPassword']) {
        setcookie('login',$row['Login']);
        header('location:switter.php');
    } else {back();}
    
} else {
    back();
}

echo "<a href='SignUp.php'>Back</a>"
?>