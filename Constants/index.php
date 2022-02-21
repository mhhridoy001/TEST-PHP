<!-- PHP Constants -->
<?php

//Create a constant with a case-sensitive (NAME)
define("NAME", "Mehedi Hasan Hridoy");//Must be double cotation use name & value("")
echo NAME;//constant name do print no cotation

echo "<br>";

//Create a constant with a case-sensitive (AMOUNT)
define("AMOUNT", 500);//Must be double cotation use name & value("")
echo AMOUNT;

echo "<br>";

define("NAME", "Mehedi Hasan Hridoy");//This name is already define thats why browser show in warning
echo NAME;

echo "<br>";

define(CAR,["Audi","BMW","MARCEL"]);
echo "CAR";
?>





