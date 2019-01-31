
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
						<input type="submit" name="submit" class="btn btn-primary " value="submit">

					</form>

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
				<h2 style="color:blue; font-family:helvetica">Need Help ?</h2><h2 style="color:blue;">Call Us in 9843063571</h2>
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

					<span style="float:right;margin-right:4px;"> Items:- <?php echo  Item();?> Price: <?php total_price();?></span>
					<b style="color:yellow; float:right;margin-right:10px;">Shopping Cart</b>
					<p style="float:right;margin-right:10px;">Welcome to the Guest</p>


				</div>

			

			</div>

			<div id="product_box">

				<?php

				if(!empty($_POST['search'])){

					search_product();
				}else{

					echo "<script>window.open('index1.php','_self')</script>";
				}

			cart();

					?>



			</div>

		</div><!--end second column-->

	</div>






	</div><!--end of container-->


	<script src="bootstrap/css/jquery.min.js"></script>
	<script src="bootstrap/css/bootstrap.min.js"></script>
</body>

</html>