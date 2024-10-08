<!DOCTYPE html>
<html>
<head>
<title>PMC Elite Dangerous Journal</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="PMC, Elite Dangerous, Journal">
<META name="keywords" content="PMC, Elite Dangerous, Journal">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1><b>PMC Elite Dangerous Journal</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Player Journal or Commander's Log</h2>

<p>
Frontier created <a href="https://forums.frontier.co.uk/showthread.php/275151-Commanders-log-manual-and-data-sample">Commanders log manual and data sample</a> topic where they introduce player journal or commander's log file. Elite client writes all kinds of cool data into this JSON file for 3rd party developers to read with their own clients.
</p>

<p>Elite journal files are located in unfortunate "C:\Users\YOURNAME\Saved Games\Frontier Developments\Elite Dangerous\" directory. File names are Journal.DATE.01.log
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>Back to <a href="index.php">Elite Dangerous root page</a></p>
<br><br>
<p><i>PMC Elite Dangerous 2014 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
