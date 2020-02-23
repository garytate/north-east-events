<!--
North East Events - index.html
KF4009 Assignment A (Winter 2019)
Maintained by Gary Tate (W17001980)
-->

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Descriptions & Setup -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO Tags -->
    <meta name="author" content="Gary Tate">
    <meta name="description" content="Come join us for updates on the best events in the North East of England!">
    <meta name="keywords" content="newcastle, north east, events, tickets, things to do">

    <!-- Imported links -->
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/events.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5c6ddc6d04.js" crossorigin="anonymous"></script>

    <!-- Website Title -->
	<title><?php
		$config = include('config.php');
		$serverName = $config['host'];
		$serverUser = $config['user'];
		$serverPass = $config['pass'];
		$serverDB   = $config['data'];

		$dbhandle = mysqli_connect($serverName, $serverUser, $serverPass, $serverDB);
		$query = "SELECT eventID, eventTitle FROM nee_events WHERE " . $_GET['eventID'] . " = eventID";
		$result = $dbhandle->query($query)->fetch_array();
		echo $result[1];
		?>
	</title>

</head>

<body>

    <!-- Top Bar, Navigation + Title -->
    <header>
        <div class="container">

            <!-- Title *Left-Aligned* -->
            <div class="title">
                <h1>North East Events</h1>
            </div>

            <!-- Navigation *Right-Aligned* -->
            <nav>
                <!-- Navigation Unordered List -->
                <ul class="navlinks">
                    <li><a href="index.php" class="current">Home</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="admin.php">Admin</a></li>
                    <li><a href="#">Credits</a></li>
                    <li><a href="./assets/pdf/Web Dev Assignment 1.pdf">Design</a></li>
                    <li><a href="https://github.com/garytate/north-east-events"><i class="fab fa-github"></i></a></li>
                </ul>
            </nav>

        </div>
    </header>

    <footer>
        <p>North East Events &copy; 2019</p>
    </footer>

</body>

</html>
