<?php
session_start();
// if(isset($_SESSION['mail']) && isset($_SESSION['pass'])) {
//     session_unset();
// }
setcookie('mail', $_POST['mail'], time()-60);
setcookie('pass', $_POST['pass'], time()-60);
header('location:login.php');
?>