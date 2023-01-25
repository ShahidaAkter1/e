
<?php
session_start();
include "connection.php";
$user_id=$_SESSION['user_id'];
$user_name=$_SESSION['user_name'];
$user_email=$_SESSION['user_email'];
 

 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    
  
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/product.css">
    <link rel="stylesheet" href="../css/navbar.css">


   <!-- font awesome icon -->
    <script src="https://kit.fontawesome.com/7dfb138ff0.js" crossorigin="anonymous"></script>
<style>
    /*category**/
    .navbar1{
    background-color: rgb(248, 239, 246);
    text-align: center;
    padding: 0px 5px;
    margin-top: 100px;
    position:fixed;
    top:0; 
    left:0; 
    right:0;
    z-index: 500;
    
    }

    .active{
        color: green;
    }
    .navbar1 a{
    text-decoration: none;
    display: inline-flex;
    padding: 15px;
    font-size: 20px;
    color: black;
    margin-left: 20px;
    margin-top: 10px;
    }
    .navbar1 a:hover{
    background-color: darkgrey;
    
    }
    .login{
    display: inline;
    position: relative;
    }
    .navbar1 .login .active{
        color: blue;
        font-size: 26px;
        font-weight: 600;
        background-color:beige;
    }
    .login_content{
    background-color:rgb(211, 238, 211);
    text-align: left;
    display: none;
    position: absolute;
    top: 32px;
    left: 15px;
    padding: 1px;
    font-size: 10px;
    border-radius: 5px;
    min-width: 800px;
    }
    .login_content a{
    color: #0f0f0f;
    
    }
    .login:hover .login_content a:hover{
    background-color: rgb(212, 221, 218);
    color: red;
    }

    /*End login */
    .login:hover .login_content  {
    display:block;
    background-color:white;
    }
  </style>


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
     <li> <a href="#"  class="active" ><i class="fa-sharp fa-solid fa-filter"></i> Category</a>
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
         <li> <a href="cart.php" class="fas fa-shopping-cart" id="profile_header"><sup>0</sup></a></li>
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
 


  <!-- navbar start -->
     <div class="navbar1">
    <div class="login"  >
            <a href="category.php"   >Men  </a>
           <i class="fa-solid fa-square-caret-down"></i>
          
        <div class="login_content">
            <a href="# ">Men  Shoes</a>
                <a href="# ">Men Sneaker Shoes</a>
                <a href="# ">Men Sandals </a>
                 
        </div>
    </div>
     <!-- About End --> 
    

           <!-- Admission start -->
    <div class="login">
        <a href="category_women.php"  >Women </a>
        <i class="fa-solid fa-square-caret-down"></i>
        <div class="login_content">
            <a href="#">Ladies Heel </a>
                <a href="#">Ladies Sports Shoes </a>
                <a href="#">Ladies Sandals </a>
                <a href="#">Ladies Shoes </a>
        </div>
    </div>
     <!-- admission End --> 
 
    <!-- Chat with Sadia Hostel start -->
    <div class="login">
        <a href="#" class="active">Kids </a>
        <i class="fa-solid fa-square-caret-down"></i>
        <div class="login_content">
            
                <a href="#sandals">Sandals</a>
                <a href="#sports">Sports</a>
                <a href="#casuals">Casuals </a>
                 
        </div>
    </div>
     <!-- Chat with Sadia Hostel End --> 

   

    </div>
</div>
 <!-- Login End --> 

 

     </div>
   
</div>


    
 
<!-- products section starts  -->
<br><br><br><br><br><br> <br><br> 
<section class="products" id="shoes">
 
    <h1 class="heading"> men    <span>shoes</span> </h1>

    <div class="box-container">

 
    <?php
include "connection.php";
 
$sql="Select * from product where category='Bata' and gender='Male' and sub_category='Shoe' ORDER BY id DESC   ";

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

</section>

<!-- products section ends -->



 
<!-- products section starts  -->

<section class="product" id="sneakers">

    <h1 class="heading"> Men <span>sneakers</span> </h1>

    <div class="box-container">

 
    <?php
include "connection.php";


$sql="Select * from product   where category='Bata' and gender='Male' and sub_category='Sneaker' ORDER BY id DESC ";

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
   
</section>

<!-- products section ends -->




<!-- Bata products section starts  -->

<section class="product" id="sandals">

    <h1 class="heading"> Men  <span>sandals</span> </h1>
    <div class="box-container">
<?php
$sql="Select * from product   where category='Bata' and gender='Male' and sub_category='Sandal' ORDER BY id DESC ";
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