<!DOCTYPE html>
<html lang="en">
<head>
<title>Colonization Outpost Shopping List PMC Elite Dangerous</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="Colonization Outpost Shopping List PMC Elite Dangerous">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Colonization Outpost Shopping List PMC Elite Dangerous</h1>

<p>
Colonization Outpost Shopping List is a guide for fleet carrier owners who construct outposts in Elite Dangerous.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>Colonization Outpost Shopping List</h2>

<p>
This page is about the <b>ORBITAL small outpost facility</b> which is the first construction any system should have.
</p>

<p>
When you are colonizing a system by constructing an outpost, this is the <b>shopping list of required commodities</b> that outpost construction needs. The number of these individual commodity tons is randomized every time you choose to begin construction, I don't know how much but lets just say as an example that there are base tonnage values for all construction but then it gets something like 10% random number thrown in top of it to make it look more interesting ie not the same every time, so there is no one definite exactly correct list you can have, every outpost construction has different required commodities tonnage numbers.
</p>

<p>
It is mostly the same, like CMM composite, steel and titanium is always in the several thousands, while some other stuff like power generators is usually less than 20t etc.
</p>

<p>
My goal in this page is to setup a shopping list to fill up a fleet carrier, or just run your Lakon Type-9 cargo ship in order to get your outpost built. Mostly this list is for filling up a fleet carrier or few, technically speaking if you are doing individual cargo runs in a big (or any size) cargo ship, you could just check system map architect view how many commodities are left to deliver, or you could write the numbers on a temporary NotePad++ tab and manually keep track of each commodity. Another option is to use <a href="edmc.php">EDMC</a> Colonization Plugin which automatically keeps track of all construction sites and individual required commodities count.
</p>

<p>
Whatever way you choose, will work fine. I created this list so it makes my colonization life easier when working with fleet carriers, specifically how to fill them up at the loading station.
</p>

<p>
<b>Industrial Outpost - Vulcan</b>
</p>

<p>
Less than one thousand tons:
</p>

<pre>
Aluminium 505
Ceramic composites 550
Computer components 100
Copper 250
Food cartridges 100
Fruit and vegetables 100
Insulating membrane 350
Medical diagnostic equipment 20
Non-lethal weapons 20
Polymers 550
Power generators 20
Semiconductors 100
Superconductors 150
Water 750
Water purifiers 50
</pre>

<p>
Over one thousand tons (my lowest and highest number in record):
</p>

<pre>
CMM composite 4600 (min 4298, max 4513)
Liquid oxygen 1900 (min 1712, max 1872)
Steel 7000 (min 6388, max 6959)
Titanium 5700 (min 5289, max 5609)
</pre>

<p>
As you can see, the <i>Three Kings</i> regarding tonnage are Steel, Titanium and CMM Composite. The only other commodity above one thousand ton requirement is Liquid Oxygen which is almost two thousand tons.
</p>

<p>
If you really want make it simpler to remember those thousand numbers, you could round them up like <b>CMM composite 4600, liquid oxygen 1900, steel 7000 and titanium 5700</b>. Yeah Titanium I took really high up, but at least with these numbers you should not be able to have construction halted because you ran out of some commodity.
</p>

<p>
Good to note that CMM composite and Ceramic Composites are two commodities that are only produced/sold in planetary surface ports, meaning you have to do planetary landing in order to buy them. Only exception to this is trailblazer megaships, but those and the systems they are in have their own set of problems then. It might be worth while to go buy CMM's and ceramic composites from megaships and steel, titanium, liquid oxygen etc other big items from regular starports.
</p>

<p>
Outpost ready to go copy-paste list of the pure commodity names with proper case (including CMM Composite) without required ton quantity:
</p>

<pre>
UTC_TIMESTAMP CMDR COMMANDER_NAME, SYSTEM_NAME, industrial outpost - vulcan:

Aluminium
CMM Composite
Ceramic Composites
Computer Components
Copper
Food Cartridges
Fruit And Vegetables
Insulating Membrane
Liquid Oxygen
Medical Diagnostic Equipment
Non-Lethal Weapons
Polymers
Power Generators
Semiconductors
Steel
Superconductors
Titanium
Water
Water Purifiers
</pre>


<p>
This is a list of <i>"small ticket items"</i> multiplied with FIVE (5). This is because today I have 5 CMDR accounts and all of them have one open system claim, so PMC carriers should be ready to deliver this much of those smaller quantity required commodities at any time. This luckily fits into one fleet carrier.
</p>

<pre>
Aluminium 2525
Ceramic composites 2750
Computer components 500
Copper 1250
Food cartridges 500
Fruit and vegetables 500
Insulating membrane 1750
Medical diagnostic equipment 100
Non-lethal weapons 100
Polymers 2750
Power generators 100
Semiconductors 500
Superconductors 750
Water 3750
Water purifiers 250
===
18,075 tons total.
</pre>

<?php include("include/description-elite.php"); ?>
<?php include("include/description-colonization.php"); ?>
<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("include/footer.php"); ?>
</footer>

</body>
</html>
