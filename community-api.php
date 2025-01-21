<!DOCTYPE html>
<html lang="en">
<head>
<title>PMC Elite Dangerous - Community API</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="PMC Elite Dangerous Community API">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1><b>PMC Elite Dangerous - Community API</b></h1>

<p>
Elite Dangerous Community Advanced Programming Interface (API).
</p>

<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Community API</h2>

<p>Community API is some leftover iOS mobile API server frontier development had running which community members found and started to (ab)use, this eventually lead to frontier acknowledging and accepting it, today it is perfectly fine to use the community API to collect some info from the game.
</p>

<p>Difference between <a href="journal.php">player journal</a> and community API is that journal is files locally written to your hard disk drive by elite client while the API is a server that frontier runs.
</p>

<p>Tools like <a href="edmc.php">EDMC</a> query the API for commodity market prices, shipyard info and other data.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("include/footer.php"); ?>
</footer>

</body>
</html>
