<!DOCTYPE html>
<html>
<head>
<title>PMC Elite Dangerous - Crime and Punishment</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="PMC, Elite Dangerous, Crime">
<META name="keywords" content="PMC, Elite Dangerous, Cime">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--
google analytics here
-->
<?php include("include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1><b>PMC Elite Dangerous - Crime and Punishment</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Crime and Punishment</h2>

<p>
Fines will now take seven days before they mature into bounties.
</p>

<p>Active bounties are issued by minor factions only, even for systems owned by one of the three major factions. You won't be able to pay these bounties for seven days.
</p>

<p>Whenever you commit a new bounty offence in a jurisdiction where you already have an active bounty then the bounty value is increased and the timer reset to seven days. If you gain a fine in the same jurisdiction then the bounty value is increased, but the timer is not reset.
</p>

<p>An active bounty is resolved in one of the following ways: Firstly if a ship detects the bounty and destroys you then the bounty is claimed and removed. Secondly if your ship is destroyed, but the bounty is not detected then the following happens: The bounty becomes dormant and can only be detected by authority scans by agents of that jurisdiction and if detected will become an active bounty with a new seven day timer. If a dormant bounty is not detected within seven days then it is removed. If an active bounty is not claimed or made dormant within seven days then it will be cleared.
</p>

<p>Note that when a bounty is removed, for whatever reason, it is added as a legacy fine for the same amount and for the same jurisdiction. Legacy fines never expire and are automatically added to the rebuy cost if you restart in a station or outpost owned by that minor faction.
</p>

<p>Crime of ramming at speed within no fire zones. If travelling at over 100 m/s and you collide with another ship within the no fire zone then it will be considered a crime and you'll be fined.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>Back to <a href="index.php">Elite Dangerous root page</a></p>
<p><i>PMC Elite Dangerous 2014 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
