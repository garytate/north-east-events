<!--
North East Events - index.html
KF4009 Assignment B (Spring 2020)
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

    <section class="intro">
        <div class="container">
        <div id="intro-left">
        <p>Last day to purchase tickets</p>
        <?php
            $mysqli = include('libs/mysqli.php');
            $sql = "SELECT * FROM NEE_events ORDER BY RAND() LIMIT 1";
            $sql_query = $mysqli->query($sql);

            $featured_event = $sql_query->fetch_array();
            echo $featured_event['eventTitle'];
        ?>
        </div>
        <div id="intro-right">
        <p>Don't miss out!</p>
        </div>
        </div>

    </section>

    <footer>

        <p>North East Events &copy; 2020</p>
        
    </footer>

</body>

</html>
