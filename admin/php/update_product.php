   <!--  -->
<?php

include "connection.php";
///delete
//get value from display.php 
if(isset($_GET['delete_Id'])){

  $delete_Id=$_GET['delete_Id'];

  //sql query
  $sql= "delete from product where id='$delete_Id'"; 
  $run=mysqli_query($conn,$sql);

  if($run){
      //echo "Delete  successfully";
      echo "<script type='text/javascript'> alert('Deleted successfully.....') </script>";
      header('location:message.php');//redirect page ..go to display.php page
  }
  else{
      die(mysqli_error($conn));
      //echo 'Not Deleted';
      echo "<script type='text/javascript'> alert(' Not deleted.....') </script>";
  }
}



//show in form
$id=$_GET['update_product_Id'];
$sql="select * from product where id=$id";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$id=$row['id'];
$name=$row['name'];
$price=$row['price'];
$image=$row['image'];
$category=$row['category'];
$sub_category=$row['sub_category'];
$gender=$row['gender'];
$delivery=$row['delivery_info'];
$s_des=$row['s_des'];
$des=$row['description'];
$fe_info=$row['feature'];


//update
if(isset($_POST['update_product'])){

    //get value
    $name=$_POST['pname'];
    $price=$_POST['price'];
   // $image=$_POST['image'];
    $category=$_POST['pcategory'];
    $sub_category=$_POST['psub_category'];
    $gender=$_POST['pgender'];
    $delivery=$_POST['pdelivery'];
    $s_des=$_POST['pshort_des'];
    $des=$_POST['pdes'];
    $fe_info=$_POST['pfeature'];
 
          //query
          //here crud= table name
          $sql="update  product set name='$name',price='$price',category='$category',sub_category='$sub_category',delivery_info=' $delivery',s_des='$s_des',description=' $des',gender='$gender',feature=' $fe_info'  where id=$id ";
        
          //run or die check
          $run = mysqli_query($conn,$sql);
  
          if($run){
             // echo "Form Submitted successfully";
             header('location:product.php');//redirect page ..go to display.php page

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
 
 
 
 
 
 
 <!--  -->

 <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product Information</title>
    <link rel="stylesheet" href="../css/sidebar.css">
 
  <!-- font awesome icon -->
  <script src="https://kit.fontawesome.com/7dfb138ff0.js" crossorigin="anonymous"></script>

  <style>
     .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  max-width: 50%;
 
}
  </style>

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
        <li><a href="user.php" target="_blank"><span class="icon"><i class="fa-solid fa-users"></i></span><span class="item">People</span> </a> </li>     
        <li><a href="order.php" target="_blank"><span class="icon"><i class="fa-brands fa-first-order"></i></span><span class="item">Order</span> </a> </li>    
        <li><a href="add.php" target="_blank"   ><span class="icon" ><i class="fa-solid fa-plus"></i></span><span class="item">Add Products</span></a></li>
        <li><a href="product.php"  class="active"   ><span class="icon" ><i class="fa-brands fa-product-hunt"></i></span><span class="item">All Products</span></a></li>
        <li><a href="newsletter.php"><span class="icon"><i class="fa-solid fa-newspaper"></i></span><span class="item">Newsletter</span></a></li>
        <li><a href="message.php"><span class="icon"><i class="fa-regular fa-message"></i></span><span class="item">Message</span></a></li>
        <li><a href="#"><span class="icon"><i class="fas fa-cog"></i></span><span class="item">Settings</span></a></li>
        <li><a href="#"><span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span><span class="item">Logout</span></a></li>


    </ul>
    </div>
<!--side end  -->


   



<!--body text start  -->
    <!--start writing -->

    <!--header for any section -->
<div class="headingcontainer">
    <h1> Update Product Information</h1>
</div>


<div class="addproduct">
    <!-- form start -->
<section id="form">
    <form action="#" method="post"  enctype="multipart/form-data" >
 
 
   <?php echo '<img src="data:image;base64,'.base64_encode($image).'" width="300" height="300" class="center" id="changeImage">'; ?> <br><br><br>
  
  
 
 

    <h2>ID</h2>   <input type="text"  placeholder="ID" readonly name="pid" value="<?php echo $id; ?> "><br>   
      <h2>Name</h2>   <input type="text"  placeholder="Products name" name="pname" value="<?php echo $name; ?> "><br>       
      <h2>Price </h2>  <input type="text"   placeholder="Products price" name="price" value="<?php echo $price; ?> "><br>   

      <!--
      <h2>Image</h2> <input type="file" name="image"  required   >  
    -->
      <h2>Category</h2>  <input type="text"    placeholder="Category" name="pcategory" value="<?php echo $category; ?> "> 
       <h2>Sub Category </h2> <input type="text"   placeholder="Sub Category" name="psub_category"  value="<?php echo $sub_category; ?>  "><br>
       <h2> Gender</h2>  <input type="text"   placeholder="Gender" name="pgender" value="<?php echo $gender; ?> "><br>
       <h2>Delivery Information </h2> <input type="text"   placeholder="Delivery Information" name="pdelivery" value="<?php echo $delivery; ?> "><br>        
       <h2> Short description</h2>  <input type="text"    placeholder="Short description" name="pshort_des" value="<?php echo $s_des; ?> "><br>
       <h2>Products description </h2> <textarea   cols="30" rows="10" placeholder="Products description" name="pdes"  id="message"> <?php echo $des; ?></textarea>
       <h2>Feature Information </h2> <textarea   cols="30" rows="10" placeholder="Feature Information" name="pfeature"  id="message"><?php echo $fe_info; ?></textarea>
    <br>
     
       
       <input class="btn" type="submit" value="Update" name="update_product" onclick="fn()">                   
                  
    </form>
 
</div>









    
 

<!--complete text -->



</div>
<!--body text end  -->




</div>


    <!--body end  -->




    <script src="../js/sidebar.js"></script>
    <script src="../js/script.js"></script>


</body>
</html>