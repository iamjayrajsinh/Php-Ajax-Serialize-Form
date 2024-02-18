<?php

$conn = mysqli_connect("localhost", "root", "", "ajax_form");

if(isset($_POST["fullname"]) && isset($_POST["age"]) && isset($_POST["gender"]) && isset($_POST["country"])){

	$name = $_POST['fullname'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$country = $_POST['country'];

	$sql = "INSERT INTO students(name, age, gender, country) VALUES ('{$name}', $age, '{$gender}', '{$country}')";

	if(mysqli_query($conn, $sql)){
		echo "Hello {$name} your record is saved.";
	}else{
		echo "Can't save form data.";
	}

}else{
	echo "Must filled all form fields.";
}

?>
