<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<h2>
	<?php

	//Number variable declaration
	$x = 5;
	$y = 10;
	$z = 17;
	$o = 9;

	echo ($x>$y && $x>$z && $x>$o ? "The large num. x is: $x" : ($y>$x && $y>$z && $y>$o ? "The large num. y is: $y" : 
		($z>$x && $z>$y && $z>$o ? "The large num. z is: $z" : "$o large")));
	echo "<br>";

	?>
	</h2>

	<?php

	//number & string variable declare
	$name= "mehedi";
	$amount= 500;

	echo "My name is:". $name ."<br>"."My amount is:". $amount; //concatination
	echo "<br>";
	echo "My name is:$name  ,   My amount is: $amount"; // easy way

	?>
	<!-- php anouther echo style  -->
	<h2><?php  echo "My name is:". $name. " , My amount is:".$amount; ?></h2> <!--  concatination -->
	<h2>My name is:<?php  echo $name;?> , My acount is:<?php  echo $amount; ?></h2>

	<h2><?php  echo "My name is:$name"  . "My amount is: $amount"; ?></h2>
	<h2><?php  echo "My name is:$name  <br> My amount is: $amount"; ?></h2>

	<?php

	$first_name="hridoy";
	$name="first_name";
	echo $$name;
	echo "<br>";
	?> 

</body>
</html>