
<?php include("includes/database.php");?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
   <link rel="stylesheet" href="style.css" media="all">
	</head>

<body style="background-color:#adc2eb;">

	<div id="wrapper">
		
		<div id="header">
			
				<img src="cart_pic/cover2.png" width="1000" height="150" class="image-responsive">

		</div><!--end of header-->


		<nav class="navbar navbar-inverse">

			<ul class="nav navbar-nav">
				
				<li><a href="">Home</a></li>
				<li><a href="#">My Account</a></li>
				<li><a href="all_products.php">All Products</a></li>

				<li><a href="register.php">Sign Up</a></li>
				<li><a href="cart.php">Shopping Cart</a></li>
				<li><a href="#"> Contact Us</a></li>


			</ul>

			<ul class="nav navbar-nav navbar-right">
				
				<form class="navbar-form navbar-left" action="result.php" method="POST" enctype="multipart/form-data">
					
					<input type="text" name="search" placeholder="search products">
					<input type="submit" name="submit" class="btn btn-primary" value="submit">

				</form>

			</ul>

		</nav><!--end of navbar-->

		<div class="content_wrapper">

			<div class="row">
				
				<div id="row_border">
				
					<div class="col-sm-2">
						<ul class="nav nav-pills nav-stacked">
							<li class='active'><a href='#'>Categories</a></li>
						<?php

							$get_cat="SELECT * FROM categories";
							$run_cat=mysqli_query($con,$get_cat)
							 or die("error in query".mysqli_error($con));
							 while($row=mysqli_fetch_assoc($run_cat)){
							 	$cat_id=$row['cat_id'];
							 	$cat_title=$row['cat_title'];

						
						echo "<li><a href='index.php?id=$cat_id'>".$cat_title."</a></li>";
					 }?>

						</ul>

					</div><!--end of first column-->



				</div>

					<div class='col-sm-10'> 

					

					</div><!--end of second col-->

			</div><!--end of row-->

		
			
		

		</div><!--end of content wrapper-->


	</div><!--end of wrapper-->




	
	<script src="bootstrap/css/jquery.min.js"></script>
	<script src="bootstrap/css/bootstrap.min.js"></script>
</body>

</html>
