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
    <title>North East Events &bull; Credits</title>

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

	<section class="credits">
		<div class="container">
		<h1>Student Information</h1>
		<p>Gary Tate<br>W17001980<br>me@garytate.co.uk</p>
		<h1>Acknowledgements</h1>
        <p>Tate, Gary, 2020. North East Events Logo. [image] [Accessed 28 April 2020].
        <p>Font Awesome, n.d. Github Icon. [image] Available at: https://fontawesome.com/icons/github [Accessed 29 April 2020].</p>
        <p>Font Awesome, n.d. Theatre Masks Icon. [image] Available at: https://fontawesome.com/icons/theater-masks [Accessed 29 April 2020].</p>
        <p>Font Awesome, n.d. Campground Icon. [image] Available at: https://fontawesome.com/icons/campground [Accessed 29 April 2020].</p>
        <p>Font Awesome, n.d. Microphone Icon. [image] Available at: https://fontawesome.com/icons/masks [Accessed 29 April 2020].</p>
        <p>Font Awesome, n.d. Running Icon. [image] Available at: https://fontawesome.com/icons/microphone [Accessed 29 April 2020].</p>
        <p>Font Awesome, n.d. Compass Icon. [image] Available at: https://fontawesome.com/icons/running [Accessed 29 April 2020].</p>
        <p>Font Awesome, n.d. Child Icon. [image] Available at: https://fontawesome.com/icons/compass [Accessed 29 April 2020].</p>
        <p>Font Awesome, n.d. Music Icon. [image] Available at: https://fontawesome.com/icons/child [Accessed 29 April 2020].</p>
        <p>Font Awesome, n.d. Swimming Pool Icon. [image] Available at: https://fontawesome.com/icons/music [Accessed 29 April 2020].</p>
        <p>Font Awesome, n.d. Glass Chers Icon. [image] Available at: https://fontawesome.com/icons/swimming-pool [Accessed 29 April 2020].</p>

		<h1>Security Considerations</h1>
		<p>The most clear issue presented is the lack of identification of those who are inputting new data into the database, this can easily be resolved by including an authentication process which can verify that whoever is inputting/removing data is someone with the appropriate credentials.
		SQL injections are also are rather large issue surrounding dynamic websites, the best way to deal with this sort of attack is to filter and verify all inputted information to make sure they do not include SQL syntax.
		<br><br>Storing data within your servers is an area which has became increasingly strict and regulated.
		GDPR (General Data Protection Regulation) is a prime example, governed by the European Union, consisting on 99 articles safeguarding the privacy and information of customers who utilise your products.[https://gdpr-info.eu/]
		All information which is sensitive, such as passwords and financial information <b>must</b> be encrypted, to avoid attacks on the website gaining direct access to customer's private information - which could provoke lawsuits and destroy reputation for the company.
		All encryption should be salted and hashed to remove the possibility of a hash look-up table bypassing the encryption.</p>
		</div>
	</section>

    <footer>
        <p>North East Events &copy; 2020</p>
    </footer>

</body>

</html>
</html>
