<?php

session_start();
 include("includes/database.php");
 include("functions/functions.php");




?>

<?php

$ip=getIpAddress();

$query="SELECT * FROM customer_info WHERE customer_ip='$ip'";
$result=mysqli_query($con,$query) or die(mysqli_error($con));

$record=mysqli_fetch_assoc($result);

$customer_id=$record['customer_id'];



?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
   <link rel="stylesheet" href="styles/style.css" media="all">

  
	</head>

<body style="background-color:#d0d6e0;"> 

<div class="container-fluid">
	
<div class="row">
	
<div class="col-sm-3"></div>
<div class="col-sm-6">
	
<div style="padding:20px;">

	<div style="margin-left:100px;margin-bottom:10px;">
	<p><b style="color:#2a2c2d;font-family:italic;font-size:2em;">You have a following payment option</b></p>	
	</div>
	<img src="cart_pic/payment.png">
	<a href="order.php?cid=<?php echo $customer_id;?>" style="color:blue;">PayOffline/cash on delivery</a>



</div>


</div>
<div class="col-sm-4"></div>


</div><!--end of row-->


</div>

</body>
</html>