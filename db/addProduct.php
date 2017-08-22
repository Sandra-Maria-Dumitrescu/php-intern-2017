<?php

include 'connectDb.php';

 // Escape user inputs for security
$product_name = mysqli_real_escape_string($conn, $_REQUEST['product_name']);
$description  = mysqli_real_escape_string($conn, $_REQUEST['decription']);


// attempt insert query execution
$sql = "INSERT INTO products (name, details) VALUES ('$product_name', '$description')";
if(mysqli_query($conn, $sql)){
	echo "Records added successfully." . "<br>";
} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


// Check if image file is a actual image or fake image
$uploadOk = 1;

if(isset($_POST["submit"])) {
	$check = getimagesize($_FILES["imgToUpload"]["tmp_name"]);
	if($check !== false) {
		echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
	} else {
		echo "File is not an image.";
		$uploadOk = 0;
	}
}

// Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "jpeg") {
// 	echo "Sorry, only JPG, JPEG files are allowed.";
// $uploadOk = 0;
// }

$target_dir = "../assets/images/products/";
$target_file = $target_dir . basename($_FILES["imgToUpload"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	if (move_uploaded_file($_FILES["imgToUpload"]["tmp_name"], $target_file)) {
		echo "The file ". basename( $_FILES["imgToUpload"]["name"]). " has been uploaded.";
	} else {
		echo "Sorry, there was an error uploading your file.";
	}
}

// close connection
mysqli_close($conn);

?>