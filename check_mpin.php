<?php
// Establish a database connection
$conn = mysqli_connect("localhost", "root", "", "hack");

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the MPIN from the database
$sql = "SELECT mpin FROM mpins WHERE id = 1";
$result = mysqli_query($conn, $sql);


	// Compare the retrieved MPIN with the MPIN entered by the user
	$row = mysqli_fetch_assoc($result);
	$mpin = $row['mpin'];
	if ($mpin == $_POST['mpin']) {
		// If the MPIN matches, redirect the user to a success page
		header("Location: report.html");// report page
		exit;
	} else {
		// If the MPIN does not match, redirect the user to an error page
		header("Location: error.html"); //any error page
		exit;
	}



mysqli_close($conn);
?>
