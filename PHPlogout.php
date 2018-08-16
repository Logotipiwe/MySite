<?

setcookie('login');
header("location:".$_SERVER['HTTP_REFERER']);
?>