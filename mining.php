<!DOCTYPE html>
<html>
<head>
<title>PMC Elite Dangerous - Mining</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="PMC, Elite Dangerous, Mining">
<META name="keywords" content="PMC, Elite Dangerous, Mining">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("include/google-ads.php"); ?>
<h1><b>PMC Elite Dangerous - Mining</b></h1>
</header>

<section>
	<h2>Mining</h2>

<p>
Mining is shooting a laser to an asteroid which gives fragments, collector limpets grab these fragments and bring them to your ship where refinery will process them into minerals which are placed in your cargo hold. You can sell these minerals in many stations.
</p>

	<h2>Outfitting Mining Ship</h2>

<p>
Mining Outfit:
</p>
<ul>
<li>detailed surface scanner so you can find the hotspots (you need it even after you have scanned them)</li>
<li>prospector limpet controller</li>
<li>collector limpet controller, as many as you can have, lakon type-9 can have 11 limpets</li>
<li>mining lasers</li>
<li>refinery</li>
<li>cargo racks, as many as you can have</li>
<li>fuel scoop</li>
</ul>

<p>
You need fuel scoop which in general is optional, but the distances you need to travel between mining / selling systems are so long that you save time with fuel scoop not needing to dock for refuels. For those wealthy commanders with fleet carriers, fuel scoop is excess weight they don't need it as their carrier is nearby.
</p>

<p>
Don't forget to purchase limpets from stations / carriers as limpet controllers are useless without limpets.
</p>

	<h2>Finding A Planet With Rings</h2>

<p>
<a href="https://edtools.cc/miner">edtools.cc/miner by CMDR VicTic</a> to find planetary rings with overlapping hotspots and nearby high paying sell stations.
</p>

<p>
Painite can be found in metallic rings, low temperature diamonds (LTD) and tritium (also void opals?) can be found in icy rings.
</p>

<p>
When you arrive to the mining system, fuel scoop tanks full because you have one problem less to worry when you start hyper jumping towards selling station with full cargo of expensive minerals.
</p>

<p>
If you have not detail surface scanned the rings before you need to do so to find the mining hotspots, but you still need detailed surface scanner in your mining ship as well because without it the ring hotspots will not show up even after you previously scanned them with other (perhaps exploration) ship.
</p>

<p>
After detailed surface scanning check visually the orange/yellow hotspots in the rings and look left side panel navigation tab for lockable locations for these hotspots. When you see overlapping hotspots of same type minerals, painite, low temperature diamonds, tritium etc, then you have found something good.
</p>

<p>
Double overlapping hotspots are very nice and triple overlapping hotspots are like you really struck gold now. At the moment of writing this page (2020-06-19) there are only two known locations discovered by CMDRs for LTD triple overlapping hotspots :)
</p>
<pre>
Col 285 Sector CC-K a38-2 1
Corona Austr. Dark Region OX-U b2-3 6
</pre>

<p>
Asteroid belts are not worth mining, go to planet rings instead.
</p>

	<h2>AI Ships (pirates)</h2>

<p>
AI ships? Yes because never ever should you be mining/trading in Open Play because some despicable commanders destroy you for no reason. Piracy is perfectly fine, its great in fact, but killing other players for "fun" is not.
</p>

<p>
<b>In the rings</b>
</p>

<p>
When you drop to the ring asteroids system authority vessels or miner or pirates or mixture of these appear, police/pirates will scan you. If a lone miner appears he just does his thing and doesn't bother you. If you get scanned by a pirate and have cargo on board, get ready to high wake jump out of there because the pirate will attack you. You can obey and jettison cargo (do not abandon) and then let your collector limpets pick them right back up heh.
</p>

<p>
If you lose connection to server or any other reason have to re-login, new set of AI ship(s) appear. The only way to avoid losing cargo or fighting with this fake scripted AI ship game mechanic is to hyper jump. However the pirates did accept reasonable amount of abandoned cargo, so just drop a few tons and wait for further instructions, eventually the pirate will be happy and leave after which you are free to mine again all alone. Or you could just re-login to the game and immediately hyper jump away off towards the selling station.
</p>

<p>
<b>Traveling To Selling Station</b>
</p>

<p>
When you are traveling from the rings to a selling station you are in danger of being interdicted by fake scripted AI ships. It is extremely dangerous as sometimes these stupid ships just decide to destroy you for no reason even after you have submitted to interdiction.
</p>

<p>My personal method is: always submit to interdiction, put 4 pips to shields, boost away and engage FSD as soon as the cooldown is over. Unless the AI ship is some pimp engineered up to the gills garbage, you should be able to escape.
</p>

<p>
No shields for maximum cargo space, yup I get that, did that myself many times... unfortunately your chances of survival an interdiction is dramatically reduced without shields. I don't like shields all they do is take good cargo space, but its a compromise you have to decide by yourself, more cargo or very vulnerable for attacks.
</p>

<p>
If you own a carrier or hitch a ride on some other CMDRs carrier then you have nothing to worry about interdictions (ok there is the short supercruise from carrier to station but yeah).
</p>

	<h2>Shooting Asteroid, the real mining</h2>

<p>
Choosing an asteroid: shoot prospector limpet to it and target the limpet. Do not start mine an asteroid that has less than 20% precious mineral content. Notice that painite has much higher percentage content than lets say low temperature diamonds.
</p>

<p>
Use left side panel contacts to add undesired target fragments to ignore list, only take what you need.
</p>

<p>
Even if your cargo hold is full you can still store stuff in the refinery bins, once you are in station and sell your cargo, refinery will automatically process the fragments in the bins and place minerals into cargo hold. You can then sell few more minerals.
</p>

<p>
Void opals pristine or depleted ring doesn't matter (game doesn't even include that info anymore?), what matters is rings MASS, it should be over trillion. That sort of mass increases the chances of void opals appearing. Overlapping hotspots does not matter when it comes to void opals.
</p>

<p>
Low Temperature Diamonds overlapping hotspots mining is still the best in a large ship with many collector limpets.
</p>

	<h2>Selling Minerals</h2>

<p>
Search for stations buying expensive mineral by using <a href="https://eddb.io/commodity/83">eddb commodity painite</a>, <a href="https://eddb.io/commodity/276">eddb commodity low temperature diamonds</a> or <a href="tradedangerous.php">TradeDangerous</a>:
</p>

<p>
Painite, demand 15800
</p>
<pre>
trade.py sell painite --limit 10 --no-planet --pad-size l --avoid sirius --demand 15800
</pre>

<p>
Painite, no demand limit
</p>
<pre>
trade.py sell painite --limit 10 --no-planet --pad-size l --avoid sirius
</pre>

<p>
Low temperature diamonds, demand 15800
</p>
<pre>
trade.py sell lowtemp --limit 10 --no-planet --pad-size l --avoid sirius --demand 15800
</pre>

<p>
Low temperature diamonds, no demand limit
</p>
<pre>
python3 trade.py sell lowtemp --limit 10 --no-planet --pad-size l --avoid sirius
</pre>

<p>
If you can find bulletin board missions which buy minerals they pay great deal for these, however you need to judge if your time is worth to use searching for these missions or instead just selling the stuff on commodity market. In general its not worth your time to search these missions.
</p>

<p>
2020-06-06 Few days out from fleet carriers release and everyone seems to be in low temperature diamonds (LTD) laser mining frenzy on Borann system A 2 ring. People say LTD laser mining is now the most profitable mining.
</p>

<p>
2020-06-17 Frontier Developments reduced LTD sub surface deposits on overlapping hotspots. Some people yelled and screamed but actually this reduction is not that bad, you can still make crazy mounts of credits by mining LTD's, don't worry about it.
</p>

	<h2>Bulk Tax</h2>

<p>
When you go selling minerals (any cargo really), some guides say first pick a sell station before you even go to mine because you need to have market demand for ten (10) times of the cargo space of your ship otherwise you get "bulk tax" into the market price.
</p>

<p>
For example if you do not have any LTD's in your cargo market price would be 1.7 million per ton, but once you have 640t of them and demand is less than 640*10 == 6400, then you'll be paid only reduced price, sometimes as down as 500-900k per ton. Its been speculated that the bulk tax is 25%.
</p>

<p>
Often times high demand stations pay much less, perhaps like 900k - 1.1 million and the stations with low demand like few hundreds of low thousands then pays the crazy high prices like 1.7 million of LTD's per ton.
</p>

<p>
If you own a carrier you can park it nearby the low demand high paying station, then just do several LTD hauling trips with your ship selling only specific amount of tons to get the maximum price. Its a bit more work, but definitely worth is if you want to get the highest amount of credits.
</p>

</section>

<footer>
<p>Back to <a href="index.php">Elite Dangerous root page</a></p>
<br><br>
<p><i>PMC Elite Dangerous 2014 - <?php print(date("Y")); ?>.</i></p>
<?php include("include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
