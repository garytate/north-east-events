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

    <!-- Splash Background -->
    <section class="splash">
        <div class="container">

            <h1>Book Your Events Today</h1>
            <h2>From as low as £20 per person.</h2>
        </div>
    </section>

    <!-- Search for events -->
    <section class="search">
        <div class="container">
            <!-- Text Input -->
            <form>
                <span id="searchText">Search all active events:</span>
                <input type="text" placeholder="Kung Fu Fighting...">
                <button type="submit" class="search-submit">Search</button>
                <span id="noFunction"></span>
            </form>
        </div>
    </section>

    <!-- Showcase all events -->
    <section class="event-showcase">
        <div class="container" id="events">

            <?php

                $mysqli = include('libs/mysqli.php');

                $sql = "SELECT * FROM NEE_events";
                $event_query = $mysqli->query($sql);

                if ($event_query->num_rows > 0) {
                    while ($row = $event_query->fetch_assoc()) {

                        $category_title = "Unknown";
                        $location_title = "Unknown";
                        $date_title     = "Unknown";

                        // Category (Newcastle Theatre)
                        $query = "SELECT catID, catDesc FROM NEE_category WHERE catID LIKE '" . $row['catID'] . "'";
                        $result = $mysqli->query($query)->fetch_array();
                        $category_title = $result[1]; // [catID, catDesc]

                        // Location (Newcastle Upon Tyne)
                        $query = "SELECT venueID, location FROM NEE_venue WHERE venueID LIKE '" . $row['venueID'] . "'";
                        $result = $mysqli->query($query)->fetch_array();
                        $location_title = $result[1]; // [venueID, location]

                        // Date (2020-01-01)
                        $query = "SELECT eventID, eventStartDate FROM NEE_events WHERE eventID = " . $row['eventID'];
                        $result = $mysqli->query($query)->fetch_array();
                        $date_title = $result[1]; // [eventID, eventStartDate]

                        // Render HTML
                        $output = 
                        '<div class="event-card">
                            <h1>%s</h1>
                            <div class="category">
                                <p>%s | %s | %s</p>
                            </div>
                            <p id="description">%s</p>
                        </div>
                        <a href="event.php?eventID=%s" id="moreinfo">More Information</a>
                        <a href="event.php" id="buyticks">Purchase Tickets</a>
                        <div class="seperator">
                        </div>';

                        echo sprintf($output, $row['eventTitle'], $category_title, $location_title, $date_title, $row['eventDescription'], $row['eventID']);

                    }
                }

                if (!$mysqli->query($sql)) {
                    echo $mysqli->error;
                } 

            ?>

        </div>
    </section>

    <footer>
        <p>North East Events &copy; 2019</p>
    </footer>

</body>

</html>
