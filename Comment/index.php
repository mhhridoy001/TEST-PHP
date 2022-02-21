<?php
// Single line comment first way
# Single line comment second way

/* MultiLine comment way
 Single line comment first way
 Single line comment second way
 */
?>



<?php 
//product price calculation start

$first_price=10;  #first pricr variable value declare

$second_price=20; #first pricr variable value declare

$total_price=$first_price+$second_price; # total price calculation

echo "$total_price";//result print

//product price calculation end
?>
<br>
<?php 
	/*=============================
	Full value Calculation Start
	==============================*/

$first_value=100; #first value variable string declare

$last_value=500; #last value variable string declare

$full_value=$first_value + $last_value; //full value calculation

echo $full_value;//result print

	/*===========================
	Full value Calculation Start
	============================*/
?>
<br>
<?php
//testing perpase a using hoi
$result=15+/*10*/+30;
echo "$result";
?>