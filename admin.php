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
            <form action="admin/newrecord.php" method="post">
                <ul class="record-container">
                    <li>
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Event Title">
                    </li>
                    <li>
                        <label>Description</label>
                        <input type="text" name="description" placeholder="Event Description">
                    </li>
                    <li>
                        <label>Start Date</label>
                        <input type="date" name="start-date">
                    </li>
                    <li>
                        <label>End Date</label>
                        <input type="date" name="end-date">
                    </li>
                    <li>
                        <label>Price</label>
                        <input type="text" name="price">
                    </li>
                    <li>
                        <label>Category</label>
                        <select name="category">
                        <?php
                            $mysqli = include('libs/mysqli.php');

                            $sql = "SELECT catID, catDesc FROM NEE_category";
                            $query = $mysqli->query($sql);
                            if ($query->num_rows > 0) {
                                while ($row = $query->fetch_assoc()) {
                                    echo sprintf("<option value='%s'>%s</option>", $row['catID'], $row['catDesc']);
                                }
                            }
                        ?>
                        </select>
                    </li>
                    <li>
                        <label>Location</label>
                        <select name="location">
                        <?php
                            $mysqli = include('libs/mysqli.php');

                            $sql = "SELECT venueID, venueName FROM NEE_venue";
                            $query = $mysqli->query($sql);
                            if ($query->num_rows > 0) {
                                while ($row = $query->fetch_assoc()) {
                                    echo sprintf("<option value='%s'>%s</option>", $row['venueID'], $row['venueName']);
                                }
                            }
                        ?>
                        </select>
                    </li>
                    <li>
                        <button type="submit">Submit</button>
                    </li>
                </ul>
            </form>
        </div>
	</section>

    <footer>
        <p>North East Events &copy; 2019</p>
    </footer>

</body>

</html>
