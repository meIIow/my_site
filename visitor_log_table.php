<?php

// connect to host

$host = 'Localhost';
$user = 'root';
$password = 'gogogadgetcopter';
$db = 'visitor_log_prac';

$con = mysqli_connect($host, $user, $password, $db);
if ($con) {
	//echo 'connection successful';
}

// get visitor ip
$visitorIP = $_SERVER['REMOTE_ADDR'];
//echo '<br>';
//echo $visitorIP;
//echo '<br>';
//$fuckThis = "XXXX";

// get date
date_default_timezone_set('America/Los_Angeles');
$today = date('Y-m-d');

// replace redundant submissions

if (isset($_POST['name'])) {

	$sqlDelete = "DELETE FROM visitors2 WHERE IP='" . $visitorIP . "' AND Date='" . $today . "'";
	$removed = mysqli_query($con, $sqlDelete);
	if ($removed) {
		// echo "deletion successful";
	}

	$name = $_POST['name'];
	if ($name == "") {
		$name = 'Anonymous';
	}

	$location = $_POST['location'];
	if ($location == "") {
		$location = 'Unknown';
	}

	$sqlValues = "'" . $name . "', '" . $location . "', '" . $today . "', '" . $visitorIP . "'";
	$sqlInsertion = "INSERT INTO visitors2 (Name, Location, Date, IP) values (" . $sqlValues . ")";
	$query = mysqli_query($con, $sqlInsertion);

	if ($query) {
		// echo "new info insertion successful";
	}
}

/* / Modify and uncomment to add stuff to DB
$sqlFill = "INSERT INTO visitors2 (Name, Location, Date, IP) values ('M', 'CA', '1998-2-2', '::1')";

$filled = mysqli_query($con, $sqlFill);
if ($filled) {
	echo "Filled some space in DB";
}
*/

/* // Modify and uncomment to clean out DB
$sqlRemove = "DELETE FROM visitors2 WHERE Date='1993-11-26' AND IP='::1'";

$removed = mysqli_query($con, $sqlRemove);
if ($removed) {
	echo "New stuff deletion successful";
}
*/

$sqlSelect = "SELECT * FROM visitors2 ORDER BY `visitors2`.`Date` DESC ";
$result = mysqli_query($con, $sqlSelect);

?>
<div>
<table>
	<tr>
		<th>Name</th>
		<th>Location</th>
		<th>Date</th>
	</tr>
	<?php
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>" . $row["Name"] . "</td>";
			echo "<td>" . $row["Location"] . "</td>";
			echo "<td>" . $row["Date"] . "</td>";
			echo "</tr>";
		}
	?>
</table>
</div>
