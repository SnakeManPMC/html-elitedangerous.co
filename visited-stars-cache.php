<!DOCTYPE html>
<html lang="en">
<head>
<title>PMC Elite Dangerous - The Visited Stars Cache</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="PMC Elite Dangerous The Visited Stars Cache">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>PMC Elite Dangerous The Visited Stars Cache</h1>

<p>
The Visited Stars Cache is a local files that flag star systems visited, its excellent way to keep track which systems have you already been to. Please understand that if you re-install Elite Dangerous game or whole Windows operating system, then you lose visited stars cache. Only way to avoid that is to backup the files.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>The Visited Stars Cache</h2>

<p>
2022-04-28T20:00:00Z Below text contains possibly outdated information, please do not contact Frontier Support about <i>"its not working"</i>. See the forums.frontier.co.uk topic link for details.
</p>

<p>On v2.2 we got visited stars cache feature which lists all the visited star systems from your CMDR locally in your Elite client. See details from <a href="https://forums.frontier.co.uk/showthread.php/291643-The-Visited-Stars-cache" target="_blank">Frontier Forums The Visited Stars cache</a> topic.
</p>

<p>The location of the file in your hard drive is:<br>
C:\Users\YOURNAME\AppData\Local\Frontier Developments\Elite Dangerous\NUMBERS-HERE\ImportStars.txt
</p>

<p>One star system name per line, then start the game, it will lookup the names and merge them into the cache. (If you have many thousands of star names in the file, it may take a few minutes to process).
</p>

<p>While Elite is running it creates RecentlyVisitedStars.dat file.
</p>

<p>You must have hyper jumped once in v2.2 before VisitedStarsCache.dat file is created. It doesnt matter if you have jumped in your Elite lifetime for 10,000 times, you must hyper jump once <b>after upgrading to v2.2</b>.
</p>

<p>When importing is done, it will rename the txt to "ImportStars.txt.imported" file name and you'll get notification on the comms panel.
</p>

<p>There will be an error message about unrecognised star names in the network log (netLog): you won't need to turn on any options for it.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("include/footer.php"); ?>
</footer>

</body>
</html>
