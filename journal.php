<!DOCTYPE html>
<html lang="en">
<head>
<title>PMC Elite Dangerous Commanders Journal</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="PMC Elite Dangerous Commanders Journal">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>PMC Elite Dangerous Commanders Journal</h1>

<p>
Commanders journal is a JSON file located in games users dir, this file logs all kinds of commodity market, space station, exploration, star system etc data. This file is used by community created tools to improve Elite Dangerous experience.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Player Journal or Commander's Log</h2>

<p>
Frontier created <a href="https://forums.frontier.co.uk/threads/commanders-log-manual-and-data-sample.275151/" target="_blank">Commanders log manual and data sample</a> topic where they introduce player journal or commander's log file. Elite client writes all kinds of cool data into this JSON file for 3rd party developers to read with their own clients.
</p>

<p>Elite journal files are located in unfortunate "C:\Users\YOURNAME\Saved Games\Frontier Developments\Elite Dangerous\" directory. File names are Journal.DATE.01.log
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("include/footer.php"); ?>
</footer>

</body>
</html>
