<?php
include 'dbConnection.php';
}



    $name = $_POST['name'];
	$pnum = $_POST['Phone_num'];
	$adress = $_POST['address'];
	$description = $_POST['description'];

	

    $sql = "INSERT INTO patient_details (Name, PhoneNum, Address, Description) VALUES ('$name', '$pnum','$adress', '$description')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn->close();
header("refresh:2; url = PatientAdd.php");
?>