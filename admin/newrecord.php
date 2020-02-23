<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php

		$mysqli = include(__DIR__ . '/../libs/mysqli.php');

		$query = 'INSERT INTO NEE_events (eventTitle, eventDescription, venueID, catID, eventStartDate, eventEndDate, eventPrice) VALUES ("' . $_POST["name"] . '", "' . $_POST["desc"] . '", "v3", "c4", "' . $_POST["startdate"] . '", "' . $_POST["enddate"] . '", "' . $_POST["price"] . '");';
		$run = $mysqli->query($query);
	?>
</body>
</html>
