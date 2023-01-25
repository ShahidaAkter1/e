 <!--  -->
 <?php

include "connection.php";
///delete
//get value from display.php 
if(isset($_GET['delete_Id'])){

  $delete_Id=$_GET['delete_Id'];

  //sql query
  $sql= "delete from user_registration where id='$delete_Id'"; 
  $run=mysqli_query($conn,$sql);

  if($run){
      //echo "Delete  successfully";
      echo "<script type='text/javascript'> alert('Deleted successfully.....') </script>";
      header('location:user.php');//redirect page ..go to display.php page
  }
  else{
      die(mysqli_error($conn));
      //echo 'Not Deleted';
      echo "<script type='text/javascript'> alert(' Not deleted.....') </script>";
  }
}


//show in form
$id=$_GET['update_Id'];
$sql="select * from user_registration where id=$id";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$id=$row['id'];
$name=$row['name'];
$email=$row['email'];
$phone=$row['phone'];
$address=$row['address'];
$password=$row['password'];
$c_password=$row['c_password'];


//update
if(isset($_POST['submit1'])){

    //get value
      $name=$_POST['name'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $address=$_POST['address'];

      $password=$_POST['password'];
      $c_password=$_POST['c_password'];
  
          //query
          //here crud= table name
          $sql="update  user_registration set name='$name',email='$email',phone='$phone',password='$password',c_password='$c_password',address='$address'  where id=$id ";
          //run or die check
          $run = mysqli_query($conn,$sql);
  
          if($run){
             // echo "Form Submitted successfully";
             header('location:user.php');//redirect page ..go to display.php page

             echo "<script type='text/javascript'> 
             
           alert('Updated successfully')
 
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
    <li><a href="user.php" class="active" ><span class="icon"><i class="fa-solid fa-users"></i></span><span class="item">People</span> </a> </li>   
    <li><a href="order.php" target="_blank"><span class="icon"><i class="fa-brands fa-first-order"></i></span><span class="item">Order</span> </a> </li>      
    <li><a href="add.php" target="_blank"><span class="icon"><i class="fa-solid fa-plus"></i></span><span class="item">Add Products</span></a></li>
    <li><a href="product.php"  target="_blank" ><span class="icon" ><i class="fa-brands fa-product-hunt"></i></span><span class="item">All Products</span></a></li>
    <li><a href="newsletter.php" target="_blank"  ><span class="icon"><i class="fa-solid fa-newspaper"></i></span><span class="item">Newsletter</span></a></li>
    <li><a href="message.php"  target="_blank" ><span class="icon"><i class="fa-regular fa-message"></i></span><span class="item">Message</span></a></li>
    <li><a href="#" target="_blank"><span class="icon"><i class="fas fa-cog"></i></span><span class="item">Settings</span></a></li>
    <li><a href="#" target="_blank"><span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span><span class="item">Logout</span></a></li>


</ul>
    </div>
<!--side end  -->

 



<!--body text start  -->
    <!--start writing -->

    <!--header for any section -->
 
  
 <div class="headingcontainer">
     <h1>Update User Information </h1>
 </div>
 
 <div class="addproduct">
        
        <!-- form start -->
     <section id="form">
         <form action="#" method="post" >
      
            <p class="view">ID</p>
             <input type="text"   placeholder="Customer ID" name="id" readonly value= <?php echo $id; ?>  ><br>
         
               <p class="view">Name</p>
             <input type="text"   placeholder="Customer name" name="name" value= <?php echo $name; ?>  ><br>
         
             <p class="view">Email</p>
             <input type="text"   placeholder="Customer Email" name="email" value= <?php echo $email; ?> ><br>
         
             <p class="view">Phone</p>
               <input type="text"   placeholder="Phone" name="phone" value= <?php echo $phone; ?> ><br>
               <p class="view">Address</p>
               <input type="text"   placeholder="Address" name="address" value= <?php echo $address; ?> ><br>

               <p class="view">Password</p>
               <input type="text"   placeholder="Password" name="password" value= <?php echo $password; ?> ><br>

               <p class="view">Confirm Password</p>
               <input type="text"   placeholder="Confirm Password" name="c_password" value= <?php echo $c_password; ?> ><br>
         
                
          
            
              <input class="btn" type="submit" value="Update" name="submit1"  id="view">  
           
                  
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