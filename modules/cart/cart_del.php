<?php
session_start();
$prd_id = $_GET['prd_id'];
unset($_SESSION['cart'][$prd_id]);
header('location:../../index.php?page_layout=cart');
?>