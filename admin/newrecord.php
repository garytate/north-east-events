<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php

		$config = include('../config.php');
		$serverName = $config['host'];
		$serverUser = $config['user'];
		$serverPass = $config['pass'];
		$serverDB   = $config['data'];

		$dbhandle = mysqli_connect($serverName, $serverUser, $serverPass, $serverDB)
		or die("rip"); 

		echo "Success: " . $_POST["name"];
	?>
</body>
</html>
