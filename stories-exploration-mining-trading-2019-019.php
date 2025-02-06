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
	<h2>2019-09-26</h2>

<p>
2019-09-26T09:31:18Z back in elite, plan is to switch accounts and check if FDEV fixed my second account FSD "blue tunnel" issue after I sent support an email. So first have to prepare EDMC, Elite Log and log dirs. I would assume its not fixed because didn't get a reply from support.
</p>

<p>
2019-09-26T09:38:06Z switched to CMDR "Snake Man PMC" and FSD works okay now, excellent! This means I didn't need to return from my exploration trip in order to do some populated space activities like hunting missing data <img src="images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Plotted route to Zaragas/Jenner Hub where I'm going to buy a second account EDDN sender ship <a href="https://edsy.org/#/L=Fi00000H4C0S00,,,9p300A5y00AN800Ads00Aqq00B4S00BK400Bcg00,,mpU4zM007Q400" target="_blank">edsy.org Diamondback Explorer Specifications</a>.
</p>

<p>
Used TradeDangerous to calculate route and then visited the below systems:
</p>

<pre>
python3 trade.py olddata --min-age 800 --ly 200 --route --near Wo9812B
Station                        Age/days      StnLs Pad Plt
Ch'ol/Wait Colburn Base          910.39        528 Lrg Yes
HIP 74067/Koontz Camp            907.64      6.61K Lrg Yes
Taiowahungu/Duke Relay           907.12        888 Lrg Yes
Lalande 38626/Guidoni Barracks   899.76       231K Lrg Yes
Station                                   DistLy Age/days      StnLs Pad Plt
Vistnero/Harris Terminal                   81.28   888.61        147 Lrg Yes
Cornsar/Fleming Arena                      82.40   802.98        312 Lrg Yes
San Neb Xoc/Ising Dock                    152.59   812.65      1.21K Med  No
Wolf 1042/Grissom Orbital                 154.26   822.69       307K Med  No
Lu Bosate/Sekowski Arsenal                184.72   877.01      1.20K Lrg Yes
Col 285 Sector XK-V b16-0/Popper Barracks 190.00   823.03         25 Lrg Yes
Wo 9812 B/Fozard Lab                      188.13   891.38      2.22K Lrg Yes
Ayoro Nage/Coke Legacy              79.11   898.45          ? Lrg Yes
Warundecab/Caselberg Vision         67.71   876.16        645 Med  No
Kokowatsu/Fischer Landing          101.12   837.58      1.22K Med  No
Ngarans/Beshore Landing            101.69   818.67        20K Med  No
Ngarans/Tuttle Port                101.69   818.68        20K Med  No
Uberadji/Makarov Relay              83.37   815.76        335 Lrg Yes
Jurusasar/Kosai Horizons            84.43   845.08      3.09K Lrg Yes
Li Jiu/Bertin Observatory          129.21   895.74          ? Lrg Yes
</pre>

<p>
2019-09-26T14:18:07Z finished playing as I realized EDMC wont send station data if scan data is disabled. So distance from star and shipyard data is not updated, commodity market prices is the only update EDMC sends.
</p>

<p>
This is no good, I was quite devastated to find this out, made me feel like my second account is useless now if I cannot use it in populated space to send EDDN updates. Shut everything down and started to ask around in discord, Athanasius said that yes this is how it works but he might be able to take a look at the problem lateron, maybe he could add multi CMDR file support for it, dunno.
</p>

<p>
2019-09-26T14:54:32Z continued playing with CMDR Snake Man in my normal exploration location <img src="images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2019-09-26T15:32:12Z decided to head back to populated space, I want to do more EDDN sending (properly), mining and trading. Hah yes I know flip flopping again, when I'm exploring I want to be in populated space and wise versa <img src="images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Total of 315 jumps to the first waypoint, total distance was like 28.4k ly to sol.
</p>

<p>
2019-09-26T16:15:20Z arrived at Pleia Aed RY-M b34-0 system and then frontier server yellow adder error.
</p>

<p>
2019-09-26T16:24:05Z arrived at Qeakio XU-O b33-0 system back in game heh.
</p>

<p>
2019-09-26T17:27:42Z arrived at Qeakoe SM-W d1-2 system which had two water worlds and earth-like world discovered by a CMDR.
</p>

<p>
2019-09-26T17:53:47Z arrived at Qeakoe FA-A c0 system and then it was time to call it a night, dead tired.
</p>

<p>
2019-09-26T17:54:30Z Elite Log session systems visited (FSD jumps): 90, special planets ammonia: 2, water: 11, planets smallest: 381.865km, largest: 13518.5km, detail surface scans: 429
</p>

<div>
<a href="stories-exploration-mining-trading-2019-020.php" class="buttonnext">Next page</a>
<a href="stories-exploration-mining-trading-2019.php" class="buttonhome">Story home page</a>
<a href="stories.php" class="buttonhome">Stories index page</a>
<a href="stories-exploration-mining-trading-2019-018.php" class="buttonprevious">Previous page</a>
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
