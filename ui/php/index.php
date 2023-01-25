<?php
session_start();
include "connection.php";
$user_id=$_SESSION['user_id'];
$user_name=$_SESSION['user_name'];
$user_email=$_SESSION['user_email'];

$cart_count=$_SESSION['$cart_total_count'];

if(!isset($user_id)){
    header('location:login.php');
}

if(isset($_GET['logout'])){
    unset($user_id);
    session_destroy();
    header('location:login.php');
}


?>

 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
 <!-- font awesome icon -->
 <script src="https://kit.fontawesome.com/7dfb138ff0.js" crossorigin="anonymous"></script>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/popup.css">
    <link rel="stylesheet" href="../css/newlist_popup.css">

     

</head>
<body>



<!-- header section starts  -->
 




<header>

    <!-- for ahemburg  or 3bar -->
    <div id="menu-bar"  class="fas fa-bars"></div>

    <a href="#" class="logo">nike</a>

    <!-- 
    <nav class="navbar">
        <a href="#home" class="active">home</a>
        <a href="product.php" target="_blank">products</a>
        <a href="category.php" target="_blank">category</a>
        <a href="review.php" target="_blank">review</a>
        <a href="#review" target="_blank">Blog</a>
        <a href="contact.php" target="_blank">Contact US</a>
        <a href="s&r.php" target="_blank">S&R</a>
        <a href="about.php" target="_blank">About US</a>
    </nav>

    <div class="icons">
         
        <a href="cart.php" class="fas fa-shopping-cart"> </a>
        <a href="#" class="fas fa-user"></a>
        <a href="#" >Login</a>
        <a href="index.php?logout=<?php echo $user_id;  ?>" onclick="return confirm('Are you sure want to logout??')" >Logout</a>
         
    </div>
 -->
 <nav class="navbar">
 
    <ul>
        <li> <a href="#" class="active" ><i class="fa-solid fa-house"></i>  Home</a> 
            
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
        <li> <a href="about.php"><i class="fa-solid fa-address-card"></i>About  </a></li>
         
    </ul>     
  </nav>
    

  <div class="icons">
            <ul> 
            <li> <a href="list.php" class="fas fa-heart" id="profile_header"><sup>0</sup> </a></li>
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





<!-- home section starts  -->

<section class="home" id="home">

    <div class="slide-container active">
        <div class="slide">
            <div class="content">
                <span>nike red shoes</span>
                <h3>nike metcon shoes</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat maiores et eos eaque veritatis aut laboriosam earum dolorem iste atque.</p>
                <a href="Product.php" class="btn">Shop Now</a>
            </div>
            <div class="image">
                <img src="../images/home-shoe-1.png" class="shoe" alt="">
                <img src="../images/home-text-1.png" class="text" alt="">
            </div>
        </div>
    </div>

    <div class="slide-container">
        <div class="slide">
            <div class="content">
                <span>nike blue shoes</span>
                <h3>nike metcon shoes</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat maiores et eos eaque veritatis aut laboriosam earum dolorem iste atque.</p>
                <a href="#" class="btn">add to cart</a>
            </div>
            <div class="image">
                <img src="../images/home-shoe-2.png" class="shoe" alt="">
                <img src="../images/home-text-2.png" class="text" alt="">
            </div>
        </div>
    </div>

    <div class="slide-container">
        <div class="slide">
            <div class="content">
                <span>nike yellow shoes</span>
                <h3>nike metcon shoes</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat maiores et eos eaque veritatis aut laboriosam earum dolorem iste atque.</p>
                <a href="#" class="btn">add to cart</a>
            </div>
            <div class="image">
                <img src="../images/home-shoe-3.png" class="shoe" alt="">
                <img src="../images/home-text-3.png" class="text" alt="">
            </div>
        </div>
    </div>

    <div id="prev" class="fas fa-chevron-left" onclick="prev()"></div>
    <div id="next" class="fas fa-chevron-right" onclick="next()"></div>

</section>

<!-- home section ends -->




<?php
    include "feature.php";

 ?>


  
 


<!-- products section starts  -->

<section class="products" id="products">

    <h1 class="heading"> latest <span>products</span> </h1>
    <form action="" method="post">
    <div class="box-container">


<?php
 
$sql="Select * from product";
$result=mysqli_query($conn,$sql);
if($result){
   while($row=mysqli_fetch_assoc($result)){
     //assign row value
       $product_id=$row['id'];  
       $name=$row['name'];
       $price=$row['price'];   
       $image=$row['image']; 
       

     ?>
     
     <?php
  
       echo '
        
        <div class="box">
            <div class="icons">
            <a href="#popup1"  class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="pro_details.php?view_Id='.$row["id"].'"  class="fas fa-eye"> </a>
            
            </div>

';
/*     <a href="pro_details.php?product_cart_Id='.$row["id"].'"  class="fas fa-eye"> </a>*/
 
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
              
                <div class='buttoncart'>
                    
                <a href='cart_php.php?product_Id=".$row['id']."' class='btn'>add to cart</a>
            
            </div>
                 
            </div>
             
        </div>
        
         
         ";
   }
}
?>
 
 <!--  <a href='index.php?product_Id=".$row['id']."' class='btn'>add to cart</a> 
      <input type='submit' value='add to cart' name='add_to_cart' class='btn' >-->
 

    </div>
   
    <div class="loadmore" id="load">Load More</div>
    </form>
</section>

<!-- products section ends -->

 

 


  <?php

include "popup_listname.php";
  ?>



<!-- featured product section starts  -->

<section class="featured" id="featured">

    <h1 class="heading"> <span>featured</span> products </h1>

    <div class="row">
        <div class="image-container">
            <div class="small-image">
                <img src="../images/f-img-1.1.png" class="featured-image-1" alt="">
                <img src="../images/f-img-1.2.png" class="featured-image-1" alt="">
                <img src="../images/f-img-1.3.png" class="featured-image-1" alt="">
                <img src="../images/f-img-1.4.png" class="featured-image-1" alt="">
            </div>
            <div class="big-image">
                <img src="../images/f-img-1.1.png" class="big-image-1" alt="">
            </div>
        </div>
        <div class="content">
            <h3>new nike airmax shoes</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta facilis praesentium odit voluptas illum iure libero quis fuga commodi. Autem.</p>
            <div class="price">$80.99 <span>$120.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>
    </div>

    <div class="row">
        <div class="image-container">
            <div class="small-image">
                <img src="../images/f-img-2.1.png" class="featured-image-2" alt="">
                <img src="../images/f-img-2.2.png" class="featured-image-2" alt="">
                <img src="../images/f-img-2.3.png" class="featured-image-2" alt="">
                <img src="../images/f-img-2.4.png" class="featured-image-2" alt="">
            </div>
            <div class="big-image">
                <img src="../images/f-img-2.1.png" class="big-image-2" alt="">
            </div>
        </div>
        <div class="content">
            <h3>new nike airmax shoes</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta facilis praesentium odit voluptas illum iure libero quis fuga commodi. Autem.</p>
            <div class="price">$80.99 <span>$120.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>
    </div>

    <div class="row">
        <div class="image-container">
            <div class="small-image">
                <img src="../images/f-img-3.1.png" class="featured-image-3" alt="">
                <img src="../images/f-img-3.2.png" class="featured-image-3" alt="">
                <img src="../images/f-img-3.3.png" class="featured-image-3" alt="">
                <img src="../images/f-img-3.4.png" class="featured-image-3" alt="">
            </div>
            <div class="big-image">
                <img src="../images/f-img-3.1.png" class="big-image-3" alt="">
            </div>
        </div>
        <div class="content">
            <h3>new nike airmax shoes</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta facilis praesentium odit voluptas illum iure libero quis fuga commodi. Autem.</p>
            <div class="price">$80.99 <span>$120.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>
    </div>

</section>

<!-- featured products section ends -->



<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="../images/pic1.png" alt="">
            <h3>john deo</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, quos eum. Laborum aut a consequatur ducimus, molestias possimus quisquam rerum temporibus ipsum voluptate accusamus, unde ab asperiores? Exercitationem, unde rem.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
        </div>

        <div class="box">
            <img src="../images/pic2.png" alt="">
            <h3>john deo</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, quos eum. Laborum aut a consequatur ducimus, molestias possimus quisquam rerum temporibus ipsum voluptate accusamus, unde ab asperiores? Exercitationem, unde rem.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="../images/pic3.png" alt="">
            <h3>john deo</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, quos eum. Laborum aut a consequatur ducimus, molestias possimus quisquam rerum temporibus ipsum voluptate accusamus, unde ab asperiores? Exercitationem, unde rem.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>


        <div class="box">
            <img src="../images/pic1.png" alt="">
            <h3>john deo</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, quos eum. Laborum aut a consequatur ducimus, molestias possimus quisquam rerum temporibus ipsum voluptate accusamus, unde ab asperiores? Exercitationem, unde rem.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
        </div>

        <div class="box">
            <img src="../images/pic2.png" alt="">
            <h3>john deo</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, quos eum. Laborum aut a consequatur ducimus, molestias possimus quisquam rerum temporibus ipsum voluptate accusamus, unde ab asperiores? Exercitationem, unde rem.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="../images/pic3.png" alt="">
            <h3>john deo</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, quos eum. Laborum aut a consequatur ducimus, molestias possimus quisquam rerum temporibus ipsum voluptate accusamus, unde ab asperiores? Exercitationem, unde rem.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>

        <div class="box">
            <img src="../images/pic1.png" alt="">
            <h3>john deo</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, quos eum. Laborum aut a consequatur ducimus, molestias possimus quisquam rerum temporibus ipsum voluptate accusamus, unde ab asperiores? Exercitationem, unde rem.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
        </div>

        <div class="box">
            <img src="../images/pic2.png" alt="">
            <h3>john deo</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, quos eum. Laborum aut a consequatur ducimus, molestias possimus quisquam rerum temporibus ipsum voluptate accusamus, unde ab asperiores? Exercitationem, unde rem.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="../images/pic3.png" alt="">
            <h3>john deo</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, quos eum. Laborum aut a consequatur ducimus, molestias possimus quisquam rerum temporibus ipsum voluptate accusamus, unde ab asperiores? Exercitationem, unde rem.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>


        <div class="box">
            <img src="../images/pic3.png" alt="">
            <h3>john deo</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, quos eum. Laborum aut a consequatur ducimus, molestias possimus quisquam rerum temporibus ipsum voluptate accusamus, unde ab asperiores? Exercitationem, unde rem.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>
        
        <div class="box">
            <img src="../images/pic3.png" alt="">
            <h3>john deo</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, quos eum. Laborum aut a consequatur ducimus, molestias possimus quisquam rerum temporibus ipsum voluptate accusamus, unde ab asperiores? Exercitationem, unde rem.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>

    </div>
    <div class="loadmore" id="loadreview">Load More</div>
</section>

<!-- review section ends -->



 <?php
    include "newsletter.php";
    include "footer.php";
 ?>

 













<!-- custom js file link  -->
<script src="../js/script.js"></script>
    
</body>
</html>