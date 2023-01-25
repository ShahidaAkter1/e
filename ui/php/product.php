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
    <title>Products</title>
    
    <link rel="stylesheet" href="../css/navbar.css">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/product.css">
 

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

     <li> <a href="#"  class="active" ><i class="fa-brands fa-product-hunt"></i> Products</a></li>
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
 


 


    
 
<!-- products section starts  -->

<section class="products" id="products">

    <h1 class="heading"> latest <span>products</span> </h1>

    <div class="box-container">

 
    <?php
 
 
$sql="Select * from product ORDER BY id DESC ";

///query execute
$result=mysqli_query($conn,$sql);

//if query execute
if($result){
    
 ///fetch row from the table
   while($row=mysqli_fetch_assoc($result)){
     //assign row value
       $id=$row['id'];  
       $name=$row['name'];
       $price=$row['price'];   
       $image=$row['image']; 
       echo '
        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="pro_details.php?view_Id='.$row["id"].'"  class="fas fa-eye"> </a>
            </div>
';
 
echo '<img src="data:image;base64,'.base64_encode($image).'"  >';
 
echo "
            <div class='content'>
                <h3> $name  </h3>
                <div class='price'>$price <span>$150.99</span></div>
                <div class='stars'>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='far fa-star'></i>
                </div>
                <a href='cart_php.php?product_Id=".$row['id']."' class='btn'>add to cart</a>
            </div>
        </div>

         ";



   }
}
?>

    </div>

 
    <div class="loadmore" id="load">Load More</div>
 

</section>

<!-- products section ends -->



 
<!-- products section starts  -->

<section class="product" id="products">

    <h1 class="heading"> Men <span>products</span> </h1>

    <div class="box-container">

 
    <?php
include "connection.php";


$sql="Select * from product   where category='Bata' and gender='Male' ORDER BY id DESC ";

///query execute
$result=mysqli_query($conn,$sql);

//if query execute
if($result){
    
 ///fetch row from the table
   while($row=mysqli_fetch_assoc($result)){
     //assign row value
       $id=$row['id'];  
       $name=$row['name'];
       $price=$row['price'];   
       $image=$row['image']; 
       echo '
        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="pro_details.php?view_Id='.$row["id"].'"  class="fas fa-eye"> </a>
            </div>
';
echo '<img src="data:image;base64,'.base64_encode($image).'"  >';
  echo "
            <div class='content'>
                <h3> $name  </h3>
                <div class='price'>$price <span>$150.99</span></div>
                <div class='stars'>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='far fa-star'></i>
                </div>
                <a href='cart_php.php?product_Id=".$row['id']."' class='btn'>add to cart</a>
            </div>
        </div>

         ";
   }
}
?>    

    </div>
    <div class="loadmore" id="loadpro">Load More</div>
</section>

<!-- products section ends -->




<!-- Bata products section starts  -->

<section class="product" id="products">

    <h1 class="heading"> Women <span>products</span> </h1>
    <div class="box-container">
<?php
$sql="Select * from product   where category='Bata' and gender='Female' ORDER BY id DESC ";
$result=mysqli_query($conn,$sql);
if($result){
   while($row=mysqli_fetch_assoc($result)){
     //assign row value
       $id=$row['id'];  
       $name=$row['name'];
       $price=$row['price'];   
       $image=$row['image']; 
       echo '
        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="pro_details.php?view_Id='.$row["id"].'"  class="fas fa-eye"> </a>
            </div>

';
 
echo '<img src="data:image;base64,'.base64_encode($image).'"  >';
 
  echo "
            <div class='content'>
                <h3> $name  </h3>
                <div class='price'>$price <span>$150.99</span></div>
                <div class='stars'>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='far fa-star'></i>
                </div>
                <a href='cart_php.php?product_Id=".$row['id']."' class='btn'>add to cart</a>
            </div>
        </div>

         ";
   }
}
?>

    </div>
    <div class="loadmore" id="load">Load More</div>
</section>

<!-- products section ends -->

 
 

 

 
<?php
    include "newsletter.php";
    include "footer.php";
 ?>






<!-- custom js file link  -->
<script src="../js/script.js"></script>
    
</body>
</html>