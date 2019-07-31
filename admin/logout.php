<?php
session_start();
if(isset($_SESSION['mail']) && isset($_SESSION['pass'])) {
    session_unset();
}
header('location:login.php');
?>