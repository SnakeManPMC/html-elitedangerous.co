<!DOCTYPE html>
<html lang="en">
<head>
<title>Hunting Missing Data, Exploration, Mining, TradeDangerous Trading, Bounty Hunting 2019 - PMC Elite Dangerous</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="Hunting Missing Data, Exploration, Mining, TradeDangerous Trading, Bounty Hunting 2019 - PMC Elite Dangerous">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Exploration Story 2019 PMC Elite Dangerous</h1>

<p>
Space story about hunting missing data, exploration, mining, tradedangerous trading and bounty hunting in 2019.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>2019-10-04 The Hunt For The Missing Data</h2>

<p>
2019-10-04T09:52:09Z New elite day started, in PMC Miner 2 cockpit, lets fly this ship to jameson memorial.
</p>

<p>
2019-10-04T10:03:32Z Docked at jameson memorial, picked up PMC EDDN Sender, time to go visit couple of oldest trading systems for a change.
</p>

<pre>
python3 trade.py olddata --no-planet --pad-size l? --limit 30 --ly 200 --near shinrartadezhra --route --min-age 200 --ls-max 2000
Station                             DistLy Age/days      StnLs Pad Plt
HIP 59024/Clifford Station          191.61   333.72      1.65K Lrg  No
Kosena/Gwynn Enterprise             188.17   201.61        115 Lrg  No
</pre>

<p>
Then decided to go after eddb closest missing stations which are in fact useless for trading, but galaxy wide they are "missing data" so kind of would be cool to have them updated one day. Yes, I'm bored and flip flopping again...
</p>

<p>
eddb closest missing:
</p>

<pre>
HIP 65900/Harris Beacon
HIP 69124/Harper Penal colony
HIP 71737/Kozlov Penal colony
Tao Wangla/Fuglesang Horizons
HIP 75124/Monge Camp
8 Gamma Coronae Borealis/McCandless Hub
Balie/Abel Survey
Balie/Rayhan al-Biruni's Progress
Chelmentes/Lichtenberg's Progress
Misarret/Wilder Installation
Feng Tu/Baker Bastion
</pre>

<p>
2019-10-04T13:18:37Z Bored, had to stop playing I just cant play any more today / now.
</p>

<p>
2019-10-04T13:19:15Z Elite Log session systems visited (FSD jumps): 25, planets smallest: 485.442km, largest: 4064.63km, detail surface scans: 39
</p>

<div>
<a href="stories-exploration-mining-trading-2019-030.php" class="buttonnext">Next page</a>
<a href="stories-exploration-mining-trading-2019.php" class="buttonhome">Story home page</a>
<a href="stories.php" class="buttonhome">Stories index page</a>
<a href="stories-exploration-mining-trading-2019-028.php" class="buttonprevious">Previous page</a>
</div>

<?php include("include/description-elite.php"); ?>
<?php include("include/description-stories.php"); ?>
<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("include/footer.php"); ?>
</footer>

</body>
</html>
