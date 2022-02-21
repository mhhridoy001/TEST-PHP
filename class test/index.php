<!DOCTYPE html>
<html>
<body>

<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit"><br><br>
  File: <input type="file" name="">
</form>

<br>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>

<?php

$myfile = fopen("webdictionary.txt", "w");

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name=htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty"; 
       }
    else{
        echo $name;
    }
}

echo "<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name=htmlspecialchars($_REQUEST['fname']);
    if (empty($Name)) {
        echo "name is khali";
    }
    else{
        echo $Name;
    }
}


echo "<br><br>";

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER["SCRIPT_NAME"];
echo "<br>";

// RegEx
$str="Mehedi Hasan Hridoy";
$pattern= "/hasan/i"; //i means this word are case insensative
echo preg_match($pattern, $str);//akhana 2ta paramitter dita hoi== pattern hossa jata match korbo, sub/str holo jar modda match hoba

$pattern1= "/h/i";
echo "<br>".preg_match_all($pattern1, $str);

$pattern2="/hasan/i";
$new_pattern="Hossain";
echo "<br>".preg_replace($pattern2, $new_pattern, $str);

echo"<br><br>";

$array1=preg_split("//", $str); //string ar value gula akhon array howa gasa--//means each alpahbet is array 
print_r ($array1);

echo"<br><br>";

$array1=preg_split("/ /", $str); //string ar value gula akhon array howa gasa--//means each word is array 
print_r ($array1);
?>
