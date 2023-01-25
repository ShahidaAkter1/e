<?php
 
include "connection.php";
//$user_id=$_SESSION['user_id'];
$user_name=$_SESSION['user_name'];
$user_email=$_SESSION['user_email'];
 

?>
 
 <div id="popup1" class="overlay">
    <div class="popup">
      <h2>Add Products To</h2>
      <h1> <i class="fa-solid fa-arrows-rotate" onClick="history.go(0);">  </i>  Reload Page</h1>
      
      <a class="close" href="#products"> &times;</a>
      <div class="content">
      <form action="#popup1" method="post">
      <p>Please select your own favorite list  </p>

        
      
<?php
    $sql="Select * from list where user_id='$user_id' limit 1";
    $result=mysqli_query($conn,$sql);
    if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];  
        $name=$row['name'];          
        echo " 
        <input type='radio'  name='list_name' > <label for='html'>$name</label>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;
        <input type='hidden' name='list_name' value= $name >
        <input type='hidden' name='user_id_list' value= $user_id >
      
        <a href='#'><button name='p_submit' class='btn'>Done</button></a> 
        " ;       
        
    }
    
    }

?>

 
    </form>
      </div>





<div class="content">
      <form action="#popup1" method="post">   
  <?php
    $sql="Select * from list where user_id='$user_id' limit 1,1 ";
    $result=mysqli_query($conn,$sql);
    if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];  
        $name=$row['name'];          
        echo " 
        <input type='radio'  name='list_name' > <label for='html'>$name</label>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;
        <input type='hidden' name='list_name' value= $name >
        <input type='hidden' name='user_id_list' value= $user_id >
      
        <a href='#'><button name='p_submit' class='btn'>Done</button></a> 
        " ;       
    }  
   }

  ?>
  
    </form>
      </div>
        <div class="new">
        <i class="fa-sharp fa-solid fa-plus">  &nbsp;&nbsp;&nbsp;<a href="#popup2">Create new list</a></i>  
        </div>
    </div>
</div>









 
<!--  
 <div id="popup1" class="overlay">
    <div class="popup">
      <h2>Add Products To</h2>
      <h1> <i class="fa-solid fa-arrows-rotate" onClick="history.go(0);">  </i>  Reload Page</h1>
      
      <a class="close" href="#products"> &times;</a>
      <div class="content">
      <form action="#popup1" method="post">
      <p>Please select your own favorite list  </p>

        
      
 <?php
    $sql="Select * from list where user_id='$user_id'   ";
    $result=mysqli_query($conn,$sql);
    if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];  
        $name=$row['name'];          
        echo " 
        <input type='radio'  name='list_name' > <label for='html'>$name</label> <br>
        <input type='hidden' name='list_name' value= $name >
        <input type='hidden' name='user_id_list' value= $user_id >
        " ;
        
    }
    
    }

 ?>


 
 
<a href="#"><button name="p_submit" class="btn">Done</button></a>
    
    </form>
      </div>

        <div class="new">
        <i class="fa-sharp fa-solid fa-plus">  &nbsp;&nbsp;&nbsp;<a href="#popup2">Create new list</a></i>  
        </div>
    </div>
  </div>
  -->

  
 <!-- popup section starts  
 
   <div id="popup1" class="overlay">
    <div class="popup">
      <h2>Add Products To</h2>
      <a class="close" href="#products"> &times;</a>
      <div class="content">
        <form action="#">
          <p>Please select your own favorite list  </p>
       <input type="radio" id="html" name="fav_language" value="HTML"> <label for="html">Sneakers</label><br>       
       <input type="radio" id="css" name="fav_language" value="CSS"> <label for="css">Shoes</label><br>
       <input type="radio" id="javascript" name="fav_language" value="JavaScript">   <label for="javascript">Sandals</label>     
     <br>
       <a href="#"  class="btn">Done</a>
    </form>
      </div>
        <div class="new">
        <i class="fa-sharp fa-solid fa-plus">  &nbsp;&nbsp;&nbsp;<a href="#popup2">Create new list</a></i>  
        </div>
    </div>
  </div>
popup section end -->


<?php
    if(isset($_POST['p_submit'])){
          $name=$_POST['list_name'];
          $user_id=$_POST['user_id_list']; 
       
          $sql = "insert into list1 (user_id,name ) values ('$user_id','$name' )";
          $run = mysqli_query($conn,$sql);
          if($run){
           // echo "<script type='text/javascript'> alert('Email submitted successfully.....') </script>";
             // header('location:.php');//redirect page ..go to display.php page
          }
          else{
              die(mysqli_error($conn));
              echo "<script type='text/javascript'> alert('Error.....') </script>";
          }
      }
?>

















<!--new list popup section starts -->
<div id="popup2" class="overlay">
    <div class="popup">
      <h2>Add Products To</h2>
      <a class="close" href="#products"> &times;</a>
      <div class="content">
        <form action="#popup1" method="post">
          <p >Write your list name </p>
      <input type="text" class="new_name" placeholder="Enter new list name" name="new_name_list" required ><br>
     <?php
          echo " 
          <input type='hidden' name='user_id_list' value= $user_id >
          <input type='hidden' name='product_id_list' value= $product_id_list >
          " ;  
     ?>
       
       <a href="#"><button name="new" class="btn">Done</button></a>
 
    </form>
      </div>
        </div>
    </div>
 

<?php

 if(isset($_POST['new'])){
        $name=$_POST['new_name_list'];
        $user_id=$_POST['user_id_list'];
  $count="Select * from list where user_id='$user_id'   ";
  $run_count = mysqli_query($conn,$count);
 

  if(mysqli_num_rows($run_count)>3){
       
        $sql = "insert into list (user_id,name) values ('$user_id','$name')";
        $run = mysqli_query($conn,$sql);
        if($run){
          echo "<script type='text/javascript'> alert(' submitted successfully.....') </script>";
            // header('location:.php');//redirect page ..go to display.php page
        }
        else{
            die(mysqli_error($conn));
            echo "<script type='text/javascript'> alert('Error.....') </script>";
        }
      }

      else{ 
        echo "<script type='text/javascript'> alert('New list can't be create. Please remove previous list to create new one....') </script>";
       }
      
  }

 

 
 
 

  

 
?>
 <!--new list popup section end -->
 

 