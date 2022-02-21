<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>V FOOD</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="reponsive.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"> 


	<style>
		@import url('https://fonts.googleapis.com/css2?family=Rosarivo&display=swap');
		header{
			background: linear-gradient(rgba(4,9,40,0.5),rgba(4,9,40,0.5)), url(images/baz-banner.jpg);
			height: 40vh;
			width: 100%;
			background-size: cover;
		}
		.heading{
			text-align: center;
			margin: 5vh; 
			color: #fff;
		}
		.heading h2{
			padding-bottom: 10px;
		}
		img{
			width: 100%;
			height: 420px;
			position: relative;
		}
		.contact{
			height: 55vh;
			width: 65%;
			display: block;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			margin-top: 300px;
		}
		.con-user{
			height: 100%;
			width: 70%;
			background: #FFFFFF;
			float: left;
			border-radius: 5px 0;
		}
		.con-form{
			padding: 50px;
		}
		.con-form h3{
			font-family: 'Rosarivo', serif;
			font-size: 20px;
			font-weight: bold;
		}
		.con-box{
			margin-top: 25px;
		}
		.con-box h5{
			color: #9291A2;
			font-size: 11px;
		}
		.error{
			height: 10px;
			margin-bottom: 10px;
			color: red;
			font-size: 11px;
			display: block;
			font-weight: bold;
		}
		.con_box_left{
			width: 48%;
			height: 100%;
			float: left;
		}
		.con_box_right{
			width: 48%;
			height: 100%;
			float: right;
		}
		.con-box input,textarea{
			width: 100%;
			outline: none;
			border: none;
			border-bottom: 1px solid;
			padding-top: 20px;
			padding-right: 65px;
			margin-bottom: 10px;
			font-size: 12px;
		}
		.con-address{
			height: 100%;
			width: 30%;
			background: #81AC27;
			float: right;
			border-radius: 0 5px 5px 0;
		}
		.address-box i{
			padding-top: 25px;
			font-size: 15px;
			color: #fff;
			letter-spacing: 1px;		
		}
		.button{
			padding: 7px 30px;
			background: orange;
			outline: 0;
			border: 1px solid #000;
			cursor: pointer;
			font-size: 15px;
			font-weight: bold;
			margin-top: 5px;
		}

	</style>


	<?php
// define variables and set to empty values
$name = $email = $phone = $company = $message= "";
$error_name= $error_email= $error_phone = $error_company =$error_message= "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (isset($_POST["button"])) {
	$name= $_POST['name'];
	$email= $_POST['email'];
	$phone= $_POST['phone'];
	$company= $_POST['company'];
	$message=$_POST['message'];
}

	if (empty($_POST["name"])) {
		$error_name = "Write your name**";
	}
	else{
		$name = test_input($_POST["name"]);
		// check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
     $error_name = "Only letters and white space allowed";
    }
	}

	if (empty($_POST["email"])) {
		$error_email = "Write your email**";
	}
	else{
		$email = test_input($_POST["email"]);
		    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error_email = "Invalid email format";
    }
	}

	if (empty($_POST["phone"])) {
		$error_phone = "Write your phone**";
	}
	else{
		$phone = test_input($_POST["phone"]);

	// check if name only contains letters and whitespace
    if (!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/",$phone)) {
     $error_phone = "Phone is Invalid";
    }

	}

	if (empty($_POST["company"])) {
		$error_company = "Write your company**";
	}
	else{
		$company = test_input($_POST["company"]);
		// check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$company)) {
     $error_company = "Only letters and white space allowed";
    }
	}
	if (empty($_POST["message"])) {
		$error_message="Write your message**";
	}
	else{
		$message= test_input($_POST["message"]);
	}

 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
</head>
<body>

	<header>
		<!-- mid header start -->
		<section class="mid-header">
		<div class="logo">
			<h1><span style="color: #81ac27;">V</span> FOOD</h1>
		</div>
		<div class="box">
			<div class="search-box">
				<input type="text" placeholder="Type here.....">
				<label for="" class="icon">
				<i class="fas fa-search"></i>
				</label>
			</div>
		</div>	
		<div class="cart">
			<i class="far fa-heart"></i>
			<i class="fas fa-shopping-cart" style="padding-left: 10px;"></i>
			<span>My Cart-$40.00</span>
		</div>

		</section>
		<!-- mid header end -->

		<!-- bottom header start -->
		<section class="bottom-header">
			<div class="navbar">
				<ul>
					<li style="background: #81AC27;"><a href="#">Home</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Pages</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Shop</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
		</section>
		<!-- bottom header end -->

		<div class="heading">
			<h2>Contact Page</h2>
			<h5>Home/Contact</h5>
		</div>
	</header>


	<main>
		
		<img src="images/dhakamap.jpg" alt="">

		<div class="contact">

			<div class="con-user">

			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

				<div class="con-form">
					<h3>Send Us A Message</h3>

					<div class="con-box">
						<div class="con_box_left">
							<h5>Your Name</h5>
							<input type="text" name="name">
							<span class="error"><?php echo $error_name?></span>
							<h5>Your Phone</h5>
							<input type="text" name="phone">
							<span class="error"><?php echo $error_phone?></span>
						</div>

						<div class="con_box_right">
							<h5>Email Address</h5>
							<input type="text" name="email">
							<span class="error"><?php echo $error_email?></span>
							<h5>Company</h5>
							<input type="text" name="company">
							<span class="error"><?php echo $error_company?></span>
						</div>
						<h5>Message</h5>
						<textarea id="" rows="1" name="message"></textarea >
						<span class="error"><?php echo $error_message?></span>
					</div>
					<input type="submit" value="Submit" class="button">

				</div>
			</form>
			</div>

			<div class="con-address">
				<div class="con-form">
					<h3 style="color: #fff;">Contact</h3>
					<div class="address-box">
						<i class="fas fa-envelope">  info.vfood@gmail</i>
						<i class="fas fa-phone">  01646054377</i>						
					</div>
				</div>
			</div>
		</div>
	</main>


	<footer class="footer" style="margin-top: 200px;">

		<div class="foBox">
			<div class="foBox-left">
				<div class="footer-text">
					<h2>My Account</h2>
					<ul>
						<li><a href="#">My Account</a></li>
						<li><a href="#">Order History</a></li>
						<li><a href="#">WishList</a></li>
						<li><a href="#">NewsLetter</a></li>
						<li><a href="#">Internation History</a></li>
					</ul>
				</div>
			</div>

			<div class="foBox-mid">
				<div class="footer-text">
					<h2>Company Details</h2>
					<ul>
						<li><a href="#">My Account</a></li>
						<li><a href="#">Order History</a></li>
						<li><a href="#">WishList</a></li>
						<li><a href="#">NewsLetter</a></li>
						<li><a href="#">Internation History</a></li>
					</ul>
				</div>
			</div>

			<div class="foBox-middle">
				<div class="footer-text">
					<h2>Information</h2>
					<ul>
						<li><a href="#">My Account</a></li>
						<li><a href="#">Order History</a></li>
						<li><a href="#">WishList</a></li>
						<li><a href="#">NewsLetter</a></li>
						<li><a href="#">Internation History</a></li>
					</ul>
				</div>
			</div>

			<div class="foBox-right">
				<div class="footer-text">
					<h2>Quick Links</h2>
					<ul>
						<li><a href="#">My Account</a></li>
						<li><a href="#">Order History</a></li>
						<li><a href="#">WishList</a></li>
						<li><a href="#">NewsLetter</a></li>
						<li><a href="#">Internation History</a></li>
					</ul>
				</div>
			</div>

		</div>


		<div class="footer-email">
			<div class="footLogo">
				<h2>V <span style="color: orange;">FOOD</span> </h2>
			</div>
			<div class="footEmail">
				<input type="text" name="" placeholder="Your email address">
			</div>
			<div class="copyright">
				<h5>copyright © Mehedi Hasan Hridoy</h5>
			</div>

		</div>
	</footer>	
</body>
</html>