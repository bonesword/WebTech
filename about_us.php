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
	<nav class="navbar navbar-fixed-top navbar-inverse">
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
					<li><a href="about_us.php">About us</a></li>
					<li><a href="all_products.php">All Products</a></li>
					<li>
						<form class="navbar-form navbar-left" action="result.php" method="POST" enctype="multipart/form-data">
					
						<input type="text" name="search" class="form-control" placeholder="search products">
						<input type="submit" name="submit" class="btn btn-primary " value="submit">

					</form>

					</li>
				
				
				</ul>
				<ul class="nav navbar-nav navbar-right" >

					<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart">Cart</span></a></li>
					
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user">SignIn</span></a>

						<ul class="dropdown-menu" style="width:300px;">

						
							
						<div class="panel panel-primary" style="background-color: rgb(0, 102, 255); margin-bottom: -6px; margin-top: -7px;">
							
							<div class="panel-body">
							
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
				
                    <li><a href="customer_registration.php"><span class="glyphicon glyphicon-user">SignUp</span></a></li>
					
				
				</ul>	
			</div>

		</div>
		
	</nav>
    </br>
    </br>

<div  style="margin-top:20px;">

	<div class="header_img">

		<div class="row">
		<div class="col-sm-4"></div>


			<div class="col-sm-4">

			<img src="cart_pic/shopping.png" class="img-responsive img-rounded" width="450" height="250">
			</div>




		</div>

	</div><!--end for header image-->

	<div class="block" style="width:100%;height:40px;background-color:#002266;">

	</div>


<div class="container">

	<div class="header">
		<h1><b style="font-family:italic;margin-top:30px;font-size:2em;">About US</b></h1>
		<hr>
	</div>

	<div class="content">

		<p>
				<strong style="font-family:italic;">MyShop</strong> is the simple E-commerce website where you can get different wears of Ladies and Gents dress & shoes. We provide a delivery services to your doorstep. This site helps you to save the time for doing shopping at market. Simply you can visit this site and can see different products related to dress and you can simply order your products.<br><br>

				Log on to our website <b>www.myshop.com</b> or call to the number <b>9800000010</b> to place your order. Apart form the cost of delivery (which only applies when it is larger distance and order size is less) otherwise no any extra charge.<br><br>

				Right now, we only providing the delivery services inside ringroad of Kathmamdu Valley and its pheripherals. But we are trying to the extend the places for delivery.

				We the myShop take your order seriously and try to deliver the products as fast as possible. If you have any complaint or problems about our services and delivery. Contact us and tell us. We will try to improve as far as possible.




		</p>


	</div>



</div>

</body>
</html>
