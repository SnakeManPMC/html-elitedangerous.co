<!DOCTYPE html>
<html lang="en">
<head>
<title>PMC Elite Dangerous Captain's Log</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="PMC, Elite Dangerous, Captain's Log">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>PMC Elite Dangerous Captain's Log</h1>

<p>
Commanders log tool called Captain's Log by Genar_Hofoen.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Captain's Log by Genar_Hofoen</h2>

<p>This is very nice tool to log your travels around the galaxy. You can insert System and Jump notes. Everything is handled automatically from Elite journal.
</p>

<p>
Genar_Hofoen made a Frontier Forums Captain's Log 2 Beta Announcement at the day of Elite v2.2 launch. Check out Official Captain's Log Homepage. Edit: 2025-01-21T08:30:49Z, frontier forum topic and homepage links dead. Quick search finds new forum topic link: <a href="https://forums.frontier.co.uk/threads/explorers-application-captains-log.155545/" target="_blank">FDEV forum "[Explorer's Application] Captain's Log"</a>.
</p>

<p>Uses SQLite3 database to store your travels and notes. Has very nice graphical percentage circle (pie?) presentation of scanned planet materials and it also shows icons for J1, J2 and J3 which are Elite explorers slang term for "Jumponium" on basic, standard and premium boost levels. Very easy and nice way to see what materials current systems scanned planets provide.
</p>

<p>Note: Captain's Log v2.1.15 is still not working properly in 4k desktop resolutions, some of the text is cut off due some user interface scale issues. You can use Captain's Log in 4k, but its... well annoying issue to say the least.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("include/footer.php"); ?>
</footer>

</body>
</html>
