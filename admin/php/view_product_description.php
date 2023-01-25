   <!--  -->
   <?php

include "connection.php";
///delete
 


//show in form
$id=$_GET['view_Id'];
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







 


?>
 
 
 
 
 
 
 <!--  -->

 <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Product Information</title>
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

.viewdescription{
  margin: 30px;
 
  border: 1px solid black;
  border-radius: 5px;
  padding: 10px;
  margin-top: -40px;
}
.viewdescription table td{
  padding: 10px;
  font-size: 20px;
  
}
.viewdescription table tr td:nth-child(1){
  font-weight: 600;
  padding: 10px 28px;
  width: 20%;
  
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
    <h1> View Product Information</h1>
</div>


<div class="addproduct">
    <!-- form start -->
 
    
 
 
   <?php echo '<img src="data:image;base64,'.base64_encode($image).'" width="300" height="300" class="center" id="changeImage">'; ?> <br><br><br>
  
   <div class="viewdescription">
        <table>
           <tr>
               <td>Product Name</td>
               <td><?php echo $name ;    ?></td>
           </tr>
           <tr>
               <td>Product Price</td>
               <td><?php echo $price ;    ?></td>
           </tr>
           <tr>
               <td>Category</td>
               <td><?php echo $category;    ?></td>
           </tr>
           <tr>
               <td> Sub Category</td>
               <td><?php echo $sub_category ;    ?></td>
           </tr>
           <tr>
               <td>Gender</td>
               <td><?php echo $gender ;    ?></td>
           </tr>
           <tr>
               <td>Delivery Information</td>
               <td><?php echo $delivery;    ?></td>
           </tr>
           <tr>
               <td>Short description</td>
               <td><?php echo $s_des ;    ?></td>
           </tr>
           <tr>
               <td>Products description</td>
               <td><?php echo $des ;    ?></td>
           </tr>
           <tr>
               <td>Feature Information</td>
    <td>  
        <p>
        <?php echo $fe_info;    ?>
        </p>
    </td>
           </tr>
        </table>
   </div>
                     
                  
 
 
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