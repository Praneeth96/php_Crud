<?php
	include 'dbConnection.php';

	$id = $_POST['id'];
	$name = $_POST['name'];
	$pnum = $_POST['Phone_num'];
	$address = $_POST['address'];
	$description = $_POST['description'];

	$sql = "UPDATE patient_details SET Name='$name', PhoneNum = '$pnum', Address = '$address', Description = '$description' WHERE ID='$id'";

	if ($conn->query($sql) === TRUE) {
	  echo "Record updated successfully";
	} else {
	  echo "Error updating record: " . $conn->error;
	}

	$conn->close();
	header("refresh:1; url = PatientAdd.php");
?>