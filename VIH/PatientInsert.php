<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vihdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
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