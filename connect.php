<!-- Form Connection File to phpMyAdmin Database -->

<?php
	// Get values from form...
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];

	// Database Connection...
	$conn = new mysqli('localhost', '_AGalon', 'FKBlzh0flfZRVo2n', 'AGalon_13CSI_Assessment_Database');
	if($conn->connect_error){
		die("Error Connecting to the Database: " . $conn->connect_error);
	}else{
		$result=$conn->prepare("insert into contact(name, email, phone, message)
			values(?, ?, ?, ?)");
		$result->bind_param("ssss", $name, $email, $phone, $message);
		$result->execute();
		echo "Submission sucessful, Moosic will be with you";
		$result->close();
		$conn->close();
	}	
?>