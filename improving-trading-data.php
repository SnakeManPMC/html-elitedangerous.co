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
<p>HOWTO Improve Trading Data</p>
</header>

<section>
	<h2>Elite Trading Data Quality</h2>

<p><b>2019-10-07 Updated to Elite Dangerous v3.5</b></p>

<p>How to improve Elite Dangerous trading market prices and other data availability.
</p>

<p>It is very important that we have good and up to date coverage of trading commodity prices, station distance from star and station landing pad sizes.
</p>

<p>Most common case though might be that commodity prices have been updated last time about 1-2 years ago or more, this kind of data age is unacceptable for proper trading. In fast moving commodity markets sometimes even couple of days old data is too old already (but this depends a lot what happens in the markets, there is no simple example to show). Also Frontier Developments have released updates to elite which cause the old market commodities to be with invalid prices, commodities missing etc, old data just is not usable.
</p>

<p>Use <a href="edmc.php">EDMC</a> to get market data which is automatically sent to <a href="eddn.php">EDDN</a>, from where the whole community (several trading sites and tools) will get the data.
</p>

<p>Use these tools to find oldest data: <a href="https://eddb.io/station">EDDB Stations (use prices update to filter oldest)</a>, <a href="https://www.edsm.net/en/systems/stations">EDSM Oldest Stations</a> and <a href="tradedangerous.php">TradeDangerous olddata</a> command.
</p>

<p>I (Snake Man) was clearly the most enthusiastic CMDR with hunting missing data in the early days, cant exactly remember the year but must have been like 2015 when I was already asking themroc to add missing data station page to EDDB and he eventually did it (thanks!). I spent a lot of time hunting missing data and actually back in 2017-10-31 during <a href="pmc-galaxy-loop.php">PMC Galaxy Loop</a> went and purchased second account so I can go hunt missing data to EDDN. So this has been a years long project from which of I personally have taken many breaks, I don't know how many other CMDRs have actually used the two EDDB pages (or Maddavo's Market Share when it was still working). Now in 2019-09-26 CMDR "Lance 'Spacecat' D." posted a <a href="https://forums.frontier.co.uk/threads/bubble-explorers-wanted-data-needs-you.523462/">topic in Frontier forums</a> asking for other CMDRs to join him hunting missing data, I did not actually see this topic until it was announced in EDSM discord that the EDDB closest-missing page is empty. I was just hunting missing data the previous night so I missed the final day of the hunt heh. Greetings for the other CMDRs who took part in this, we did it as community.
</p>

	<h2>EDDB</h2>

<p>Historical info; <a href="https://ross.eddb.io/station/snake-man">EDDB snake-man</a> and <a href="https://ross.eddb.io/station/closest-missing">EDDB Closest Missing</a> pages were used when we had missing data, for <i>old</i> data use station page instead.
</p>

<p>snake-man page lists all the stations with distance to star or pad size data missing. There is no order, it just lists them and you cannot search for closest system or anything.
</p>

<p>Closest-missing page allows you to search the system you are in (or whatever system you are interested in) and it lists all closest stations with missing data. This page sorts them by light years distance. This is the new version of snake-man page.
</p>

<p>After all the missing data was added you can use <a href="https://eddb.io/station">EDDB Stations (use prices update to filter oldest)</a> page to find OLD data to update. If new stations are found and added through EDDN without full data-set, they will appear in closest-missing. It might be good idea to check closest-missing page maybe once a week or so, just in case.
</p>

	<h2>EDSM</h2>

<p>Oldest stations will filter out old data stations nearest to your CMDR location if logged in.
</p>

	<h2>Trade Dangerous</h2>

<p>TradeDangerous has olddata command to list oldest market prices from stations. With route parameter it actually plots a route for you to follow through the list, this is awesome time saver.
</p>

<p>List oldest market data non planetary stations with distance less than 2000 light seconds from the star and large landing pad, also limit the return output to 20 stations.
</p>
<pre>
trade.py olddata --no-planet --limit 20 --pad-size l --ls-max 2000
</pre>

<p>This searches within 100 light years from Shinrarta Dezhra system and returns maximum of 50 non planetary stations which market data age is older than 100 days.
</p>
<pre>
trade.py olddata --no-planet --limit 50 --pad-size l --ls-max 2000 --near shinrarta --route --ly 100 --min-age 100
</pre>

</section>

<footer>
<p>Back to <a href="index.php">Elite Dangerous root page</a></p>
<br><br>
<p><i>PMC Elite Dangerous 2014 - <?php print(date("Y"));?>.</i></p>
<?php include("include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
