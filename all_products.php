<?php
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
		<a href="" class="navbar-brand">Online Shopping</a>
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
					
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user">SignIn</span></a>

						<ul class="dropdown-menu" style="width:300px;">
							
						<div class="panel panel-primary" style="background-color: rgb(0, 102, 255); margin-bottom: -6px; margin-top: -7px;">
							
							<div class="panel-body">
								
							<label for="email" style="color:white;">Email</label><br>
							<input type="text" name="email" placeholder="email" class="form-control">

							<label for="email" style="color:white;">Password</label><br>
							<input type="password" name="pass" placeholder="password" class="form-control">

							<p><br></p>

								<a href="#" style="float:left; color:white;">Forgot Password</a> <input type="submit" class="btn btn-primary" name="login" value="Login" style="float:right;">

							</div>

						</div>

						</ul>
						

					</li>
					<li><a href="customer_registration.php"><span class="glyphicon glyphicon-user">SignUp</span></a>


					


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

					<span style="float:right;margin-right:4px;"> Items:-<?php cart();?>  Price:<?php total_price();?> </span>
					<b style="color:yellow; float:right;margin-right:10px;">Shopping Cart</b>
					<p style="float:right;margin-right:10px;">Welcome to the Guest</p>


				</div>

			

			</div>

			<div id="product_box" style="float:right;">

				<?php

				getAllProduct();
				?>
			</div>

		</div><!--end second column-->

	</div>






	</div><!--end of container-->


	<script src="bootstrap/css/jquery.min.js"></script>
	<script src="bootstrap/css/bootstrap.min.js"></script>
</body>

</html>