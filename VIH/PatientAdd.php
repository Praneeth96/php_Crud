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
	<H2 style = "background-color: lightblue">Patient Data Insert</H2>
	<form action = "PatientInsert.php" method="POST" style = "background-color: #DFF9E9">
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

	<H2 style = "background-color: lightblue">Patient Data update</H2>
	<br>
	<form action = "" method="POST" style = "background-color: #DFF9E9">
		Search value by ID: <input type="text" name="Id">
		<br>
		<input type="submit" value  = "Serach" name="btnSearch">
	</form>
		
	<?php
		include 'dbConnection.php';

		if(isset($_POST['btnSearch']))
		{
			$id = $_POST['Id'];

			$search_query = "SELECT * FROM patient_details WHERE ID = '$id'";
			$query_run = mysqli_query($conn, $search_query);

			while ($row = mysqli_fetch_array($query_run)) {
				# code...
				?>
					<form action = "PatientUpdate.php" method="POST" style = "background-color: #DFF9E9">
						<br>
						Id: <input type="text" name="id" value="<?php echo $row['ID']?>">
						<br>
						Name: <input type="text" name="name" value="<?php echo $row['Name']?>">
						<br>
						Phone number: <input type="text" name="Phone_num" value="<?php echo $row['PhoneNum']?>">
						<br>
						Address: <input type="text" name="address" value="<?php echo $row['Address']?>">
						<br>
						Description: <input type="text" name="description" value="<?php echo $row['Description']?>">
						<br>
						<input type="submit" value  = "Update" name="btnUpdate">
		
					</form>
				<?php
			}
		}

	?>
	<br><br>

	<H2 style = "background-color: lightblue">Patient Data Delete</H2>
	<form action = "PatientDelete.php" method="POST" style = "background-color: #DFF9E9">
		<br>
		Delete By Id: <input type="text" name="Id">
		
		<input type="submit" value  = "Delete">
	</form>

	<br><br>

	<?php
	    
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