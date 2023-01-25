
  <?php

include "connection.php";
if(isset($_GET['delete_Id'])){
  $delete_Id=$_GET['delete_Id'];
  $sql= "delete from order_list where id='$delete_Id'"; 
  $run=mysqli_query($conn,$sql);
  if($run){
      //echo "Delete  successfully";
     // echo "<script type='text/javascript'> alert('Deleted successfully.....') </script>";
      //header('location:message.php');//redirect page ..go to display.php page
  }
  else{
      die(mysqli_error($conn));
      //echo 'Not Deleted';
      echo "<script type='text/javascript'> alert(' Not deleted.....') </script>";
  }
}


?>


 <!--  -->

 <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/popup.css">
    
  <!-- font awesome icon -->
  <script src="https://kit.fontawesome.com/7dfb138ff0.js" crossorigin="anonymous"></script>

</head>
<body>
   
       <!--full body start  -->
    <div class="wrapper">
      
      
<!--right part start  -->
 <div class="section">
         
    <div class="top_navbar">
      <div class="hamburger">
        <a href="#"><i class="fas fa-bars"></i> </a>
      </div>

      <div class="search">
        <i class="fa-solid fa-magnifying-glass">  </i>
        <input type="search" placeholder="search">
       
      </div>

      <div class="user">
        <a href="#"><i class="fa-solid fa-user"></i></a>
        <a href="#"><i class="fa-solid fa-bell"></i></a>
        <!-- image
        <div class="profile"><a href="#"><img src="pp.jpg" alt=""> </a></div>
        -->
        <a href="#"><i class="fa-solid fa-user"></i></a>
      </div>
    </div>

  <!--side bar start  -->


   <!--side bar start  -->
   <div class="sidebar">

    <!--profile start  -->
    <div class="profile">
    <img src="../image/1.jpeg" alt="profile_picture">
    <h3>Jewel Rana</h3>
    <p>2019000000030@seu.edu.bd</p>
    <p>01983623034</p>
    </div>
    <!--profile end  -->


    <!--side start  -->
    <ul>
    <li><a href="#"  target="_blank"> <span class="icon"><i class="fas fa-home"></i></span><span class="item">Home</span></a></li>
    <li><a href="dashboard.php" target="_blank"  ><span class="icon"><i class="fa-solid fa-table-columns"></i></span> <span class="item">My Dashboard</span>   </a> </li>
    <li><a href="user.php" target="_blank"><span class="icon"><i class="fa-solid fa-users"></i></span><span class="item">People</span> </a> </li>   
    <li><a href="#" class="active"><span class="icon"><i class="fa-brands fa-first-order"></i></span><span class="item">Order</span> </a> </li>      
    <li><a href="add.php" target="_blank"><span class="icon"><i class="fa-solid fa-plus"></i></span><span class="item">Add Products</span></a></li>
    <li><a href="product.php"  target="_blank" ><span class="icon" ><i class="fa-brands fa-product-hunt"></i></span><span class="item">All Products</span></a></li>
    <li><a href="newsletter.php"   ><span class="icon"><i class="fa-solid fa-newspaper"></i></span><span class="item">Newsletter</span></a></li>
    <li><a href="#" target="_blank"  ><span class="icon"><i class="fa-regular fa-message"></i></span><span class="item">Message</span></a></li>
    <li><a href="#" target="_blank"><span class="icon"><i class="fas fa-cog"></i></span><span class="item">Settings</span></a></li>
    <li><a href="#" target="_blank"><span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span><span class="item">Logout</span></a></li>

    </ul>
    </div>
<!--side end  -->





<!--body text start  -->
    <!--start writing -->

    <!--header for any section -->
    <div class="headingcontainer">
     <h1> Order Information</h1>
 </div>
 
 
 <div class="userinfo">
     <!-- form start -->
   
   
     <table id="customers">
        <tr>
        <th>ID</th>     
          <th>Name</th> 
          <th>Email</th>
          <th>Phone</th>
          <th>Address</th>
          <th>Status</th>
          <th>Tran-date</th>
          <th>Tran-id</th>
          <th>Card_type</th> 
          <th>bank_tran_id</th> 
          <th>Amount</th>
          <th>Action</th>
        </tr>



<?php
 
$sql="Select * from order_list";
///query execute
$result=mysqli_query($conn,$sql);

//if query execute
if($result){
    
 ///fetch row from the table
   while($row=mysqli_fetch_assoc($result)){
     //assign row value
       $user_id=$row['user_id'];
       $name=$row['name'];
       $email=$row['email'];     
       $phone=$row['phone'];
       $address=$row['address'];
       $status=$row['status'];
       $tran_date=$row['tran_date'];
       $tran_id=$row['tran_id'];

       $card_type=$row['card_type'];
       $bank_tran_id=$row['bank_tran_id'];
       $amount=$row['amount'];
       

echo"
        <tr>
                <td>$user_id</td>      
                <td>$name</td>
                <td>$email</td>      
                <td>$phone</td>
                <td>$address</td>      
                <td>$status</td>
                <td>$tran_date</td>
                <td>$tran_id</td>
                <td>$card_type</td>      
                <td>$bank_tran_id</td>
                <td>$amount</td>
                <td>          
                <button class='btn'> <a href='#popup1'  >view </a></button>
                <button class='btn_danger'>   <a href='order.php?delete_Id=".$row['id']."' >Done</a>  </button>
                <button class='btn'>   <a href='order.php?delete_Id=".$row['id']."' >cancel</a>  </button>
                </td>
        </tr>
 
";


   }
  }

 ?>

 
</table>
 </div>
     




  
 
 

<!--complete text -->



</div>
<!--body text end  -->




</div>


    <!--body end  -->

<!--popup start  -->

 

  <div id="popup1" class="overlay">
    <div class="popup">
      <h2>View Products List</h2>
      <a class="close" href="#"> &times;</a>
      
      <div class="content">

    
      <table id="customers">
        <tr>
           
          <th>P_id</th> 
          <th>Image</th>
          <th>Name</th>
          <th>Category</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Total_Price</th>
 
        
        </tr>



<?php
 
$sql="Select * from order_cart where user_id= $user_id";
$result=mysqli_query($conn,$sql);
if($result){
   while($row=mysqli_fetch_assoc($result)){  
       $product_id=$row['product_id'];
       $product_quantity=$row['quantity'];
            $sql1="Select * from product where id= $product_id";
            $result1=mysqli_query($conn,$sql1);
            if($result1){
              while($row1=mysqli_fetch_assoc($result1)){
                     $product_name=$row1['name'];
                     $product_price=$row1['price'];
                     $product_image=$row1['image'];
                     $product_category=$row1['sub_category'];                                              
              }
            }
      
              $total=$product_price*$product_quantity;
            echo"
            <tr>
                   
                    <td> $product_id</td>

                    ";

                    echo '<td><img src="data:image;base64,'.base64_encode($product_image).'"  width="50" height="50"></td>';

            echo"
                 
                    <td>$product_name</td>      
                    <td>$product_category</td>
                    <td>$product_quantity</td>      
                    <td>$product_price</td>
                    <td> $total /=</td>  
                  
            </tr>
     
    ";

   }
  }

 ?>

 
</table>
 
     




  
 
 








     
     
      
   
    </div>
  </div>
  </div>
  

<!--popup end  -->
























    <script src="../js/sidebar.js"></script>


</body>
</html>