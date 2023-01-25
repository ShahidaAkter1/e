<?php
session_start();
 
include "connection.php";

$id=$_GET['view_Id'];
$sql="Select * from product where id=$id";

///query execute
$result=mysqli_query($conn,$sql);

//if query execute
if($result){
    
 ///fetch row from the table
   while($row=mysqli_fetch_assoc($result)){
     //assign row value
       $product_id=$row['id'];  
       $name=$row['name'];
       $price=$row['price'];   
       $image=$row['image']; 
       $category=$row['category'];
       $sub_category=$row['sub_category'];   
       $delivery_info=$row['delivery_info']; 
       $s_des=$row['s_des'];
       $description=$row['description'];   
       $gender=$row['gender']; 

   }
}







?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    
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


<!-- body start -->
 


<section  id="pro-des" class="top">
 

 <div class="pimg">
      
<?php
     echo '<img src="data:image;base64,'.base64_encode($image).'"  >';
     ?>

 </div>
 
  <div class="des-container">

  <div class="homeicon">
    <i class="fa-solid fa-house-chimney"></i>
    <a href="index.php">Home</a>
  </div>

     <div class="des">
         <div class="name"> <h1><?php echo  $name ; ?></h1></div>
         <div class="sub-des">
              <table>
                 <tr>
                     <td>Brand</td>
                     <td><?php echo  $category; ?></td>
                 </tr>
                 <tr>
                     <td>Product code</td>
                     <td>5454rft</td>
                 </tr>
                 <tr>
                     <td>Availability</td>
                     <td>In stock</td>
                 </tr>
              </table>
         </div>
          <div class="tk"><h2>TK<?php echo  $price; ?></h2></div>
          <div class="offer"><p>Offer is valid only for <span>    <a href="#">batabd.com</a></span>  </p></div>
     </div>
     
     <div class="pdetails">
         <h1>PRODUCT DETAILS</h1>
         <div class="txt">
             <p>  <?php echo  $description; ?> </p>
         </div>
     </div>
     
     <div class="size">
         <div class="div1"></div>
         <div class="div2"></div>
         <div class="div3"></div>
         <div class="div4"></div>
     </div>
     
     <div class="color">
     
     </div>
     
 
<!-- quantity


     <div class="quantity">
         <h1>Quantity:</h1><br>
         <input type="hidden" id="sub" value="<?php  echo $price;   ?>">
     <select name="quantity" id="quantity" onchange="getvalue()">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>

     </select>
     </div>

 
     <script>
        var price=document.getElementById("sub").value;
        var total=document.getElementById("subtotal");
        function getvalue(){
              var select=document.getElementById("quantity").value;
             var subtotal=select*price;
             total.innerHTML=subtotal;

             
       }
             getvalue();

     </script>

 -->


     <div class="quantity">
         <h1>Quantity:</h1><br>
         <div class="counter">
             <span class="down" onClick='decreaseCount(event, this)'>-</span>
             <input type="text" value="1" name="quantity">
             <span class="up"  onClick='increaseCount(event, this)'>+</span>
           </div>
           <br>
         <h1 id="subtotal" >Subtotal : TK599.00</h1>
     </div>
     
     <div class="button">
     
 
      
     <button type="submit" id="btnn" >ADD TO CART</button>
         <button type="submit" id="btnn1">BUY NOW</button>
 
     </div>
  </div>
 </section> 
     

<!--
            <button type="submit" id="btnn" >ADD TO CART</button>
         <button type="submit" id="btnn1">BUY NOW</button>
-->

 <section id="product_des" class="sidemargin">
 
 <div class="description">
 
     <h1>Description</h1>

     <h3>Features:</h3>
     <pre>
- Type:<?php echo  $sub_category; ?> 
- Gender: <?php echo  $gender; ?> 
- Upper Material: PU
- Color: Deep Brown
- Sole: EVA
 
     </pre>
 </div>
 
 <div class="description">
     <h1>Terms & Conditions</h1>
     <div class="term">
          
      <p>Dear Customer, we try our best from our end to provide you the best customer experience.</p>

      <p> **The delivery of your order is subjected to availability of stock.</p>
      
      <p> **Check and receive your product in front of the delivery man. If your product is damaged, defective, incorrect or has any mismatch in size or pricing issue at the time of delivery, please return it immediately to the delivery person.</p>
      
     <p>  For any assistance, you can call our customer service at 09678772828. (9.00am to 9.00pm except Govt. holidays) But in case if you couldn't reach the customer service, you can provide your issue details after selecting the proper issue section in our Report Issue Section.</p>
       
     </div>
 </div>
 </section>




 




 

 
<section class="products" id="products">
 
 <p>Related Products</p>


  <div class="box-container">

<?php
 
 $sql="Select * from product where category='$category' and sub_category='$sub_category' and id!=$id and gender='$gender'";
 
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
 
      

</section>
     
<div class="loadmore"  > <a href="product.php">More Products</a></div>





 
    <!-- body end -->






 

 
 
<?php
    include "newsletter.php";
    include "footer.php";
 ?>




<!-- custom js file link  -->
<script src="../js/script.js"></script>
<script src="../js/quantity.js"></script>
    
</body>
</html>

