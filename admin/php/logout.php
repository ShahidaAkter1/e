<?php
///connection php page import for db connection
include  "connection.php";
session_start();

 session_unset();
 session_destroy();
 header('location:login.php');

?>