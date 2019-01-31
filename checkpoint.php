<?php
session_start();
 include("includes/database.php");
 include("functions/functions.php");



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

						<?php

						if(isset($_SESSION['user_id'])){

							echo "	<li><a href=cart.php'><span class='glyphicon glyphicon-user'>Cart</span></a></li>";
						}




						?>



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
				<h2 style="color:blue; font-family:helvetica">Need Help?</h2><h2 style="color:blue;">Call Us in 9843516869</h2>
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
					<span style="float:right;margin-right:4px;"> Items:<?php echo Item();?>-  Price: <?php echo total_price();?></span>
					<b style="color:yellow; float:right;margin-right:10px;">Shopping Cart</b>
					<p style="float:right;margin-right:10px;">Welcome to the Guest</p>



				</div>



			</div>


			<?php
			//calling cart function

			cart();

			?>

			<div id="product_box" style='background-color:#dbdbdb;height:auto; margin-top:3px;padding-bottom:10px;'>

				<?php

				if(isset($_SESSION['user_id'])){

						echo "<script> window.open('payment.php','_self')</script>";

				}else{

					echo "
					<div style='margin-left:390px;font-family:italic;'>

					<h1><b style='color:#076c75;font-size:2em;'>           Log In</b></h1>
					</div>

						<br/><br/>


						<div class='row'>

						<div class='col-sm-4'></div>
						<div class='col-sm-4' style='margin-top:25px;'>

						<form action='' method='post'>

						<div class='form-group'>

						<label for='email'><p style='color:#0c00f7;'>Email</p></label>
						<input type='email' name='email' placeholder='Email' id='email' class='form-control'>

						</div>

						<div class='form-group'>

						<label for='pass' ><p style='color:#0c00f7;'>Password</p></label>
						<input type='password' name='pass' placeholder='password' id='pass' class='form-control'>

						</div>

						<div class='form-group'>

						<center><input type='submit' name='submit' value='Login'   class='btn btn-primary'></center>

						</div>

						<center><divs style='color:blue;font-family:italic;'><a href='checkpoint.php?change_pass'>Forgot Password?</a><div></center>

						<center><div>
						<h1><a href='customer_registration.php' style='color:#0c00f7;font-family:italic;text-align:center;font-size:2em;'>New User</a></h1>
						</div></center>

						</form>




						</div>


						</div>




					";

				}


				?>

				<?php

					if(isset($_GET['change_pass'])){

						echo "


							<div align='center' style='width:500px;margin-top:10px;margin-left:300px;'>

							<b style='color:#418ff4;font-family:italic;'>Enter your Email below, we'll send your password to your email</b></br>

							<form action='' method='post'>

							<div class='form-group'>

									<input type='text' name='c_email' class='form-control' placeholder='Enter your email' required>


							</div>

							<div class='form-group'>

									<input type='submit' class='btn btn-success btn-xs' name='forgot_pass' class='form-control' value='Send me Password'>


							</div>

							</form>


							</div>





						";



					}



				?>


					<!--sendind forgot password and checking in database-->


					<?php

						if(isset($_POST['forgot_pass'])){

							$email=htmlentities($_POST['c_email']);

							$check_email="select * from customer_info where customer_email='$email'";
							$run_email=mysqli_query($con,$check_email);

							$count=mysqli_num_rows($run_email);

							if($count == 1){

								$pass="select * from customer_info where customer_email='$email'";
								$run_pass=mysqli_query($con,$pass);
								$cus_info=mysqli_fetch_assoc($run_pass);
								$cusotmer_pass=md5($cus_info['customer_pass']);
								$customer_name=$cus_info['customer_name'];


								$from='admin@mysite.com';
								$subject="Your Password";
								$message="

										<html>

											<h3>Dear $customer_name</h3>
											<b>You have requested your password at www.mysite.com</b>
											<b>Your password is:</b><span style='color:red'>$customer_pass</span>

											<h3>Thank you for usign our website</h3>



										</html>


								";

								mail($c_email,$subject,$message,$from);
								echo "<script>alert('password is sent to your email')</script>";
								echo "<script>window.open('checkpoint.php','_self')</script>";


							}else{

								echo "<script>alert('This email doesnot exist in our database')</script>";
								exit();

							}
						}



					?>




			</div>

		</div><!--end second column-->

	</div>





	</div><!--end of container-->








 <script src="bootstrap/js/jquery2.js" type="text/javascript"></script>
   <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="bootstrap/main.js" ></script>
</body>

</html>


<?php


	if(isset($_POST['submit'])){


		$email=mysqli_escape_string($con,$_POST['email']);
		$password=mysqli_escape_string($con,$_POST['pass']);
		if(empty($email) || empty($password)){
			echo "<script> alert('Please fill out the form..')</script>";
		}
		$pass=md5($password);


		$check_email="SELECT * FROM customer_info WHERE customer_email='$email'";
		$result=mysqli_query($con,$check_email) or die(mysqli_error($con));

		$count_email=mysqli_num_rows($result);


		if($count_email==1){

			$query="SELECT * FROM customer_info WHERE customer_email='$email'";
			$result=mysqli_query($con,$query) or die(mysqli_error($con));
			$row=mysqli_fetch_assoc($result);
			$_SESSION['username']=$row['customer_name'];
			$_SESSION['user_id']=$row['customer_id'];

			echo "<script> window.open('profile.php','_self')</script>";



		}else{

		  echo "<script>alert('Email and password didnt matched')</script>";

		}

	}


?>
