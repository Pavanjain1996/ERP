<?php
session_start();
$_SESSION['username']='';
$_SESSION['password']='';
header('location:http://localhost/E.R.P./Home.php');
?>