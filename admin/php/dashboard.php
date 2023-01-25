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
 
  <!-- font awesome icon -->
  <script src="https://kit.fontawesome.com/7dfb138ff0.js" crossorigin="anonymous"></script>

</head>
<body>
   
       <!--full body start  -->
    <div class="wrapper">
      
      
<!--right upper part start  -->
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
    <li><a href="#" target="_blank" class="active"><span class="icon"><i class="fa-solid fa-table-columns"></i></span> <span class="item">My Dashboard</span>   </a> </li>
    <li><a href="user.php" target="_blank"><span class="icon"><i class="fa-solid fa-users"></i></span><span class="item">People</span> </a> </li>      
    <li><a href="order.php" target="_blank"><span class="icon"><i class="fa-brands fa-first-order"></i></span><span class="item">Order</span> </a> </li>   
    <li><a href="add.php" target="_blank"><span class="icon"><i class="fa-solid fa-plus"></i></span><span class="item">Add Products</span></a></li>
    <li><a href="product.php"  target="_blank" ><span class="icon" ><i class="fa-brands fa-product-hunt"></i></span><span class="item">All Products</span></a></li>
    <li><a href="newsletter.php" target="_blank"><span class="icon"><i class="fa-solid fa-newspaper"></i></span><span class="item">Newsletter</span></a></li>
    <li><a href="message.php" target="_blank"><span class="icon"><i class="fa-regular fa-message"></i></span><span class="item">Message</span></a></li>
    <li><a href="#" target="_blank"><span class="icon"><i class="fas fa-cog"></i></span><span class="item">Settings</span></a></li>
    <li><a href="logout.php"  ><span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span><span class="item">Logout</span></a></li>


</ul>
</div>
<!--side end  -->



<?php
include "connection.php";
        //query execute
       $select_user=mysqli_query($conn, "SELECT * FROM `newsletter` " ) or die ('query failed');
        //find number of row
         $number_of_newsletter=mysqli_num_rows($select_user);     
     
     
      $select_user=mysqli_query($conn, "SELECT * FROM `user_registration` " ) or die ('query failed');
      $number_of_user=mysqli_num_rows($select_user);     
                  
      $select_user=mysqli_query($conn, "SELECT * FROM `contact_message` " ) or die ('query failed');
       $number_of_message=mysqli_num_rows($select_user);     
   
   
  
    $select_user=mysqli_query($conn, "SELECT * FROM `product` " ) or die ('query failed');
    $number_of_product=mysqli_num_rows($select_user);     
                
             



?>




    <!--body text start  -->
<div class="headingcontainer">
    <h1> Dashboard</h1>
</div>


<div class="container1">


 <div class="item-container">
        <!-- dashboard admin user-->
         <a href="user.php" >
         <div class="value">
          <div class="val-box">
              <i class="fa-solid fa-users"></i>
              <div class="text">                    
                   <h3> <?php   echo  $number_of_newsletter; ?></h3>
                   <span>Admin user</span>
              </div>
          </div>
        </div>
         </a>
 </div>

 <div class="item-container">
    <!-- dashboard admin user-->
     <a href="user.php" >
     <div class="value">
      <div class="val-box">
          <i class="fa-solid fa-users"></i>
          <div class="text">                    
               <h3> <?php   echo  $number_of_user; ?></h3>
               <span> User</span>
          </div>
      </div>
    </div>
     </a>
</div>


<div class="item-container">
    <!-- dashboard admin user-->
     <a href="user.php" >
     <div class="value">
      <div class="val-box">
          <i class="fa-solid fa-users"></i>
          <div class="text">                    
               <h3> <?php   echo  $number_of_newsletter; ?></h3>
               <span>Total user</span>
          </div>
      </div>
    </div>
     </a>
</div>


<div class="item-container">
    <!-- dashboard admin user-->
     <a href="user.php" >
     <div class="value">
      <div class="val-box">
          <i class="fa-solid fa-users"></i>
          <div class="text">                    
               <h3> <?php   echo  $number_of_message; ?></h3>
               <span>Message</span>
          </div>
      </div>
    </div>
     </a>
</div>

<div class="item-container">
    <!-- dashboard admin user-->
     <a href="user.php" >
     <div class="value">
      <div class="val-box">
          <i class="fa-solid fa-users"></i>
          <div class="text">                    
               <h3> <?php   echo  $number_of_newsletter; ?></h3>
               <span>Newsletter</span>
          </div>
      </div>
    </div>
     </a>
</div>

<div class="item-container">
    <!-- dashboard admin user-->
     <a href="user.php" >
     <div class="value">
      <div class="val-box">
          <i class="fa-solid fa-users"></i>
          <div class="text">                    
               <h3> <?php   echo  $number_of_product; ?></h3>
               <span>Total Products</span>
          </div>
      </div>
    </div>
     </a>
</div>

<div class="item-container">
    <!-- dashboard admin user-->
     <a href="user.php" >
     <div class="value">
      <div class="val-box">
          <i class="fa-solid fa-users"></i>
          <div class="text">                    
               <h3> <?php   echo  $number_of_newsletter; ?></h3>
               <span>Completed order</span>
          </div>
      </div>
    </div>
     </a>
</div>

<div class="item-container">
    <!-- dashboard admin user-->
     <a href="user.php" >
     <div class="value">
      <div class="val-box">
          <i class="fa-solid fa-users"></i>
          <div class="text">                    
               <h3> <?php   echo  $number_of_newsletter; ?></h3>
               <span>Pending order</span>
          </div>
      </div>
    </div>
     </a>
</div>

<div class="item-container">
    <!-- dashboard admin user-->
     <a href="user.php" >
     <div class="value">
      <div class="val-box">
          <i class="fa-solid fa-users"></i>
          <div class="text">                    
               <h3> <?php   echo  $number_of_newsletter; ?></h3>
               <span>Total Taka</span>
          </div>
      </div>
    </div>
     </a>
</div>




</div>
    
 




</div>
<!--body text end  -->
<!--right part end  -->




















   
    </div>
    <!--body end  -->

    <script src="../js/sidebar.js"></script>
</body>
</html>