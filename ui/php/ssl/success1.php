<?php
session_start();
 


$val_id=urlencode($_POST['val_id']);
$store_id=urlencode("shopz631043f60fb5e");
$store_passwd=urlencode("shopz631043f60fb5e@ssl");
$requested_url = ("https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php?val_id=".$val_id."&store_id=".$store_id."&store_passwd=".$store_passwd."&v=1&format=json");

$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $requested_url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false); # IF YOU RUN FROM LOCAL PC
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false); # IF YOU RUN FROM LOCAL PC

$result = curl_exec($handle);

$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if($code == 200 && !( curl_errno($handle)))
{

	# TO CONVERT AS ARRAY
	# $result = json_decode($result, true);
	# $status = $result['status'];

	# TO CONVERT AS OBJECT
	$result = json_decode($result);

	# TRANSACTION INFO
	$status = $result->status;
	$tran_date = $result->tran_date;
	$tran_id = $result->tran_id;
	$val_id = $result->val_id;
	$amount = $result->amount;
	$store_amount = $result->store_amount;
	$bank_tran_id = $result->bank_tran_id;
	$card_type = $result->card_type;

	# EMI INFO
	$emi_instalment = $result->emi_instalment;
	$emi_amount = $result->emi_amount;
	$emi_description = $result->emi_description;
	$emi_issuer = $result->emi_issuer;

	# ISSUER INFO
	$card_no = $result->card_no;
	$card_issuer = $result->card_issuer;
	$card_brand = $result->card_brand;
	$card_issuer_country = $result->card_issuer_country;
	$card_issuer_country_code = $result->card_issuer_country_code;

	# API AUTHENTICATION
	$APIConnect = $result->APIConnect;
	$validated_on = $result->validated_on;
	$gw_version = $result->gw_version;

 


} 
else {

	echo "Failed to connect with SSLCOMMERZ";
}

?>

 
<?php
include "../connection.php";
$user_id=$_SESSION['user_id'];
$sql="Select * from user_registration where id=$user_id";
$result=mysqli_query($conn,$sql);
if($result){
   while($row=mysqli_fetch_assoc($result)){
       $name=$row['name'];
       $email=$row['email'];   
       $phone=$row['phone']; 
	   $address=$row['address'];    
   }
}



?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="success.css">
</head>
 


<body>
<div class="btn">
		 <h1> <a href="../index.php"><button>Home</button></a> Invoice  <span class="span">(  Payment Successful )</span> </h1>
	</div>
 <div class="container">
 
 
 <div class="invoice-box">
	 
	 <table cellpadding="0" cellspacing="0">
		 <tr class="top">
			 <td colspan="2">
				 <table>
					 <tr>
						 <td class="title">
							 
							 <img src="../../images/logo/logo.jpg" alt="">
						 </td>

						 <td class="det">
							 Invoice #: 123<br />
							 <?php echo $tran_date ?>
 
							 
						  
						 </td>
					 </tr>
				 </table>
			 </td>
		 </tr>

		 <tr class="information">
			 <td colspan="2">
				 <table>
					 <tr>
						 <td>
							 Vashantek<br />
							 Road : 12<br />
							 Dhaka Cantonment, mirpur:3
						 </td>

						 <td>
							 Flowery Online Ecommerce<br />
							 Jewel Rana<br />
							 js.rana@gmail.com 
							 
						 </td>
					 </tr>
				 </table>
			 </td>
		 </tr>




<tr class="heading">
 <td>Customer Information-</td>
<td></td>
  
</tr>

<tr class="item">
 <td>Name</td>

 <td><?php echo $name ?></td>
</tr>

<tr class="item">
 <td>Email</td>

 <td><?php echo $email ?></td>
</tr>

<tr class="item">
 <td>Phone</td>

 <td><?php echo $phone ?></td>
</tr>

<tr class="item">
 <td>Address</td>

 <td><?php echo  $address ?></td>
</tr>





<!-- Payment-->
<tr class="heading">
 <td>Payment Details</td>
<td></td>
  
</tr>

<tr class="item">
 <td>Status</td>

 <td><?php echo $status ?></td> 
 
</tr>

<tr class="item">
 <td>Date & Time</td>

 <td><?php echo $tran_date ?></td>
</tr>

<tr class="item">
 <td>Payment ID</td>

 <td><?php echo $tran_id ?></td>
</tr>

<tr class="item">
 <td>Payment Card Type</td>

 <td><?php echo $card_type ?></td>
</tr>



<tr class="item">
 <td>Bank Transaction ID</td>

 <td><?php echo $bank_tran_id ?></td>
</tr>


<br><br><br>
<!-- Amount-->
		<tr class="heading">
			 <td>Amount</td>

			 <td>Tk</td>
		 </tr>

		 <tr class="item">
			 <td>Payble amount</td>

			 <td><?php echo $amount ?></td>
		 </tr>

 


 
	 <form action='pass_db.php' method='POST'>    
          <?php echo"

		  <input type='hidden' value='$user_id'  name='c_id'>
		  <input type='hidden' value='$name'  name='c_name'>
		  <input type='hidden' value='$phone'  name='c_phone'>
		  <input type='hidden' value='$email'  name='c_email'>
		  <input type='hidden' value='$address'  name='c_address'>
	 
 
		  <input type='hidden' value='$status'  name='status'>
		  <input type='hidden' value='$tran_date'  name='tran_date'>
		  <input type='hidden' value='$tran_id'  name='tran_id'>
		  <input type='hidden' value='$card_type'  name='card_type'>
		  <input type='hidden' value='$bank_tran_id'  name='bank_tran_id'>
		  <input type='hidden' value='$amount'  name='amount'>
		  

		 
		  " ; ?>
       
        <button class="btn"  name="pass_info"  > Done </button>
        </form>
 </div>
 </div>


</body>
</html








<?php
//pass all info to the database






?>