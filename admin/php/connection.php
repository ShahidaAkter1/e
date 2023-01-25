<?php

 
$server="localhost";
$username="root";
$password="";
$db="ecommerce";

$conn=mysqli_connect($server,$username,$password,$db);
 

if(!$conn){
    die(mysqli_connect_error($conn));
}
?>

 
