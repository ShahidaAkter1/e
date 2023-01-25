<?php


session_start();
include "../connection.php";

if(isset($_POST['pass_info'])){
    $c_id=$_POST['c_id'];
    $c_name=$_POST['c_name'];
    $c_phone=$_POST['c_phone'];
    $c_email=$_POST['c_email'];
    $c_address=$_POST['c_address'];

    $status=$_POST['status'];
    $tran_date=$_POST['tran_date'];
    $tran_id=$_POST['tran_id'];
    $card_type=$_POST['card_type'];
    $bank_tran_id=$_POST['bank_tran_id'];
    $amount=$_POST['amount'];
    $sql = "insert into order_list (user_id,name,email,phone,address,status,tran_date,tran_id,card_type,bank_tran_id,amount) values (  '$c_id','$c_name','$c_email','$c_phone','$c_address','$status','$tran_date','$tran_id','$card_type','$bank_tran_id','$amount'  )";
    $run = mysqli_query($conn,$sql);
    if($run){
       // echo "Form Submitted successfully";
        //header('location:../index.php');//redirect page ..go to display.php page

      // echo "<script type='text/javascript'> alert('   insert successfully') </script>";

    }
    else{
        die(mysqli_error($conn));
        //echo 'Not submitted';
        echo "<script type='text/javascript'> alert(' unsuccess.....') </script>";
    }

   }
 
 
   echo "Customer id = ".$c_id."</br>";
   echo "Customer name = ".$c_name."</br>";
   echo "Customer phone = ".$c_phone."</br>";
   echo "Customer email = ".$c_email."</br>";
   echo "status = ".$status."</br>";
   echo "tran_date = ".$tran_date."</br>";
   echo "tran_id = ".$tran_id."</br>";
   echo "card_type = ".$card_type."</br>";

   echo "bank_tran_id = ".$bank_tran_id."</br>";
   echo "amount = ".$amount."</br>";
   echo "address = ".$c_address."</br>";


 




?>



<?php
 
$sql="Select * from cart where user_id=$c_id";
$result=mysqli_query($conn,$sql);
if($result){
   while($row=mysqli_fetch_assoc($result)){
       $product_id=$row['product_id'];
       $quantity=$row['quantity'];
       $sql = "insert into order_cart (user_id,product_id,quantity) values (  '$c_id','$product_id',$quantity  )";
       $run = mysqli_query($conn,$sql);


       //delete product from db cart table
       $sql= "delete from cart where user_id=$c_id and product_id='$product_id' "; 
       $run=mysqli_query($conn,$sql);

echo"
<p>$product_id </p><br>
 
";


   }

  
  }

 

  header('location:../index.php');
 ?>
 