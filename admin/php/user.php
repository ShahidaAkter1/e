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
        <li><a href="#"  > <span class="icon"><i class="fas fa-home"></i></span><span class="item">Home</span></a></li>
        <li><a href="dashboard.php" target="_blank" ><span class="icon"><i class="fa-solid fa-table-columns"></i></span> <span class="item">My Dashboard</span>   </a> </li>
        <li><a href="#" class="active"><span class="icon"><i class="fa-solid fa-users"></i></span><span class="item">People</span> </a> </li>  
        <li><a href="order.php"  ><span class="icon"><i class="fa-brands fa-first-order"></i></span><span class="item">Order</span> </a> </li>       
        <li><a href="add.php"  target="_blank" ><span class="icon" ><i class="fa-solid fa-plus"></i></span><span class="item">Add Products</span></a></li>
        <li><a href="product.php"  target="_blank" ><span class="icon" ><i class="fa-brands fa-product-hunt"></i></span><span class="item">All Products</span></a></li>
        <li><a href="newsletter.php" target="_blank"><span class="icon"><i class="fa-solid fa-newspaper"></i></span><span class="item">Newsletter</span></a></li>
        <li><a href="message.php" target="_blank"><span class="icon"><i class="fa-regular fa-message"></i></span><span class="item">Message</span></a></li>
        <li><a href="#" target="_blank"><span class="icon"><i class="fas fa-cog"></i></span><span class="item">Settings</span></a></li>
        <li><a href="logout.php" target="_blank"><span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span><span class="item">Logout</span></a></li>


    </ul>
    </div>
<!--side end  -->





<!--body text start  -->
    <!--start writing -->

    <!--header for any section -->
    <div class="headingcontainer">
     <h1> Customer Information</h1>
 </div>
 
 
 <div class="userinfo">
     <!-- form start -->
   
   
     <table id="customers">
        <tr>
          <th>ID</th> 
          <th>Name</th> 
          <th>Email</th>
          <th>Phone</th> 
          <th>Password</th> 
          <th>C password</th> 
          <th>Address</th> 
          <th>Action</th>
        </tr>



<?php
 
$sql="Select * from user_registration";
///query execute
$result=mysqli_query($conn,$sql);

//if query execute
if($result){
    
 ///fetch row from the table
   while($row=mysqli_fetch_assoc($result)){
     //assign row value
       $id=$row['id'];
       $name=$row['name'];
       $email=$row['email'];     
       $phone=$row['phone'];
       $password=$row['password'];
       $c_password=$row['c_password'];
       $address=$row['address'];

echo"
        <tr>
                <td>$id</td>      
                <td>$name</td>
                <td>$email</td>      
                <td>$phone</td>
                <td>$password</td>      
                <td>$c_password</td>
                <td>$address</td>
                <td>          
                <button class='btn'> <a href='update_user.php?update_Id=".$row['id']."'  >Update</a></button>
                <button class='btn_danger'>   <a href='user.php?delete_Id=".$row['id']."' >Delete</a>  </button>
                </td>
        </tr>
 
";


   }
  }

 ?>

 
</table>
 </div>
     




  
 <div class="headingcontainer">
     <h1> Admin Information</h1>
 </div>
 
 
 <div class="userinfo">
     <!-- form start -->
   
   
     <table id="customers">
        <tr>
          <th>ID</th> 
          <th>Name</th> 
          <th>Email</th>
          <th>Phone</th> 
          <th>Password</th> 
          <th>C password</th> 
          <th>Action</th>
        </tr>
             <tr>
             <td>$id</td>      
             <td>$name</td>
             <td>$email</td>      
             <td>$phone</td>
             <td>$password</td>      
             <td>$cpassword</td>
           
              
             <td>          
             <button class="btn"> Update</button>
             <button class="btn_danger"> Delete</button>
             </td>
           </tr>
</table>
 </div>

<!--complete text -->



</div>
<!--body text end  -->




</div>


    <!--body end  -->




    <script src="../js/sidebar.js"></script>


</body>
</html>