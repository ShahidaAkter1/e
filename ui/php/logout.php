<?php
session_start();
include "connection.php";
$user_id=$_SESSION['user_id'];
$user_name=$_SESSION['user_name'];
$user_email=$_SESSION['user_email'];

if(!isset($user_id)){
    header('location:login.php');
}

if(isset($_GET['logout'])){
    unset($user_id);
    session_destroy();
    header('location:login.php');
}


?>
