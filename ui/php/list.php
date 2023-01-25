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
    <title>Favorite List</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="../../more_less.css">
    <link rel="stylesheet" href="../css/cart.css">
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
     <li> <a href="#"   > <i class="fa-sharp fa-solid fa-star"></i>Review</a></li>
     <li> <a href="contact.php"><i class="fa-solid fa-address-book"></i>Contact</a></li>
     <li> <a href="about.php"><i class="fa-solid fa-address-card"></i>About  </a></li>
      
 </ul>     
 </nav>
 

 <div class="icons">
         <ul> 
         <li> <a href="#" class="fas fa-heart active" id="profile_header"><sup>0</sup> </a></li>
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


 


<section class="review1" id="review">

<h1 class="heading"> Favorite  <span>List</span> </h1>

<div class="box-container"> 

    <div class="box">            
        <h1  >Sandals</h1>
       <p>Product count    : <span>10</span></p>
       <p>Category count : <span>10</span></p>
      <a href="#popup1">  <button class="view_button">Show Product</button></a>
    </div>   
 
    <div class="box">            
        <h1  >Sandals</h1>
       <p>Product count : <span>10</span></p>
       <p>Category count : <span>10</span></p>
      <a href="#view_popup">  <button class="view_button">Show Product</button></a>
    </div>   

     


</div>  
</section>



<div id="popup1" class="overlay">
        <div class="popup">
          <h2>Products List</h2>
          
          <a class="close" href="#products"> &times;</a>
          <div class="content">     

        
    <!-- table start  -->
    <div class="container">
        <div class="row">
           
       <div class="table_total">
       <div class="table">
          <table id="customers">
            <tr>
              <th>Serial</th>     
              <th>Image</th> 
              <th>Name</th>
              <th>Price</th> 
              <th>Quantity</th> 
              <th>Total</th>
              <th  colspan="2">Action</th>
            </tr>
            <?php
    $sql="Select * from cart,product where product.id=cart.product_id and cart.user_id='$user_id'";
    ///query execute
    $result=mysqli_query($conn,$sql);
    $serial=0;
    $total=0;
    $grandtotal=0;
    $delivery_charge=39;
    $discount_price=0;
    $subtotal=0;
    $cart_total_count=0;
    if($result){
       while($row=mysqli_fetch_assoc($result)){
        $serial_id=$row['id'];  
        $user_id=$row['user_id']; 
        $product_id=$row['product_id']; 
        $product_name=$row['name'];
        $product_price=$row['price'];   
        $product_image=$row['image']; 
        $product_quantity=$row['quantity'];  
        //$product_quantity='5';   
        $serial=$serial+1;  
        //$total=($total+$product_price)* $product_quantity;
     
        $cart_total_count=$cart_total_count+1;;
    
        $total=$product_price * $product_quantity;
     
        $subtotal=$subtotal+$total;
        //$delivery_charge='39';
        $discount_price=$subtotal*.1;
        //$grandtotal=($total+$delivery_charge)-$discount_price;
       
       
        echo "
           <tr><td>$serial</td>  ";   
           $_SESSION['product_count_cart_icon']= $serial;
              echo '<td><img src="data:image;base64,'.base64_encode($product_image).'"  width="50" height="50"></td>';
          echo "          
                <td>$product_name</td>
               <td>TK$product_price</td>            
             ";  
             echo ' 
             <td>       
             <div class="qt">
             <form action="cart.php" method="post">
             <input type="submit" value="-" name="decrease">       
             ';
             echo " 
             <p>$product_quantity</p>
             <input type='hidden' name='previous_quantity' value='$product_quantity'> 
             <input type='hidden' name='product_id_quantity' value='$product_id'>
    
             <input type='submit' value='+' name='increase'>
             </form>
             </div>
            </td>
            ";
    echo " 
            <td> $total</td>
              <td> <button class='btn_cart'> <a href='pro_details.php?view_Id=".$row['id']."'  >View</a></button> </td>
              <td>  <button class='btn_cart2'>   <a href='cart_php.php?delete_Id=".$row['id']."' >Delete</a>  </button></td>
               </tr>   
         </tr>    
           ";
       }  
      
    }
     
     $_SESSION['$cart_total_count']= $cart_total_count;
    //$total=0;
    $grandtotal=($subtotal+$delivery_charge)-$discount_price;
    
    
    ?>
    
        </table>
    
        </div>
    
     
    
    
    
    
        <div class="viewdescription">
            <table>
               <tr>
                   <td>Subtotal</td>
                   <td> Tk<?php  echo $subtotal; ?></td>
               </tr>
               <tr>
                   <td>Delivery Charge</td>
                   <td>Tk<?php  echo $delivery_charge; ?></td>
               </tr>
               <tr>
                <td>Discount(10%)</td>
                <td>Tk<?php  echo $discount_price; ?></td>
            </tr> 
               <tr>
                   <td>Grand Total</td>
                   <td> Tk<?php  echo $grandtotal; ?>  </td>
               </tr>
       
     
               </tr>
            </table>
            <hr>  
            <div class="payment">
                <label for="payment">Payment </label>
                <select >
                    <option value="pay_method">Cash on delivery</option>        
                  <option value="pay_method">Online Method</option>    
                </select>
              </div>
    
    
    
            <button class="btn" name="checkout"  > Make Purchase </button>
        </div>
    
            
    </div>
    
             
    <!-- table end  -->

                  
          </div>

           
        </div>
    </div>
    
        </div>
</div>

 

 
<?php
    include "newsletter.php";
    include "footer.php";
 ?>


<script src="../script.js"></script>



