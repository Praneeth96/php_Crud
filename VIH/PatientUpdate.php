<?php
	include 'dbConnection.php';
		
    $sql1 = "SELECT id, firstname, lastname FROM MyGuests";
	$result = $conn->query($sql1);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
	    $_POST['name']
	  }
	} else {
	  echo "0 results";
	}
	
	

	$id = $_POST['Id'];
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
	header("refresh:2; url = PatientAdd.php");
?>