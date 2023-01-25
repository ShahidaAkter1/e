 <!--  -->
 <?php

include "connection.php";
///delete
//get value from display.php 
if(isset($_GET['delete_Id'])){

  $delete_Id=$_GET['delete_Id'];

  //sql query
  $sql= "delete from contact_message where id='$delete_Id'"; 
  $run=mysqli_query($conn,$sql);

  if($run){
      //echo "Delete  successfully";
      echo "<script type='text/javascript'> alert('Deleted successfully.....') </script>";
      //header('location:message.php');//redirect page ..go to display.php page
  }
  else{
      die(mysqli_error($conn));
      //echo 'Not Deleted';
      echo "<script type='text/javascript'> alert(' Not deleted.....') </script>";
  }
}


//show in form
$id=$_GET['view_Id'];
$sql="select * from contact_message where id=$id";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$id=$row['id'];
$name=$row['name'];
$email=$row['email'];
$subject=$row['subject'];
$message=$row['message'];



 


?>




 <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <link rel="stylesheet" href="../css/sidebar.css">
 
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
    <li><a href="order.php" target="_blank"><span class="icon"><i class="fa-brands fa-first-order"></i></span><span class="item">Order</span> </a> </li>      
    <li><a href="add.php" target="_blank"><span class="icon"><i class="fa-solid fa-plus"></i></span><span class="item">Add Products</span></a></li>
    <li><a href="product.php"  target="_blank" ><span class="icon" ><i class="fa-brands fa-product-hunt"></i></span><span class="item">All Products</span></a></li>
    <li><a href="newsletter.php"   ><span class="icon"><i class="fa-solid fa-newspaper"></i></span><span class="item">Newsletter</span></a></li>
    <li><a href="#"  class="active"><span class="icon"><i class="fa-regular fa-message"></i></span><span class="item">Message</span></a></li>
    <li><a href="#" target="_blank"><span class="icon"><i class="fas fa-cog"></i></span><span class="item">Settings</span></a></li>
    <li><a href="#" target="_blank"><span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span><span class="item">Logout</span></a></li>


</ul>
    </div>
<!--side end  -->





<!--body text start  -->
    <!--start writing -->

    <!--header for any section -->
 
  
 <div class="headingcontainer">
     <h1> Message From Customer </h1>
 </div>
 
 <div class="addproduct">
        
        <!-- form start -->
     <section id="form">
         <form action="#" method="post" >
      
         
               <p class="view">Name</p>
             <input type="text" id="name" placeholder="Customer name" name="name" value= <?php echo $name; ?>  ><br>
         
             <p class="view">Email</p>
             <input type="text" id="email" placeholder="Customer Email" name="email" value= <?php echo $email; ?> ><br>
         
             <p class="view">Subject</p>
               <input type="text" id="subject"  placeholder="Subject" name="subject" value= <?php echo $subject; ?> ><br>
         
               <p class="view">Message</p>
            <textarea id="" cols="30" rows="10" placeholder="Message" name="message"  id="message" value= ""  ><?php echo $message; ?></textarea>
         <br>
          
            
            <a href="message.php"> <input class="btn" type="text" value="View Done" name="submit1"  id="view"> </a>
                  
         </form>
     
     
     
           </div>
       
 
 

<!--complete text -->



</div>
<!--body text end  -->
</div>


    <!--body end  -->




    <script src="../js/sidebar.js"></script>


</body>
</html>