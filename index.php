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
            <!--This is automatically filled by events.js
                Example of generated div:
                <div class="event-card">
                    <img src="../assets/img/go-karting.png">
                    <h1>Kung Fu</h1>
                    <p>Learn the basics &amp; advanced techniques of Kung Fu!</p>
                    <p>£39.99</p>
                    <button type="submit" class="order-button">Order</button>
                </div>
            -->

            <?php

                $config = include('config.php');
                $serverName = $config['host'];
                $serverUser = $config['user'];
                $serverPass = $config['pass'];
                $serverDB   = $config['data'];

                $dbhandle = mysqli_connect($serverName, $serverUser, $serverPass, $serverDB)
                or die("rip"); 

                $sql = "SELECT * FROM nee_events";
                $event_query = $dbhandle->query($sql);

                if ($event_query->num_rows > 0) {
                    while ($row = $event_query->fetch_assoc()) {

                        $category_title = "Unknown";
                        $location_title = "Unknown";
                        $date_title     = "Unknown";

                        // Category (Newcastle Theatre)
                        $query = "SELECT catID, catDesc FROM nee_category WHERE catID LIKE '" . $row['catID'] . "'";
                        $result = $dbhandle->query($query)->fetch_array();
                        $category_title = $result[1]; // [catID, catDesc]

                        // Location (Newcastle Upon Tyne)
                        $query = "SELECT venueID, location FROM nee_venue WHERE venueID LIKE '" . $row['venueID'] . "'";
                        $result = $dbhandle->query($query)->fetch_array();
                        $location_title = $result[1]; // [venueID, location]

                        // Date (2020-01-01)
                        $query = "SELECT eventID, eventStartDate FROM nee_events WHERE eventID = " . $row['eventID'];
                        $result = $dbhandle->query($query)->fetch_array();
                        $date_title = $result[1]; // [eventID, eventStartDate]

                        echo '<div class="event-card">';
                        echo "<h1>" . $row['eventTitle'] . "</h1>";
                        echo '<div class="category">' .  '<p>' . $category_title . ' | ' . $location_title . ' | ' . $date_title . '</p></div>';
                        echo "<p>" . $row['eventDescription'] . "</p></div><div class=\"seperator\"></div>";
                    }
                }

                if (!$dbhandle->query($sql)) {
                    echo $dbhandle->error;
                } 

                ?>
        </div>
    </section>

    <footer>
        <p>North East Events &copy; 2019</p>
    </footer>

</body>

</html>
