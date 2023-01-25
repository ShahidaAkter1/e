

 <?php

include "connection.php";

//$id=$_GET['update_Id'];
$id=1;
//update
if(isset($_POST['submit1'])){

    //get value
      $name=$_POST['name'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $password=$_POST['password'];
      $c_password=$_POST['c_password'];
  
          //query
          //here crud= table name
          $sql = "insert into contact_message (name,email,subject,message) values ( '$name', '$email','$subject','$message')";
  
          $sql="update  user_registration set name='$name',email='$email',phone='$phone',password='$password',c_password='$c_password'  where id=$id ";
          //run or die check
          $run = mysqli_query($conn,$sql);
  
          if($run){
             // echo "Form Submitted successfully";
             header('location:user.php');//redirect page ..go to display.php page

             echo "<script type='text/javascript'> 
             
           alert('Updated successfully')
 
             </script>";

          }
          else{
              die(mysqli_error($conn));
              //echo 'Not submitted';
              echo "<script type='text/javascript'> alert(' unsuccess.....') </script>";
          }
      }


 


?>