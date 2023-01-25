<?php
session_start();
include "connection.php";
$user_id=$_SESSION['user_id'];
$user_name=$_SESSION['user_name'];
$user_email=$_SESSION['user_email'];
$cart_count=$_SESSION['$cart_total_count'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About US</title>
       
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/navbar.css">
   <!-- font awesome icon -->
    <script src="https://kit.fontawesome.com/7dfb138ff0.js" crossorigin="anonymous"></script>
</head>
<body>
   
 
 
 
<!-- header section starts  -->

<header>

    <!-- for ahemburg  or 3bar -->
    <div id="menu-bar"  class="fas fa-bars"></div>

    <a href="#" class="logo">nike</a>
    <nav class="navbar">
 
 <ul>
     <li> <a href="index.php"  ><i class="fa-solid fa-house"></i>  Home</a> 
         
     </li>

     <li> <a href="product.php" target="_blank" ><i class="fa-brands fa-product-hunt"></i> Products</a></li>
     <li> <a href="category.php" target="_blank"  ><i class="fa-sharp fa-solid fa-filter"></i> Category</a>
    <!--
     <div class="submenu">
         <ul>
             <li> <a href="#">about </a></li>
             <li> <a href="#">contact</a></li>
             <li> <a href="#">phone</a></li>
         </ul>
        </div>
-->
     </li>
     <li> <a href="review.php"> <i class="fa-sharp fa-solid fa-star"></i>Review</a></li>
     <li> <a href="contact.php"><i class="fa-solid fa-address-book"></i>Contact</a></li>
     <li> <a href="#" class="active" ><i class="fa-solid fa-address-card"></i>About  </a></li>
      
 </ul>     
</nav>
 

<div class="icons">
         <ul> 
         <li> <a href="#" class="fas fa-heart" id="profile_header"><sup>0</sup> </a></li>
         <li> <a href="cart.php" class="fas fa-shopping-cart" id="profile_header"><sup><?php echo $cart_count;  ?></sup></a></li>
         <li> <a href="#" class="fas fa-user" id="profile_header"></a>
             <div class="submenu">
                 <table>
                     <tr>
                         <td>Name</td>
                         <td><?php echo $user_name; ?></td>
                     </tr>
                     <tr>
                         <td>Email</td>
                         <td><?php echo $user_email; ?></td>
                     </tr>
                 </table>
                 <div class="setting"></div>
                     <button><a href="#">Profile</a></button>
                     <button>  <a href="logout.php?logout=<?php echo $user_id;  ?>" onclick="return confirm('Are you sure want to logout??')" >Logout</a></button>
                </div>
         </li>
     </ul>
     </div>
</header>

<!-- header section ends -->

 
 
 <!-- about section start-->
 
 <h1 class="heading" id="section-p1"><span>About</span> us</h1>
 <section class="about" id="about"> 
    <div class="row">
        <div class="vcontainer">
            <video src="../video/Music of nature.  Flowering.  Very nice video._HD.mp4" loop autoplay muted></video>           
        </div>

        <div class="content">
             <h3>why choose us?</h3>
             <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi, iste.</p>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, impedit?</p>
             <a href="#" class="btn">learn more</a>
        </div>
    </div>
    </section>
    
  
 

  
 
<section id="about_app"   >
<h1 class="heading" id="section-p1"><span>Download Our </span> <a href="https://play.google.com/store/apps/?hl=en&gl=US"  target="_blank">APP</a></h1>
 

<div class="video">

<center>  <video src="../video/InShot_20220924_155207473.mp4" loop autoplay muted></video></center>
</div>
</section>

 


<!-- body end -->




 

 

<?php
    include "newsletter.php";
    include "footer.php";
 ?>







<!-- custom js file link  -->
<script src="../js/script.js"></script>
    
</body>
</html>