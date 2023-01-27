<!DOCTYPE html>
<html>
<head>
<style>
<link href="stylesheet" rel="stylesheet">

table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
    include("base.php");
    include("dbh.php");

?>


<?php

	$sql = "SELECT Date, Temperature, Humidity, Light FROM $table ORDER BY Date DESC LIMIT 1000";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo "<table class='log'><tr class='log-header'><th>Date</th><th>Temperature</th><th>Humidity</th><th>Light</th></tr>";
		// output data of each row

		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["Date"]. "</td><td>" . $row["Temperature"]. "</td><td> " . $row["Humidity"]. "</td><td>" . $row["Light"]. "</td></tr>";
		}
		echo "</table>";
	} else {
		echo "0 results";
	}

	$conn->close();
?>

</body>
</html>