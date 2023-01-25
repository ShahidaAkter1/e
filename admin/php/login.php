 

  

<?php
///connection php page import for db connection
include  "connection.php";
 

 
//if submit button clicked
if(isset($_POST['reg_submit'])){

  //get value
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['phone'];
    $password=$_POST['password'];
    $c_password=$_POST['cpassword'];

        //query
        //here crud= table name
        $sql = "insert into user_registration (name,email,phone,password,c_password) values ('$name','$email','$mobile','$password',' $c_password')";

        $select="Select * From user_registration where email='$email' and password='$password' ";
        
        $select_user = mysqli_query($conn,$select);


    if(mysqli_num_rows( $select_user)>0){
        echo "<script type='text/javascript'> alert('user already exists.....') </script>";
    }
    else{
        if($password != $c_password ){

            echo "<script type='text/javascript'> alert('   Confirm password does not match with password.....Tray again') </script>";
        }
        else{
            $run= mysqli_query($conn,$sql);

                 //run or die check
        if($run){
            //echo "Form Submitted successfully";
            //header('location:display.php');//redirect page ..go to display.php page
            echo "<script type='text/javascript'> alert(' Registration successfully.....') </script>";
        }
        else{
            die(mysqli_error($conn));
            echo "<script type='text/javascript'> alert(' Failed to execute query.....') </script>";

        }
    }
        }
    }
 
?>

 



<?php
 
 ///connection php page import for db connection
 include  "connection.php";
 
 session_start();
 ///delete
 //get value from display.php 
 if(isset($_POST['login_submit'])){
 
      //get value
      $email=$_POST['email'];
      $password=$_POST['password'];
  
     //sql query
     
     $sql= "SELECT * FROM user_registration WHERE email='$email' and password='$password'";

     //query run
     $run=mysqli_query($conn,$sql);
     	 
		$count=mysqli_num_rows($run);

		if($count==1){
		// echo "Login  successfully";
		
		echo "<script type='text/javascript'> alert('Login Successful.....') </script>";
		header('location:index.php');//redirect page ..go to display.php page
		}
		else{
			//die(mysqli_error($con));
			//echo 'Not Deleted';
			echo "<script type='text/javascript'> alert('Login error.....') </script>";
		 
		}
		}
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="/home.css">



 <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	background: #beb9be;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color: #FF4B2B;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #1f2702;
	background: -webkit-linear-gradient(to right, #996055, #8f5966);
	background: linear-gradient(to right, #bfddb1, #db8f9f);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}
 </style>




</head>
<body>


    
    <div class="container" id="container">

        <!-- reg start -->
        <div class="form-container sign-up-container">
		<form action="login.php" method="POST">
                <h1>Create Account</h1><br>

                
                
                <input type="text" placeholder="Name" name="name">
                <input type="email" placeholder="Email" name="email">
       
                <input type="phone" placeholder="Phone" name="phone">
                <input type="password" placeholder="Password"  name="password">
                <input type="password" placeholder="Confirm Password" name="cpassword">
				 
                <button name="reg_submit">Sign Up</button>
            </form>
        </div>
     <!-- reg end -->



 




     
     <!-- login start -->
        <div class="form-container sign-in-container">
		<form action="login.php" method="POST">
                <h1>Sign in</h1><br>
                
               
                <input type="email" placeholder="Email" name="email"  required>
                <input type="password" placeholder="Password"  name="password" required>
                <a href="#">Forgot your password?</a>
                <button name="login_submit">Sign In</button>
            </form>
        </div>
<!-- login end -->



        <div class="overlay-container">

            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>

                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>

            </div>
        </div>
    </div>
    
 

 
    <script type='text/javascript'>
        const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');
    
    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });
    
    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
    </script>
    
     
    
 
    
 
</body>
</html>