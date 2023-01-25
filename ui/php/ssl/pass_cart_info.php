<?php
session_start();

if(isset($_POST['checkout'])){
    $total=$_POST['total'];
    $id=$_POST['user_id_info'];
	$amount=$total;
    $_SESSION['user_id']=$id;
   }
 
   $_SESSION['user_id']=$id;
   $_SESSION['grand_total']=$amount;
   header('location:checkout_ssl.php');//redirect page ..go to display.php page
?>