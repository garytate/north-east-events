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

		$query = 'INSERT INTO NEE_events (eventTitle, eventDescription, venueID, catID, eventStartDate, eventEndDate, eventPrice) VALUES ("' . $_POST["title"] . '", "' . $_POST["description"] . '", "' . $_POST['location'] . '", "' . $_POST['category'] . '", "' . $_POST["start-date"] . '", "' . $_POST["end-date"] . '", "' . $_POST["price"] . '");';
		$run = $mysqli->query($query);
	?>
</body>
</html>
