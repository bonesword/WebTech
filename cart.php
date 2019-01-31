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
				
				
				
				</ul>
				<ul class="nav navbar-nav navbar-right" >

					<li><a href="index1.php"><span class="glyphicon glyphicon-shopping-cart">GoBackToShopping</span></a></li>

					<?php

					if(isset($_SESSION['user_id'])){



						echo "<li><a href='logout.php'><span class='glyphicon glyphicon-shopping-cart'>logout</span></a></li>";

					}


					?>
					

					


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
		<br><br>

		<div class='col-sm-8'>
			

			<table class="table table-condensed" align="center">

				<tr class='success'> 

					<td>Remove</td>
					<td>Product(s)</td>
					<td>Quantity</td>
					<td>Total Price</td>

				 </tr>

				 <?php

			

						global $db;

						$ip=getIpAddress();
						$total=0;

						$cart="SELECT * FROM cart WHERE ip_add='$ip'";
						$result=mysqli_query($db,$cart) or die(mysqli_error());

						while($record=mysqli_fetch_assoc($result)){

							$p_id=$record['pro_id'];

							$pro_price="SELECT * FROM products WHERE product_id='$p_id'";
							$run_query=mysqli_query($db,$pro_price) or die("error in query".mysqli_error($db));

							while($p_price=mysqli_fetch_assoc($run_query)){

								$price=array($p_price['product_price']);
								$values=array_sum($price);
								$total+=$values;
								$pprice=$p_price['product_price'];
								$image=$p_price['product_image'];
								$id=$p_price['product_id'];
								

						

						?>
						<tbody>

									
					<tr>
					<form action="" method="POST">
						
					<td><input type="checkbox" name="remove[]" value=<?php echo $id;?> ></td>
					<td><img src="admin-panel/product_images/<?php echo $image; ?>" height="150" width="100"></td>
					<td><input type="text" name="qty" size="5" value=""></td>
					<td><?php  echo $pprice; ?></td>

					<?php

						if(isset($_POST['update'])){

							$qty=$_POST['qty'];
							$insert="UPDATE cart SET qty='$qty' WHERE pro_id=$id";
							mysqli_query($con,$insert) or die(mysqli_error($con));
							$total=$total*$qty;


						}


					?>




					</tr>
					</tbody>
					<?php  }} ?>

					<td colspan="3"><b style="margin-left:500px;">Total:</b></td><td> <?php echo "<b style='color:blue;'>Rs</b>" .$total; ?></td>

					<tr>
						
							<td><input type="submit" name="update" value="Update Cart" class="btn btn-primary btn-xs"></td>
							<td><a href="index1.php" class="btn btn-primary btn-xs">Continue Shopping</a></td>
							<td><a href="checkpoint.php" class="btn btn-primary btn-xs">Checkpoint</a></td>
						


					</tr>

					</form><!--end of form-->
			</table>


		</div><!--end of second column-->



	</div><!--end of row-->

	<?php
	function removeCart(){

		global $con;

		if(isset($_POST['update'])){

			foreach($_POST['remove'] as $remove_id){

			

				$update_cart="DELETE FROM cart WHERE pro_id='$remove_id'";
				mysqli_query($con,$update_cart) or die(mysqli_error());

				echo "<script>window.open('cart.php','_self')</script>";
			}


		}

	}

	echo @$var=removeCart();

		



	?>



	</div><!--end of container-->







 <script src="bootstrap/js/jquery2.js" type="text/javascript"></script>
   <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   
</body>

</html>




