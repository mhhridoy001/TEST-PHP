
<!-- 
<?php  

	/*if (isset($_FILES['photo'])) {

		echo "<pre>";
		print_r($_FILES);
		echo "</pre>";

		$file_name=$_FILES['photo']["name"];
		$file_tmpName=$_FILES['photo']["tmp_name"];
		$file_type=$_FILES['photo']["type"];
		$file_size=$_FILES['photo']["size"];

		if (move_uploaded_file($file_tmpName, "newfolder/".$file_name)) {
			echo "Successfuly photo uploded";
		}
		else{
			echo "Could not uploded file";
		}
	}*/

?>
-->


<?php 

	if (isset($_POST['submit'])) {

		echo "<pre>";
		print_r($_FILES);
		echo "</pre>";


		$file_name=$_FILES['photo']["name"];
		$file_tmpName=$_FILES['photo']["tmp_name"];
		$file_type=$_FILES['photo']["type"];
		$file_size=$_FILES['photo']["size"];
		$file_dir= "newfolder/";
		$dotposition= strpos($file_name, '.');
		$file_ext= substr($file_name, $dotposition);
		$rand= rand(1000,10000);
		
		if (!empty($file_name)) {

			if ($file_type=='image/jpeg') {

				if ($file_size < "2000000") {

					if (file_exists($file_dir. '' .$file_name)) {
						$newfile_name=$rand .'.'.$file_ext;
						move_uploaded_file($file_tmpName, $file_dir . $newfile_name);
						echo "File is already exists also rename";
					}
					else{
						move_uploaded_file($file_tmpName, $file_dir . $file_name);
						echo "Successfully image upload";
					}

				}
				else{
					echo "File size is less than 2MB";
				}

			}
			else{
				echo "Select a jpeg file";
			}

			}
		else{
			echo "Could not uploded file";
		}

	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File Upload</title>
</head>
<body>
	<form action="fileUpload.php" method="post" enctype="multipart/form-data">
		
		<input type="file" name="photo"><br><br>
		<input type="submit" value="Submit" name="submit">

	</form>
</body>
</html>


