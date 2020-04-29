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
    <title>North East Events &bull; New Record</title>

</head>

<body>

	<header>

        <img src="./assets/logo.svg" class="logo">

        <!-- Navigation *Right-Aligned* -->
        <nav>
            <a href="index.php" >Home</a>
            <a href="events.php">Events</a>
            <a href="admin.php">Admin</a>
            <a href="credits.php">Credits</a>
            <a href="./assets/pdf/Web Dev Assignment 1.pdf">Design</a>
            <a href="https://github.com/garytate/north-east-events"><i class="fab fa-github"></i></a>
        </nav>

    </header>

	<section>
		<div class="container">
			<?php
                $output =
                '
                <h1>%s</h1>
                <form action="./newrecord.php" method="post">
                    <ul class="record-container">
                        <li>
                            <label>Title</label>
                            <label>%s</label>
                        </li>
                        <li>
                            <label>Description</label>
                            <label>%s</label>
                        </li>
                        <li>
                            <label>Start Date</label>
                            <label>%s</label>
                        </li>
                        <li>
                            <label>End Date</label>
                            <label>%s</label>
                        </li>
                        <li>
                            <label>Price</label>
                            <label>%s</label>
                        </li>
                        <li>
                            <label>Category</label>
                            <label>%s</label>
                        </li>
                        <li>
                            <label>Location</label>
                            <label>%s</label>
                        </li>
                    </ul>
                </form>
                ';

                $mysqli = include('libs/mysqli.php');

				$post = [
					"title" => $_POST["title"],
					"description" => $_POST["description"],
					"location" => $_POST["location"],
					"category" => $_POST["category"],
					"startdate" => $_POST["start-date"],
					"enddate" => $_POST["end-date"],
                    "price" => $_POST["price"]
                    //"location-title" => 
                ];

                $location_title = $mysqli->query('SELECT venueName FROM nee_venue WHERE venueID = "' . $_POST["location"] . '"')->fetch_array()[0];
                $category_title = $mysqli->query('SELECT catDesc FROM nee_category WHERE catID = "' . $_POST["category"] . '"')->fetch_array()[0];
                $code = "unknown error.";
                
                // Makes sure there are no fields empty.
				if (!array_search("", $post)) {

                    // Makes sure that starddate is before or on enddate.
                    if (strtotime($post["startdate"]) <= strtotime($post["enddate"])) {
                        $query = 'INSERT INTO NEE_events (eventTitle, eventDescription, venueID, catID, eventStartDate, eventEndDate, eventPrice) VALUES ("' . $post["title"] . '", "' . $post["description"] . '", "' . $post['location'] . '", "' . $post['category'] . '", "' . $post["startdate"] . '", "' . $post["enddate"] . '", "' . $post["price"] . '");';

                        $run = $mysqli->query($query);
                        if ($run) {
                            $code = "success update to database.";
                        } else {
                            $code = "unknown error.";
                        }
                    } else {
                        $code = "startdate is after enddate.  won't post.";
                    }
					
				} else {
                    $code = "a field is empty. won't post.";
                }
                
                echo sprintf($output, $code, $post["title"], $post["description"], $post["startdate"], $post["enddate"], $post["price"], $category_title, $location_title);

			?>
		</div>
	</section>

	<footer>
        <p>North East Events &copy; 2020</p>
    </footer>

</body>
</html>
