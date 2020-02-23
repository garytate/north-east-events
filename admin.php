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
    <title>North East Events &bull; Welcome</title>

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
                <ul>
                    <li><a href="index.php" >Home</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="admin.php" class="current">Admin</a></li>
                    <li><a href="#">Credits</a></li>
                    <li><a href="./assets/pdf/Web Dev Assignment 1.pdf">Design</a></li>
                    <li><a href="https://github.com/garytate/north-east-events"><i class="fab fa-github"></i></a></li>
                </ul>
            </nav>

        </div>
    </header>

	<section>
		<div class="newrecord">
			<form action="admin/newrecord.php" method="post">
				<p>Name:</p> <input type="text" name="name"><br>
				<p>Description:</p> <input type="text" name="desc"><br>
				<p>Start Date:</p> <input type="date" name="startdate"><br>
				<p>End Date:</p> <input type="date" name="enddate"><br>
				<p>Price (£):</p> <input type="number" step="0.01" name="price"><br>
				<p>Category:</p> N/A
				<p>Location:</p> N/A
				<input type="submit">
			</form>
		</div>
	</section>

    <footer>
        <p>North East Events &copy; 2019</p>
    </footer>

</body>

</html>
