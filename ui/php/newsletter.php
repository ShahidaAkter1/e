<?php
///connection php page import for db connection
include  "connection.php";
 //if submit button clicked
if(isset($_POST['submit'])){

    //get value
     
      $email=$_POST['email'];
          //query
          //here crud= table name
          $sql = "insert into newsletter (email) values ('$email')";
  
          //run or die check
          $run = mysqli_query($conn,$sql);
  
          if($run){
            echo "<script type='text/javascript'> alert('Email submitted successfully.....') </script>";
             // header('location:.php');//redirect page ..go to display.php page
          }
          else{
              die(mysqli_error($conn));
              echo "<script type='text/javascript'> alert('Error.....') </script>";
          }
      }

 
?>





<!-- newsletter section starts  -->

<section class="newsletter">

    <div class="content">
        <h3>monthly newsletter</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum ullam veniam at itaque culpa hic corporis saepe dicta doloremque nihil.</p>
        <form action="#newsletter" method="post">
            <input type="email" placeholder="enter your email" class="box" name="email">
            <input type="submit" value="send" class="btn" name="submit">
        </form>
    </div>

</section>

<!-- newsletter section ends -->