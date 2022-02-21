<!DOCTYPE HTML>  
<html>
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> 
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $pass = $conpass = $mobile = $gender= $message= $files="";
$error_name= $error_email= $error_pass = $error_conpass = $error_mobile= $error_gender=  $error_message=$error_files= "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

	require_once  'function.php';

	if (isset($_POST["button"])) {
	$name= $_POST['name'];
	$email= $_POST['email'];
	$mobile= $_POST['mobile'];
	$pass= $_POST['pass'];
	$conpass= $_POST['conpass'];
	$mobile= $_POST['mobile'];
	$message= $_POST['message'];
	$files= $_POST['files'];

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

	if (empty($_POST["pass"])) {
		$error_pass = "Write your password**";
	}
	else{
		$pass = test_input($_POST["pass"]);

				// check if name only contains letters and whitespace
    if (!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/",$pass)) {
     $error_pass = "Password is Invalid";
    }

	}

	if (($_POST["conpass"]) !== ($_POST["pass"])) {
		$error_conpass = "Password is not match";
	}
	else{
		$conpass = test_input($_POST["conpass"]);
	}

		if (empty($_POST["mobile"])) {
		$error_mobile = "Write your mobile number**";
	}
	else{
		$mobile = test_input($_POST["mobile"]);
		// check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]{11}$/",$mobile)) {
     $error_mobile = "Mobile number is 11 digit";
    }
	}

	if (empty($_POST["same"])) {
		$error_gender = "Click your gender**";
	}
	else{
		$gender = test_input($_POST["same"]);
	}

	if (empty($_POST["files"])) {
		$error_files = "Choose your file**";
	}
	else{
		$files = test_input($_POST["files"]);
	}


 
}

?>
<div class="container"> <br> <br>

		<h1 class="text-center text-dark">PHP FORM VALIDATION</h1> 

		<div class="col-lg-8 m-auto">

			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

				<div class="form-group">
					<label for="name">Username :</label>
				    <input type="text" name="name" id="name" class="form-control" autocomplete="off" 
				    value="<?php if(isset($name)) echo $name; ?>">
				    <h5 style="color: red;"><?php echo $error_name?></h5>
				</div>

				<div class="form-group">
					<label for="email">Email :</label>
				    <input type="text" name="email" id="email" class="form-control" autocomplete="off"
				    value="<?php if(isset($email)) echo $email; ?>">
				    <h5 style="color: red;"><?php echo $error_email?></h5>
				</div>

				<div class="form-group">
					<label for="">Mobile :</label>
				    <input type="text" name="mobile" class="form-control" autocomplete="off" 
				    value="<?php if(isset($mobile)) echo $mobile; ?>">
				    <h5 style="color: red;"><?php echo $error_mobile?></h5>
				</div>

				<div class="form-group">
					<label for="password">Password :</label>
				    <input type="password" name="pass" id="password" class="form-control" autocomplete="off"
				    value="<?php if(isset($password)) echo $password; ?>">
				    <h5 style="color: red;"><?php echo $error_pass?></h5>
				</div>

				<div class="form-group">
					<label for="con_pass">Confirm Password :</label>
				    <input type="password" name="conpass" id="con_pass" class="form-control" autocomplete="off"
				    value="<?php if(isset($conpass)) echo $conpass; ?>">
				    <h5 style="color: red;"><?php echo $error_conpass?></h5>
				</div>

				<div class="form-group">
					<label for="gender">Gender :</label>
				    <input type="radio" name="same" > <span>Male</span>
          <input type="radio" name="same" > <span>Female</span>
				    <h5 style="color: red;"><?php echo $error_gender?></h5>
				</div>

				<div class="form-group">
					<label for="message">Message</label>
				    <textarea name="message" id="message" class="form-control" autocomplete="off"
				    value="<?php if(isset($message)) echo $message; ?>"></textarea>
				    <h5 style="color: red;"><?php echo $error_message?></h5>
				</div>

				<div class="form-group">
					<label for="files">File / Folder</label>
				    <input type="file" name="files" id="files" class="form-control" autocomplete="off"
				    value="<?php if(isset($files)) echo $files; ?>">
				    <h5 style="color: red;"><?php echo $error_files?></h5>
				</div>

				<input type="submit" name="button" id="btn" value="Submit" style="width: 100%; color: #fff; background: orange; outline: none; border: 1px solid #fff; padding: 10px;">

			</form>
			<br>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $pass;
echo "<br>";
echo $conpass;
echo "<br>";
echo $mobile;
?>

		</div>

	</div>

</body>
</html>
