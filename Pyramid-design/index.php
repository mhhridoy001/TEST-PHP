<!-- 
===reverse pyramid design===

	  *********
	   *******
	    *****
	     ***
	      *
-->

<?php
$n = 5;
for ($i = $n; $i >0; $i--) {

    for ($j = $n - $i; $j > 0; $j--)
    {
        echo "&nbsp;&nbsp";
    }
    for ($j = 2 * $i - 1; $j > 0; $j--)
    {
        echo "*";
    }
    echo "<br>";
}
		
?>
<br>

<!-- 
=====pyramid design first way (only for)=====
	    *
	   * *
	  * * *
	 * * * *
	* * * * *
-->

<?php
$s = 4;
for ($i = 0; $i <= $s; $i++) {
     
    for($k = $i; $k < $s; $k++ )
	{
		echo "&nbsp";
	}
    for ($j = 0; $j <$i + 1; $j++) 
    {
        echo "*";
    }
    echo "<br/>";
}

echo "<br>";

/*
=====pyramid design second way (if-else)=====
		*
	   * *
	  * * *
	 * * * *
	* * * * *
*/
$n=5;
for ($i=1; $i<=$n; $i++) { //row difine 
	for ($j=1; $j<=(2*$n)-1; $j++) { //colum difine
		if ($j>=$n-($i-1) && $j<=$n+($i-1)) //space difine
		{
			echo "*";
		}
		
		else
		{
			echo "&nbsp;&nbsp";
		}

	}
	echo "<br>";
}

?>

<br>

<!--  Large in 4 number  -->

<?php 

	$x = 5;
	$y = 10;
	$z = 17;
	$o = 9;

	echo ($x>$y && $x>$z && $x>$o ? "The large num. x is: $x" : ($y>$x && $y>$z && $y>$o ? "The large num. y is: $y" : 
		($z>$x && $z>$y && $z>$o ? "The large num. z is: $z" : "$o large")));
	echo "<br>";

?>