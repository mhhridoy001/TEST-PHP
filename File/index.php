<?php
	//readfile()=> 2way is readfile()

	echo readfile("text.txt");

	echo "<br>";

	readfile("text.txt");

	copy("text.txt", "newfile.txt");//same file copy 

	unlink("newfile.txt");//file remove/delete 

	//rmdir("newfolder");
	echo "<br>";

	echo filesize("text.txt");echo "<br>";//filesize file a koto charecter/byte ta niddash kora

	echo filetype("text.txt");//filetype diya ata ki file naki folder ta check kora jai
	echo filetype("newfolder");

	echo "<br>";

	echo realpath("text.txt");echo "<br>";//realpath ar maddoma file ar root directory dakha jai

	echo realpath("newfolder");

	$path= realpath("text.txt");
	echo "<pre>";
	print_r(pathinfo($path));//pathinfo ar maddoma file ar bibbino directory array akara dakha jai
	echo "</pre>";

	echo basename("text.txt");echo "<br>";
	echo dirname("text.txt");


	

?>

<br><br>

<?php
	
	//error message show
	$file= ("text1.txt");
	if (file_exists($file)) {
		echo readfile($file);
	}
	else{
		echo "File does not exists";
	}

	echo "<br>";

	//new folder create
	if (!file_exists("newfolder")) {
		mkdir("newfolder");
	}
	else{
		echo "Folder already exists";
	}

?>
<br><br><br>

<?php

 $file = fopen("text.txt", "r");
 echo fread($file, filesize("text.txt"));
 fclose($file);

 echo "<br>";

 $file = fopen("text.txt", "r");
 echo fgets($file);
 echo fgets($file);
 fclose($file);

 echo "<br><br>";

 $file = fopen("text.txt", "r");
 echo "<ul>";
 while (!feof($file)) {
 	$line= fgets($file);
 	echo "<li>".$line."</li>";
 	 }
 fclose($file);
 echo "</ul>";

 echo "<br>";

 echo "<pre>";
 print_r (file("text.txt"));
 echo "</pre>";

 echo "<br>";

 $file = fopen("new.txt", "w");
 $newtext="\nI LOVE NUSU";
 fwrite($file, $newtext);
 fclose($file);

?>
<br>
<?php

	if (is_file("text.txt")) {
		echo "Yes it is file";
	}
	else{
		echo "No it is not a file";
	}

	echo"<br>";

	if (is_dir("newfolder")) {
		echo "Yes it is folder";
	}
	else{
		echo "No it is not a folder";
	}

	echo "<br>";

	if (is_readable("text.txt")) {
		echo "Yes it is readable";
	}
	else{
		echo "No it is not a readable";
	}

	echo "<br>";

	if (is_writeable("text.txt")) {
		echo "Yes it is writeable";
	}
	else{
		echo "No it is not a writeable";
	}

	echo "<br>";

	if (is_writeable("new.txt")) {
		echo "Yes it is writeable";
	}
	else{
		echo "No it is not a writeable";
	}

?>
