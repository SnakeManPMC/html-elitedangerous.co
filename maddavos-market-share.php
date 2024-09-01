<!DOCTYPE html>
<html>
<head>
<title>PMC Elite Dangerous - Maddavo's Market Share</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="PMC, Elite Dangerous, Maddavo's Market Share">
<META name="keywords" content="PMC, Elite Dangerous, Maddavo, Market, Share, MMS">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1><b>PMC Elite Dangerous - Maddavo's Market Share</b></h1>

<p>Maddavo's Market Share (MMS)</p>

<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Maddavo's Market Share</h2>

<p>Maddavo's Market Share is the main data hub for <a href="tradedangerous.php">Trade Dangerous</a> (TD) trading tool.
</p>

<p>You can download systems, stations, market prices and ship vendors as CSV file format which TD reads. There is also editing option for station data like distance from star, landing pad size and various others.
</p>

<p>Maddavo Market Share guide
</p>

<p>Delete station by adding -1 as its distance from star and upload the .csv (or use editstation.asp page)
</p>

<p><a href="http://www.davek.com.au/td/">Maddavo's Market Share (MMS)</a> homepage.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>Back to <a href="index.php">Elite Dangerous root page</a></p>
<br><br>
<p><i>PMC Elite Dangerous 2014 - <?php print(date("Y"));?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
