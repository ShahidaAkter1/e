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
        <li><a href="user.php" target="_blank"><span class="icon"><i class="fa-solid fa-users"></i></span><span class="item">People</span> </a> </li>     
        <li><a href="order.php" target="_blank"><span class="icon"><i class="fa-brands fa-first-order"></i></span><span class="item">Order</span> </a> </li>    
        <li><a href="#"  class="active"><span class="icon" ><i class="fa-solid fa-plus"></i></span><span class="item">Add Products</span></a></li>
        <li><a href="product.php"  target="_blank" ><span class="icon" ><i class="fa-brands fa-product-hunt"></i></span><span class="item">All Products</span></a></li>
        <li><a href="newsletter.php"><span class="icon"><i class="fa-solid fa-newspaper"></i></span><span class="item">Newsletter</span></a></li>
        <li><a href="message.php"><span class="icon"><i class="fa-regular fa-message"></i></span><span class="item">Message</span></a></li>
        <li><a href="#"><span class="icon"><i class="fas fa-cog"></i></span><span class="item">Settings</span></a></li>
        <li><a href="#"><span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span><span class="item">Logout</span></a></li>


    </ul>
    </div>
<!--side end  -->


   

<?php
///connection php page import for db connection
 include "connection.php";
 
 //if submit button clicked
 
 if(isset($_POST['add_product'])){

    //get value
      $name=$_POST['pname']; 
      $price=$_POST['price'];
      //$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
     
      $category=$_POST['pcategory'];
      $sub_category=$_POST['psub_category'];
      $gender=$_POST['pgender'];
      $delivery_info=$_POST['pdelivery'];
      $s_des=$_POST['pshort_des'];
      $description=$_POST['pdes']; 
      $feature=$_POST['pfeature']; 
          //query
          //here crud= table name
          $sql = "insert into product (name,price,image,category,sub_category,delivery_info,s_des,description,gender,feature) values ('$name','$price','$image','$category','$sub_category','$delivery_info','$s_des','$description','$gender','$feature')";         
          $run= mysqli_query($conn,$sql);
          if($run){

           
            //echo "Form Submitted successfully";
            //header('location:add_product.php');//redirect page ..go to display.php page
            echo "<script type='text/javascript'> alert(' Add product successfully.....') </script>";
        }
        else{
            die(mysqli_error($conn));
            echo "<script type='text/javascript'> alert(' Failed to execute query.....') </script>";
        }              
      }
     


       



      

?>


<!--body text start  -->
    <!--start writing -->

    <!--header for any section -->
<div class="headingcontainer">
    <h1> Add Products</h1>
</div>


<div class="addproduct">
    <!-- form start -->
<section id="form">
    <form action="#" method="post"  enctype="multipart/form-data" >
        
        <h2>Add Products</h2>
    
        <input type="text"  placeholder="Products name" name="pname" ><br>
    
        <input type="text"   placeholder="Products price" name="price"><br>
    
        

        <input type="file" name="image"  required>
        
        <input type="text"    placeholder="Category" name="pcategory"> 
        <input type="text"   placeholder="Sub Category" name="psub_category"><br>
        <input type="text"   placeholder="Gender" name="pgender"><br>

        <input type="text"   placeholder="Delivery Information" name="pdelivery"><br>
        

        <input type="text"    placeholder="Short description" name="pshort_des"><br>
    
       <textarea   cols="30" rows="10" placeholder="Products description" name="pdes"  id="message"></textarea>
       <textarea   cols="30" rows="10" placeholder="Feature Information" name="pfeature"  id="message"></textarea>
    <br>
     
       
       <input class="btn" type="submit" value="Submit" name="add_product" onclick="fn()">                   
                  
    </form>
 
</div>








<div class="gap"></div>
<div class="headingcontainer">
    <h1> Add Section</h1>
</div>


<div class="addproduct">
    <!-- form start -->
<section id="form">
    <form action="contact.php" method="post" >
        
        <h2>Add Products</h2>
    
        <input type="text" id="name" placeholder="Products name" name="name" ><br>
    
        <input type="text" id="email" placeholder="Products price" name="email"><br>
    
        <input type="file" id="subject"  placeholder="Add image" name="subject"><br>
        <input type="text" id="subject"  placeholder="Category" name="subject"> 
        <input type="text" id="subject"  placeholder="Sub Category" name="subject"><br>

        <input type="text" id="subject"  placeholder="Delivery Information" name="subject"><br>

        <input type="text" id="subject"  placeholder="Short description" name="subject"><br>
    
       <textarea id="" cols="30" rows="10" placeholder="Products description" name="message"  id="message"></textarea>
    <br>
     
       
       <input class="btn" type="submit" value="Submit" name="submit1" onclick="fn()">                   
                  
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