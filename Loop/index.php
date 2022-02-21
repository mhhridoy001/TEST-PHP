
<!-- The Loop is 4 types such as: 1.while 2.do--while 3.for 4.foreach -->

<!--====while loop==== -->
<?php
/* 
while syntax:

while (condition is true) {
	code to be executed;
}
*/
$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
} 
/*
Example Explained:
$x = 1; - Initialize the loop counter ($x), and set the start value to 1
$x <= 5 - Continue the loop as long as $x is less than or equal to 5
$x++; - Increase the loop counter value by 1 for each iteration
*/

echo "<br>";

$x = 0;

while($x <= 100) {
  echo "The number is: $x <br>";
  $x+=10;
} 
/*
Example Explained:
$x = 0; - Initialize the loop counter ($x), and set the start value to 0
$x <= 100 - Continue the loop as long as $x is less than or equal to 100
$x+=10; - Increase the loop counter value by 10 for each iteration
*/
?>
<br>

<!--=====do--while====---->
<?php
/* 
do--while syntax:
do {
  code to be executed;
} while (condition is true);
*/

/*
do-while first print kora then condition check kora
do-while loop minimum 1 bar gurba condition true or false hoq 
*/ 

//condition false

$x= 6;

do{
	echo "The number is $x <br>";
	$x++;
}
while ($x <= 5);

echo "<br>";

//condition true

$x= 1;

do{
	echo "The number is $x <br>";
	$x++;
}
while ($x <= 5);

?>
<br>

<!-- ====for loop==== -->
<?php
/*
for syntax:

for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
} 
*/

for ($i=0; $i <= 10; $i++) { 
	echo $i;
}
/*
Example Explained:
$x = 0; - Initialize the loop counter ($x), and set the start value to 0
$x <= 10; - Continue the loop as long as $x is less than or equal to 10
$x++ - Increase the loop counter value by 1 for each iteration
*/

echo "<br>";

for ($i=0; $i <=100 ; $i+=10) { 
	echo "The number is: $i <br>";
}

/*
Example Explained:
$x = 0; - Initialize the loop counter ($x), and set the start value to 0
$x <= 100; - Continue the loop as long as $x is less than or equal to 100
$x+=10 - Increase the loop counter value by 10 for each iteration
*/
?>
<br>

<!-- ==== foreach ==== -->
<?php

/*
Syntax:

foreach ($array as $value) {
  code to be executed;
} 
*/

//only value declare foreach loop
$fruits= array("apple","orange","banana","pineapple","lichu");
	foreach ($fruits as $value) {
		echo "The fruits name is: $value <br>";
	}

// key/index & value both declare foreach loop
$age= array("Hridoy"=>"21","Nayem"=>"22","Jahid"=>"25");
	foreach ($age as $key => $value) {
	 	echo "$key = $value <br>";
	 } 
?>
<br>

<!-- ==== Break & Continue -->
<?php

// break 
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break; 
    //if ar value jokhon 4 thokhon condition ar modda khukba then break kora diya bahir hoi jaba
  }
  echo "The number is: $x <br>";
 }

echo "<br>";

// continue 
for ($x = 0; $x < 10; $x++) {
  if ($x == 5) {
    continue; 
    //if ar value jokhon 4 thokhon condition ar modda khukba then continue korba 4 print nah korai continue korba
  }
  echo "The number is: $x <br>";
}

?>