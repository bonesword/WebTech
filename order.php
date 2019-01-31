<?php

 include("includes/database.php");
 function getIpAddress(){

	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
	    $ip = $_SERVER['REMOTE_ADDR'];
	}

	return $ip;


}


	$cid=$_GET['cid'];
	$ip=getIpAddress();
	$total=0;
	

	//getting totla amount of customer

	$cart="SELECT * FROM cart WHERE ip_add='$ip'";
	$run_query=mysqli_query($con,$cart) or die(mysqli_error($con));
	$status="pending";
	$invoice_no=mt_rand(1,1000);
	$count_pro=mysqli_num_rows($run_query);

	while($record=mysqli_fetch_assoc($run_query)){

		$pro_id=$record['pro_id'];
		$qty=$record['qty'];

		$query="SELECT * FROM products WHERE product_id='$pro_id'";
		$result=mysqli_query($con,$query) or die(mysqli_error($con));

		while($price=mysqli_fetch_assoc($result)){

			$p_price=array($price['product_price']);
			$value=array_sum($p_price);
			$total+=$value;
		}
	}

// getting quantity from cart

	$get_cart="SELECT * FROM cart";
	$run_cart=mysqli_query($con,$get_cart);
	$get_qty=mysqli_fetch_array($run_cart);
	$qty=$get_qty['qty'];
	$total=$qty*$total;
	$count=mysqli_num_rows($run_cart);
	if(!$count>0){

		echo "<script>alert('Cart is empty.Please do shopping first')</script>";
		echo "<script>window.open('profile.php','_self')</script>";
	}


	

	//customer order

	$insert="INSERT INTO `customer_order` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `total_products`, `order_date`, `order_status`) VALUES (NULL, '$cid', '$total', '$invoice_no', '$count_pro', NOW(), '$status');";
	$run_insert=mysqli_query($con,$insert) or die(mysqli_error($con));

	$ordered_product="INSERT INTO `ordered_products` (`customer_id`, `invoice_no`, `product_id`, `qty`, `order_status`) VALUES ('$cid', '$invoice_no', '$pro_id', '$qty', '$status')";
	$run_order=mysqli_query($con,$ordered_product);

	$delete_cart="DELETE FROM cart WHERE ip_add='$ip'";
	mysqli_query($con,$delete_cart) or die(mysqli_error($con));

		echo "<script>alert('ordered successfully submitted.Thanks!')</script>";
		echo "<script>window.open('customer/my_account.php','_self')</script>";



		
?>


