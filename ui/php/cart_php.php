<?php
session_start();
include "connection.php";
$user_id=$_SESSION['user_id'];
$user_name=$_SESSION['user_name'];
$user_email=$_SESSION['user_email'];

//add to cart
$_product_cart_id=$_GET['product_Id'];
$sql="Select * from product where id=$_product_cart_id";
$result=mysqli_query($conn,$sql);
if($result){
   while($row=mysqli_fetch_assoc($result)){       
       $product_name=$row['name'];
       $product_price=$row['price'];   
       $product_image=$row['image']; 
       $product_quantity='1';
   }
}
  
  //$sql1 = "insert into cart (user_id,product_id,name,price,quantity) values ('$user_id','$_product_cart_id','$product_name','$product_price')";   
  //$sql1 = "insert into cart (user_id,product_id) values ('$user_id','$_product_cart_id')";
  $sql1 = "insert into cart (user_id,product_id,name,price,quantity) values ('$user_id','$_product_cart_id','$product_name','$product_price','$product_quantity')";
  $select1="Select * From cart where user_id='$user_id'  and product_id='$_product_cart_id' ";      
  $select_user1 = mysqli_query($conn,$select1);
if(mysqli_num_rows($select_user1) > 0){
  echo "<script type='text/javascript'> alert('product already exists.....') </script>";
  header('location:cart.php');
}
else{
 $run1= mysqli_query($conn,$sql1); 
if($run1){
 //echo "Form Submitted successfully";
 header('location:cart.php');//redirect page ..go to display.php page
 echo "<script type='text/javascript'> alert(' added   successfully.....') </script>";
}

}




//delete
if(isset($_GET['delete_Id'])){

    $delete_Id=$_GET['delete_Id'];
  
    //sql query
    $sql= "delete from cart where product_id='$delete_Id' and user_id='$user_id'"; 
    $run=mysqli_query($conn,$sql);
  
    if($run){
        //echo "Delete  successfully";
        echo "<script type='text/javascript'> alert('Deleted successfully.....') </script>";
        header('location:cart.php');//redirect page ..go to display.php page
    }
    else{
        die(mysqli_error($conn));
        //echo 'Not Deleted';
        echo "<script type='text/javascript'> alert(' Not deleted.....') </script>";
    }
  }
  

 
 

 



?>