<?php

include("includes/database.php");

if(isset($_POST['register'])){

		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$repassword=$_POST['repassword'];
		$mobileNo=$_POST['mobileNo'];
		$address1=$_POST['address1'];
		$address2=$_POST['address2'];
		$name="/^[A-Z] [a-zA-Z ]+$/";
		$number="/^[0-9]+$/";




		if(empty($fname) || empty($lname) ||  empty($email) || empty($password) || empty($repassword) || empty($mobileNo) || empty($address1) || empty($address2) )
		{

			header("location:customer_registration.php?error=empty");


		}
		else
		{

			if(!preg_match('/^[A-Za-z]{1}[A-Za-z0-9]{5,31}$/', $fname)){

				header("location:customer_registration.php?error=fnameError");
				exit();
			}

			if(!preg_match('/^[A-Za-z]{1}[A-Za-z0-9]{5,31}$/', $lname)){

				header("location:customer_registration.php?error=lnameError");
				exit();
			}

			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){

				header("location:customer_registration.php?error=emailError");
				exit();
			}

			if(strlen($password)<9){

				header("location:customer_registration.php?error=password");
				exit();
			}

			if($password!=$repassword){

				header("location:customer_registration.php?error=notMatch");
				exit();

			}

			if(!preg_match($number,$mobileNo)){

				header("location:customer_registration.php?error=number");
				exit();
			}
			if(strlen($mobileNo)!= 10){
				header("location:customer_registration.php?error=notEnough");
				exit();
			}



			}





		}










?>
