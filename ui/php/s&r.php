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
    <title>Shipping and Policy</title>
    
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
     <li> <a href="index.php"  class="active"  ><i class="fa-solid fa-house"></i>  Home</a> 
         
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

<section id="shippingreturn" class="section-p1">
    <div id="return">
    
        <h4>Returns Policy</h4>
        <p>You may return most new, unopened items within 30 days of delivery for a full refund. We'll also pay the return shipping costs if the return is a result of our error (you received an incorrect or defective item, etc.).</p>
    <p>You should expect to receive your refund within four weeks of giving your package to the return shipper, however, in many cases you will receive a refund more quickly. This time period includes the transit time for us to receive your return from the shipper (5 to 10 business days), the time it takes us to process your return once we receive it (3 to 5 business days), and the time it takes your bank to process our refund request (5 to 10 business days).</p>
    <p>If you need to return an item, please Contact Us with your order number and details about the product you would like to return. We will respond quickly with instructions for how to return items from your order.</p>
    
    </div>
    
    <div id="shipping">
        <h4>Shipping</h4>
        <p>We can ship to virtually any address in the world. Note that there are restrictions on some products, and some products cannot be shipped to international destinations.</p>
    
    <p>When you place an order, we will estimate shipping and delivery dates for you based on the availability of your items and the shipping options you choose. Depending on the shipping provider you choose, shipping date estimates may appear on the shipping quotes page.</p>
    <p>Please also note that the shipping rates for many items we sell are weight-based. The weight of any such item can be found on its detail page. To reflect the policies of the shipping companies we use, all weights will be rounded up to the next full pound.</p>
    </div>



    <div id="shipping">
        <h4>Refund</h4>
        <p>We don't process refund for orders which are in "Shipped". We only process refund for Cancel, Pending or Returned orders. If your order is shipped, you are requested to check with the 3rd Party Logistics Provider first to whom your consignment is provided.</p> 
   <p>After getting your refund request, our team will process the refund after crosschecking and verifying whether your product has reached to your or not.</p>
  <p>Please provide your details such as Order No, Order Date, Contact No. (the number from which your order was created), payment method (Bkash/Nagad/SSLCommerz) and any other relevant information.</p>
<p>For Bkash and Nagad payment, we disburse our refund only via Bkash. Please provide your preferred Bkash number in which you want to receive your refund. (Ideally the number should be same through which you paid via Nagad/Bkash)  </p>
<p>If you pay via your debit/credit card (via SSLCommerz) and make a refund request, after crosschecking and processing from our end it may take 7-10 working days from the end of SSLCommerz to disburse your refund.</p>
<p>If you pay via Bkash/Nagad and make a refund request, after crosschecking and processing from our end it may take 10-15 working days from the end of Bkash to disburse your refund.</p>
</div>



<div id="shipping">
        <h4>Ordering Policy</h4>
     <p>Service is only available for articles (products) which are shown in stock on our website</p>
   <p>The delivery of your order is subjected to availability of stock.</p>
   <p>Only one product should be booked in one order, in case of any customer needs to order multiple products or same products in multiple quantity, customers will need to place multiple separate orders.</p>
   <p>Currently, each order will be shipped only to a single destination address. If customers wish to ship products to different addresses, customers will need to place multiple separate orders.
   </p>
   
<p>Orders that are paid for cannot be cancelled.</p>

<p>For Order related queries, please kindly contact our Customer Service at 09678772828. (9.00am to 9.00pm except Govt. holidays).</p>



    </div>

    <div id="shipping">
        <h4>Size Change</h4>
     
   <p>Dear Customer,</p>
   <p>We are committed to ensure your satisfaction with any merchandise you have ordered from Batabd.com. The delivery of your order is subjected to availability of stock. You are expected to check and receive your product in front of the delivery man. If your product is damaged, defective, incorrect or has any mismatch in size or pricing issue at the time of delivery, please return it immediately to the delivery person.</p>
   <p>If the size doesn't fit, you can exchange the size of the product bought from Bata E-Commerce site within 7 days from the delivery date. We will not accept the exchange request if you request for exchange after 7 days from the delivery date.</p>
   <p>We will only accept exchange that the product(s) being returned for exchange is unused, clean, and in their original state and packaging. In this case please contact our customer service regarding which store can be the most convenient one for you to get the replacement from depending on the product, size and stock availability.</p>
<p>You have to call our customer service at 09678772828. (9.00am to 9.00pm except Govt. holidays) to initiate the exchange.</p>

<p>An exchange cannot be done with a product of a different model.</p>

<p>Please keep your invoice safe and intact as it is essential to give the same to the store while getting your product exchanged.</p>

    </div>



    <div id="shipping">
        <h4>WARRANTY POLICY</h4>
     
   <p>100% claim of paid amount provided for merchandise bought from Batabd.com in case of any major manufacturing defects, if the concerned issue is raised to our customer service and then the product is brought to our store within 30 days from the date of the delivery.</p>
   
   
   
    </div>











    </section>
    
     





    
    <!-- body start -->






 

 
 
<?php
    include "newsletter.php";
    include "footer.php";
 ?>




<!-- custom js file link  -->
<script src="../js/script.js"></script>
    
</body>
</html>

