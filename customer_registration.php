<?php
session_start();
 include("includes/database.php");
 include("functions/functions.php");

 if(isset($_SESSION['user_id'])){

 	echo "<script>window.open('profile.php','_self')</script>";
 }

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

<body>

<!--header-->


	<nav class="navbar navbar-inverse fixed-top">
		<a href="index1.php" class="navbar-brand">Online Shopping</a>
		<div class="container">



			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</div>

			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav ">
					<li><a href="index1.php">Home</a></li>
					<li><a href="#">My Account</a></li>
					<li><a href="all_products.php">All Products</a></li>
					<li>
						<form class="navbar-form navbar-left" action="result.php" method="POST" enctype="multipart/form-data">

						<input type="text" name="search" class="form-control" placeholder="search products">
						<input type="submit" name="submit" class="btn btn-primary btn-sm" value="submit">

					</form>

					</li>


				</ul>
				<ul class="nav navbar-nav navbar-right" >

					<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart">Cart</span></a></li>

					<!--<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user">SignIn</span></a>

						<ul class="dropdown-menu" style="width:300px;">



						<div class="panel panel-primary" style="background-color: rgb(0, 102, 255); margin-bottom: -6px; margin-top: -7px;">

							<!--<div class="panel-body">

							<form action="" method="POST">

							<label for="email" style="color:white;">Email</label><br>
							<input type="text" name="email" placeholder="email" class="form-control">

							<label for="email" style="color:white;">Password</label><br>
							<input type="password" name="pass" placeholder="password" class="form-control">

							<p><br></p>

								<a href="#" style="float:left; color:white;">Forgot Password ?</a> <input type="submit" class="btn btn-primary" name="login" value="Login" style="float:right;">

							</form><!--end of form-->

							</div>

						</div>


						</ul>


					</li>






					</li>



				</ul>
			</div>

		</div>

	</nav><!--end of navbar-->


	<div class="container-fluid">

	<div class="header_img">

		<div class="row">

			<div class="col-sm-4">

			<img src="cart_pic/shopping.png" class="img-responsive img-rounded" width="450" height="250">
			</div>

			<div class="col-sm-6"></div>

			<div class="col-sm-2">
				<img src="cart_pic/callnow.png"  width="150" height="80" class="img-responsive">
				<h2 style="color:blue; font-family:helvetica">Need Help ?</h2><h2 style="color:black;">Call Us in 9800000010</h2>
			</div>

		</div>

	</div><!--end for header image-->




	<div class="row">

		<div class="col-sm-2">

			<ul class="nav nav-pills nav-stacked">
							<li class='active'><a href='#'>Categories</a></li>
						<?php getCat(); ?>

						</ul>

		</div><!--end of first column-->

		<div class="col-sm-10">

			<div id="headline">


				<div id="headline_content">
					<p><a href="cart.php" style="color:yellow; float:right;text-decoration:underline;">Go To Cart</a></p>
					<span style="float:right;margin-right:4px;"> Items:<?php echo Item();?>-  Price: <?php total_price();?></span>
					<b style="color:yellow; float:right;margin-right:10px;">Shopping Cart</b>
					<p style="float:right;margin-right:10px;">Welcome to the Guest</p>



				</div>



			</div>


			<?php
			//calling cart function

			cart();

			?>




				<div id="product_box">


				<div class="row" style="margin-top:50px;">

						<div class="col-sm-2"></div>
						<div class="col-sm-8">



							<div class="panel panel-primary">

							<div class="panel-heading"><b style="text-align:center;">Create an Account</b></div>

							<div class="panel-body">



							<form class="form-horizontal" method="POST" action="" enctype="multipart/form-data" id="signup">

							  <div class="form-group">
							    <label for="name" class="col-sm-2 control-label">Customer name</label>
							    <div class="col-sm-10">
							      <input type="text" name="c_name" class="form-control" id="name" placeholder="customer name" required>

							    </div>
							  </div>





							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Customer Email</label>
							    <div class="col-sm-10">
							      <input type="email" name="c_email" class="form-control" id="inputEmail3" placeholder="Email" required>

							    </div>
							  </div>

							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
							    <div class="col-sm-10">
							      <input type="password" name="c_pass" class="form-control" id="inputPassword3" placeholder="Password" required>
							    </div>
							  </div>



							 <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Country</label>
							    <div class="col-sm-10">
							     <select name='c_country'>

							     	<option>Select country</option>
							     	<option>Nepal</option>
							     	<option>China</option>
							     	<option>India</option>
							     	<option>Japan</option>
							     	<option>Pakistan</option>
							     	<option>Bangladesh</option>
							     	<option>Afghanistan</option>
							     	<option>Australia</option>
							     	<option>USA</option>


							     </select>

							    </div>
							  </div>

							   <div class="form-group">
							    <label for="city" class="col-sm-2 control-label"> City</label>
							    <div class="col-sm-10">
							      <input type="text" name="c_city" class="form-control" id="city" placeholder="city" required>
							    </div>
							  </div>

							   <div class="form-group">
							    <label for="contact" class="col-sm-2 control-label">Contact no</label>
							    <div class="col-sm-10">
							      <input type="text" name="c_contact" class="form-control" id="contact" placeholder="contact no" required>
							    </div>
							  </div>

							   <div class="form-group">
							    <label for="address" class="col-sm-2 control-label">Address</label>
							    <div class="col-sm-10">
							      <input type="text" name="c_address" class="form-control" id="address" placeholder="address" required>
							    </div>
							  </div>


							   <div class="form-group">
							    <label for="image" class="col-sm-2 control-label">Customer Image</label>
							    <div class="col-sm-10">
							      <input type="file" name="cimage" class="form-control" id="cimage" required/>
							    </div>
							  </div>





							  <div class="form-group">
							    <div class="col-sm-offset-2 col-sm-10">
							      <button type="submit" name="register" class="btn btn-primary">Register</button>
							    </div>
							  </div>

							</form><!--end 0f form-->


							</div><!--end of panel body-->

							</div><!--end of panel-->



						</div><!--column for form-->


				</div><!--end of row-->
				</div>

				</div>



			</div>



	</div>





	</div><!--end of container-->








 <script src="bootstrap/js/jquery2.js" type="text/javascript"></script>
   <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="bootstrap/js/jquery.validate.min.js"></script>
   <script>

   $("#signup").validate();

   </script>

</body>

</html>




<?php

if(isset($_POST['register'])){

	$cname=mysqli_escape_string($con,$_POST['c_name']);
	$cemail=mysqli_escape_string($con,$_POST['c_email']);
	$cpass=mysqli_escape_string($con,$_POST['c_pass']);
	$ccountry=mysqli_escape_string($con,$_POST['c_country']);
	$ccity=mysqli_escape_string($con,$_POST['c_city']);
	$ccontact=mysqli_escape_string($con,$_POST['c_contact']);
	$caddress=mysqli_escape_string($con,$_POST['c_address']);
	$pass=md5($cpass);

	$cimage=$_FILES['cimage']['name'];
	$image_tmp=$_FILES['cimage']['tmp_name'];
	$size=$_FILES['cimage']['size'];
	$error=$_FILES['cimage']['error'];

	$ip=getIpAddress();

	$fileExt=explode('.',$cimage);
	$fileActualExt=strtolower(end($fileExt));

	$allowed=array('jpg','jpeg','tif','png');

	if(!in_array($fileActualExt,$allowed)){
		echo "<script>alert('This type of file is not allowed')</script>";
		exit();
	}
	if(!$error==0){

		if($size>100000){

			echo "<script>alert('size is too large')</script>";
			exit();
		}
		exit();
	}

	$check="SELECT customer_email FROM customer_info WHERE customer_email='$cemail'";
	$result_email=mysqli_query($con,$check) or die(mysqli_error($con));
	$count_email=mysqli_num_rows($result_email);
	var_dump($count_email);

	if(!$count_email>0){


	move_uploaded_file($image_tmp,"customer/customer_photos/$cimage") or die("cannot upload");

	$query="INSERT INTO `customer_info` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES (NULL, '$cname', '$cemail', '$pass', '$ccountry', '$ccity', '$ccontact', '$caddress', '$cimage', '$ip')";

	$result=mysqli_query($con,$query) or die("errorin query".mysqli_error($con));

	echo "<script> alert('Registration is completed. ')</script>";

	$check_cart="SELECT * FROM cart";
	$result=mysqli_query($con,$check_cart);
	$count=mysqli_num_rows($result);
	if($count>0){
		echo "<script>window.open('checkpoint.php','_self')</script>";
	}

	}else{

		echo "<script> alert('Email is already existed! Please try with new one.. ')</script>";
	}









}



?>
