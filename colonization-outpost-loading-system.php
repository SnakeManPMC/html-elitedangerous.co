<!DOCTYPE html>
<html lang="en">
<head>
<title>Colonization Outpost Loading System PMC Elite Dangerous</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="Colonization Outpost Loading System PMC Elite Dangerous">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Colonization Outpost Loading System PMC Elite Dangerous</h1>

<p>
Colonization Outpost Loading System lists basic knowledge how to choose a star system where to go buy outpost construction required commodities in Elite Dangerous.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>Colonization Outpost Loading System</h2>

<p>
When you choose any kind of loading system, being it steel, titanium, ceramic composites or CMM composite, make sure the station SUPPLY is more or equal to the amount you want to buy. In 2025-04-28 I sent fleet carrier PMC PapaBear to Harrison Holdings to be loaded but made the mistake not to check supply more carefully, I set buy order for 20k tons but the station only has supply for 13k tons, so it was no good deal. Always make sure supply is more or equal to your planned buy order demand size.
</p>

<p>
CMM composite loading system/station:
</p>

<p>
<a href="https://inara.cz/elite/station/45079/" target="_blank">Col 285 Sector XP-O d6-96/Harrison Holdings</a>, this is BAD system/station because CMM composite supply was only 13k, its not enough for big boy cargo hauling <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
<a href="https://inara.cz/elite/station/62830/" target="_blank">Chou Wargl/Sanger Refinery</a> is another system/station that has a quite low supply for steel and titanium.
</p>

<p>
Check also tradedangerous pmc-colonization-planetary.sh script which returns stations with decent supply within 500LY range from Snake Sector. PMCTODO add this shell script heh.
</p>

<p>
If you have dedicated fleet carrier for loading planetary landing required commodities which are <b>Ceramic Composites</b> and <b>CMM Composite</b>, then you might want to maximize loading the carrier up with as much of this stuff possible relative to outpost construction needs.
</p>

<p>
One outpost requires max Ceramic composites 550 and CMM composite 4600.
</p>

<p>
With those amounts its quite difficult to fill in carrier for as many outposts as possible because only three outposts would already require 13800 tons of CMM composite. Below is few scenarios you could think of.
</p>

<pre>
Three outposts:
Ceramic Composite 1650
CMM Composite 13800
===
15,450 tons

Four outposts:
Ceramic Composite 2200
CMM Composite 18400
===
20,600 tons
</pre>

<p>
If you were to load up five outposts, it would exceed fleet carrier cargo capacity of 25,000 tons as it would be ceramic composites 2750 and cmm composite 23000 which is 25,750 tons total.
</p>

<p>
If you want to fill 25k ton carrier cargo hold to the brim, you could do ceramic composite 3000 and cmm composite 22000, as said its not matching how many outposts you can construct with one carrier loading round trip, but it would be maxing out the cargo hold.
</p>

<?php include("include/description-elite.php"); ?>
<?php include("include/description-colonization.php"); ?>
<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("include/footer.php"); ?>
</footer>

</body>
</html>
