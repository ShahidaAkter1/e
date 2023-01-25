   

<?php
///connection php page import for db connection
session_start();
include "connection.php";
$user_id=$_SESSION['user_id'];
$user_name=$_SESSION['user_name'];
$user_email=$_SESSION['user_email'];
$cart_count=$_SESSION['$cart_total_count'];

//include  "backend/newsletter.php";
 //if submit button clicked
if(isset($_POST['submit1'])){

    //get value
      $name=$_POST['name'];
      $email=$_POST['email'];
      $subject=$_POST['subject'];
      $message=$_POST['message'];
  
          //query
          //here crud= table name
          $sql = "insert into contact_message (name,email,subject,message) values ( '$name', '$email','$subject','$message')";
  
          //run or die check
          $run = mysqli_query($conn,$sql);
  
          if($run){
             // echo "Form Submitted successfully";
             // header('location:contact.php');//redirect page ..go to display.php page

             echo "<script type='text/javascript'> 
             
           alert('message send successfully')
 
             </script>";

          }
          else{
              die(mysqli_error($conn));
              //echo 'Not submitted';
              echo "<script type='text/javascript'> alert(' unsuccess.....') </script>";
          }
      }

 
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
    
    <link rel="stylesheet" href="../css/navbar.css">

    <link rel="stylesheet" href="../css/style.css">
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
     <li> <a href="index.php"   ><i class="fa-solid fa-house"></i>  Home</a> 
         
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
     <li> <a href="contact.php" class="active" ><i class="fa-solid fa-address-book"></i>Contact</a></li>
     <li> <a href="about.php"><i class="fa-solid fa-address-card"></i>About  </a></li>
      
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





<!-- body start -->
<!-- body start -->
 

<!-- map start -->
<section id="contact-details" class="padding">
     
   
<div class="details">
    <span>Get in touch</span>
    <h2>Visit one of our agency locations or contact us today</h2>

    <h3>Head Office</h3>

    <div>
        <li>
            <i class="far fa-map"> </i>
            <p>56 New York</p>
        </li>
        <li>
            <i class="far fa-envelope"></i>
            <p>contact@example.com</p>
        </li>
        <li>
            <i class="far fa-phone-alt"></i>
            <p>contact@example.com</p>
        </li>
        <li>
            <i class="far fa-clock"></i>
            <p>contact@example.com</p>
        </li>
    </div>
</div>

<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116832.7165051819!2d90.3342559892102!3d23.782216991990225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c6d8c9911201%3A0xbf2569188f4ddb9d!2sBismillah%20Tower!5e0!3m2!1sen!2sbd!4v1656526130963!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</section>

<!-- map end -->



<!-- form start -->
<section id="form">
<form action="contact.php" method="post" >
    <h3>Leave a message</h3>
    <h2>We love hear from you</h2>

    <input type="text" id="name" placeholder="Your name" name="name" ><br>

    <input type="text" id="email" placeholder="Email" name="email"><br>


    <input type="text" id="subject"  placeholder="Subject" name="subject"><br>

   <textarea id="" cols="30" rows="10" placeholder="your message" name="message"  id="message"></textarea>
<br>
 
   
   <input class="btn" type="submit" value="Submit" name="submit1" onclick="fn()">                   
              
</form>


 

 



</section>
<!-- form end -->


<!-- body end -->






 



 
 
            </div>




        </div>
    </div>
</section>

 

 


<?php
    include "newsletter.php";
    include "footer.php";
 ?>



<!-- custom js file link  -->
<script src="../js/script.js"></script>
    
</body>
</html>




