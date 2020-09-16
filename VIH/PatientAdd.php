<html>
<!DOCTYPE html>
<html>
<head>
	<title>Add Patients</title>
	<style>
      table,
      th,
      td {
        padding: 10px;
        border: 1px solid black;
        border-collapse: collapse;
      }
    </style>
</head>
<body>
	<H2>Patient Data Insert</H2>
	<form action = "PatientInsert.php" method="POST">
		<br>
		
		Name: <input type="text" name="name">
		<br>
		Phone number: <input type="text" name="Phone_num">
		<br>
		Address: <input type="text" name="address">
		<br>
		Description: <input type="text" name="description">
		<br>
		<input type="submit" value  = "Insert" >
		
	</form>
	<br><br>

	<H2>Patient Data update</H2>
	<form action = "PatientUpdate.php" method="POST">
		<br>
		ID for update data: <input type="text" name="Id">
		<br><br><br>
		Name: <input type="text" name="name">
		<br>
		Phone number: <input type="text" name="Phone_num">
		<br>
		Address: <input type="text" name="address">
		<br>
		Description: <input type="text" name="description">
		<br>
		
		<input type="submit" value  = "Update" name = "btnUpdate">
	</form>
	<br><br>

	<H2>Patient Data Delete</H2>
	<form action = "PatientDelete.php" method="POST">
		<br>
		Delete By Id: <input type="text" name="Id">
		
		<input type="submit" value  = "Delete">
	</form>

	<br><br>

	<?php
	    //$servername = "localhost";
		//$username = "root";
		//$password = "";
		//$dbname = "vihdb";

		// Create connection
		//$con=mysqli_connect($servername, $username, $password, $dbname);
	    
// Check connection
		//if (mysqli_connect_errno())
		//{
		//echo "Failed to connect to MySQL: " . mysqli_connect_error();
		//}
		include 'dbConnection.php';
		$result = mysqli_query($conn,"SELECT * FROM patient_details");

		echo "<table border='1'>
		<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Phone No.</th>
		<th>Adress</th>
		<th>Description</th>
		</tr>";

		while($row = mysqli_fetch_array($result))
		{
		echo "<tr>";
		echo "<td>" . $row['ID'] . "</td>";
		echo "<td>" . $row['Name'] . "</td>";
		echo "<td>" . $row['PhoneNum'] . "</td>";
		echo "<td>" . $row['Address'] . "</td>";
		echo "<td>" . $row['Description'] . "</td>";
		echo "</tr>";
		}
		echo "</table>";

		

		mysqli_close($conn);
	?>


	

</body>
</html>