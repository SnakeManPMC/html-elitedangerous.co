<!DOCTYPE html>
<html lang="en">
<head>
<title>TradeDangerous Commodity Find Closest Station PMC Elite Dangerous</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="TradeDangerous Commodity Find Closest Station PMC Elite Dangerous">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>TradeDangerous Commodity Find Closest Station PMC Elite Dangerous</h1>

<p>
TradeDangerous Commodity Find Closest Station in Elite Dangerous.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>Tradedangerous Commodity Find Closest Station</h2>

<p>
You need to find lets say Steel, Titanium, Water, CMM Composite, whatever commodity near the system you're in, what command line parameters to use?
</p>

<p>
Return stations that sell water at least 790 tons near Tikurua system:
</p>
<pre>
trade.py buy water --supply 790 --near tikurua
</pre>

<p>
Return multiple commodities:
</p>
<pre>
trade.py buy water,fruitandvegetables --supply 790 --near tikurua
trade.py buy water,fruitandv,ceramicc,insulatingm --supply 790 --near tikurua
</pre>

<p>
Limit the search returns to 40 lines/stations:
</p>
<pre>
trade.py buy liquido,aluminium,cmmcomp,steel,titanium --limit 40 --supply 790 --near tikurua
trade.py buy ceramicc,cmmcomp,insulatingm,semicond,supercond,powergene,waterpurifiers,computercomp,medicaldiagnostice,non-lethalw --limit 40 --supply 790 --near tikurua
</pre>

<p>
You can place command line parameters into "config file" as well, here it is pmc-colonization-outpost.txt file:
</p>
<pre>
python3 trade.py buy +../pmc-colonization-outpost.txt --near tikurua
</pre>

<p>
Feel free to create topic to <a href="https://www.pmctactical.org/forum/" target="_blank">PMC Tactical Forum</a> if you need more advanced help with using TradeDangerous.
</p>

<?php include("include/description-elite.php"); ?>
<?php include("include/description-colonization.php"); ?>
<?php include("include/description-trading.php"); ?>
<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("include/footer.php"); ?>
</footer>

</body>
</html>
