<?php
include 'dbConnection.php';
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
	
	$id = $_POST['Id'];
    $sql = "DELETE FROM patient_details WHERE ID = '$id'";

if ($conn->query($sql) === TRUE) {
  echo "Delete succesful";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn->close();
header("refresh:2; url = PatientAdd.php");
?>