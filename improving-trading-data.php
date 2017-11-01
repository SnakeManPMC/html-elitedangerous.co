<!DOCTYPE html>
<html>
<head>
<title>PMC Elite Dangerous - Improving Trading Data</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="PMC, Elite Dangerous, Improving Trading Data">
<META name="keywords" content="PMC, Elite Dangerous, Trading, Data">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("include/google-ads.php"); ?>
<h1><b>PMC Elite Dangerous - Improving Trading Data</b></h1>
<p>Howto Improve Trading Data</p>
</header>

<section>
	<h2>Elite Trading Data Quality</h2>

<p>How to improve Elite Dangerous trading market prices and other data availability.
</p>

<p>It is very important that we have good and up to date coverage of trading commodity prices and station landing pad sizes. In the vast elite galaxy (populated space) there are many stations which are still missing station landig pad sizes, commodity market prices and even both.
</p>

<p>Most common case though might be that commodity prices have been updated the last time about two years ago, this kind of data age is unacceptable for proper trading.
</p>

<p>Use <a href="edmc.php">EDMC</a> to collect market data which is automatically distributed to <a href="eddn.php">EDDN</a>, from where the usual trading sites and tools will get the data.
</p>

<p>Use these tools to track oldest and missing data: <a href="http://www.davek.com.au/td/editstation.asp">Maddavo's Market Share - Edit Stations</a> and <a href="https://ross.eddb.io/station/closest-missing">EDDB - Closest Missing</a>.
</p>

	<h2>Maddavo's Market Share</h2>
<p>Edit Station page is where you can list all the data we need. Type in the system name your in, the page then lists the nearest systems with missing data.
</p>

<p>At <i>Nearest stations missing prices</i> part use the drop downs to choose landing pad size L (large) as there is no point of trading with smaller ships, choose Planetary N (no) because it takes forever to land into planetary ports. The <i>MaxLsFromStar</i> Ls (light seconds) should be set to max of 1000ls because anything above it and it will take way too long to reach the station.
</p>

<p>0Ls tick box includes distance from star data data missing, ie zero, stations.
</p>

<p>Landing pad size and planetary difference between empty slot and ? question mark. PMCTODO
</p>

<p>next system missing data? PMCTODO
</p>

<p>next system? PMCTODO
</p>

<p>To recap: landing pad size L, planetary N and MaxLsFromStar 1000.
</p>

	<h2>EDDB</h2>
<p>https://ross.eddb.io/station/snake-man or closest-missing PMCTODO
</p>

<p>snake-man page lists all the stations with distance to star or pad size data missing. There is no order, it just lists them and you cannot search for closest system or anything. Its not totally useless, but very close to it, very difficult to use.
</p>

<p>Closest-missing page allows you to search the system your in (or whatever system you are interested in) and it lists all closest stations with missing data. This page sorts them by light years distance.
</p>

<p>I believe this is the new or public version of snake-man page.
</p>

	<h2>Trade Dangerous?</h2>
<p>it has some sort of parameter to list oldest prices and I think landing pad sizes, but I cant remember what it was :) PMCTODO
</p>
</section>

<footer>
<p>Back to <a href="index.php">Elite Dangerous root page</a></p>
<br><br>
<p><i>PMC Elite Dangerous 2014 - <?php print(date("Y"));?>.</i></p>
<?php include("include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
