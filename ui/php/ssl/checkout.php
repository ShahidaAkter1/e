

<?php
///connection php page import for db connection
session_start();
include  "../connection.php";

 
 
 
 if(isset($_POST['checkout'])){
    $total=$_POST['total'];
    $id=$_POST['user_id_info'];
   $_SESSION['user_id']=$id;
   $user_id=$_SESSION['user_id'];
 
    
   }
  
   /*
   if(isset($_POST['submit_checkout'])){

    //get value
      $name=$_POST['name'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $address=$_POST['address'];
      $amount=$_POST['amount'];

     // $_SESSION['checkout_amount']=$amount ;
  
          //query
          //here crud= table name
          $sql = "insert into checkout (name,email,phone,address,amount) values ( '$name', '$email','$phone','$address','$amount')";
  
          //run or die check
          $run = mysqli_query($con,$sql);
  
          if($run){
             // echo "Form Submitted successfully";
             // header('location:contact.php');//redirect page ..go to display.php page

             echo "<script type='text/javascript'> 
             
           alert('success')
 
             </script>";
             header('location:checkout_ssl.php');


          }
          else{
              die(mysqli_error($con));
              //echo 'Not submitted';
              echo "<script type='text/javascript'> alert('  submitted unsuccess.....') </script>";
              header('location:cart.php');
          }
      }

*/



$user_id=$_SESSION['user_id'];



   



?>
 



 


 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="checkout.css">
</head>
<body>
    

    
 


<div class="checkout">
  <h1>Checkout Page</h1>
 
 
</div>

<div class="row">
  <div class="col-md-12">
    <form action=" #" method="post">
      <h1> Customer Details</h1>      
      <fieldset>        
        <legend><span class="number">1</span> Your Basic Info</legend>    
        <label for="name">Name:</label>
        <!--  
        <input type="text" id="name" name="name">  -->
        
      
        <label for="email">Email:</label>
        <input type="email" id="mail" name="email">
     
        <label for="phone">Phone:</label>
        <input type="text" id="password"  name="phone">
      
        
      </fieldset>
       
        
       <label for="address">Address:</label>
        <textarea id="bio" name="address"></textarea>
      
 
        <legend><span class="number">2</span> Amount To Pay</legend>
        
        <label for="name">Amount:</label>
        <input type="text" id="name" name="amount" value="Tk <?php echo $total ?>" readonly>
        <input type="text" id="name" name="amount" value="  <?php echo $user_id ?>" readonly>


       
          <?php
              
               
                echo " <button type='submit' ><a href='checkout_ssl.php?checkout_amount=".$total."'>Checkout</a></button> ";
               // echo "  <a href='checkout_ssl.php?checkout_amount=".$total."'>Checkout</a>  ";
             
             
          ?>
      
     


      </div>
    </div>


</body>
</html>


 
 