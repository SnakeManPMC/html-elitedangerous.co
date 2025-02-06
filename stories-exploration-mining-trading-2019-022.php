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
	<h2>2019-09-28</h2>

<p>
2019-09-28T04:53:04Z back at PMC EDDN Sender cockpit, ready to continue hunting missing data for stations <img src="images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Updated TradeDangerous, got new olddata stations list from my current location, then off I go.
</p>

<pre>
python3 trade.py olddata --limit 100 --min-age 800 --ly 200 --route --near HIP44610
Station                         DistLy Age/days      StnLs Pad Plt
Daha/Asprin Hub                 198.13   868.40         72 Lrg Yes
Daha/Jun Dock                   198.13   874.24        83K Med  No
Taweret/Birmingham Horizons     194.91   869.77         31 Lrg Yes
HIP 76398/Sverdrup Dock         155.05   847.32      5.16K Med  No
HIP 79152/Mallett Installation  128.72   811.28      4.33K Lrg Yes
BD+22 2742/Khayyam Installation 142.86   844.16        19K Lrg Yes
LTT 2099/Fernandez Gateway      198.27   845.82        253 Lrg Yes
</pre>

<p>
Then I decided to go after the oldest data without any sorting or routes.
</p>

<pre>
Station                                                  Age/days      StnLs Pad Plt
Gelong/Bryusov Laboratory                                  894.58      2.16K Lrg Yes
HIP 97096/Goryu Hub                                        892.67      1.10K Lrg Yes
HIP 6182/Dalgarno Landing                                  892.38      7.33K Med  No
HIP 6182/Fowler Bastion                                    892.37      6.87K Lrg Yes
HR 8104/Taylor Orbital                                     888.59      3.90K Med  No
Baijun/Bernoulli's Inheritance                             888.38         32 Lrg Yes
HR 358/Kingsmill Holdings                                  885.35       318K Lrg Yes
San Wu Gu/VanderMeer Hub                                   883.68        104 Lrg Yes
</pre>

<p>
2019-09-28T09:29:21Z Got really tired on those long distances between those oldest stations without any routes, so calculated new route with less jumping.
</p>

<pre>
python3 trade.py olddata --limit 100 --min-age 800 --ly 200 --route --near SanWuGu
Station                           DistLy Age/days      StnLs Pad Plt
Hranyi/Kirtley Installation       191.59   866.57         82 Lrg Yes
HIP 52248/Goldstein Mine          191.52   854.33        291 Lrg Yes
HIP 35910/Artsutanov Landing       91.17   856.17      3.70K Lrg Yes
Katas/Goldreich Vision             14.50   802.96         62 Med  No
Katas/Michalitsianos Colony        14.50   803.06      2.28K Med  No
Wikini/Anderson Port               65.22   803.48      3.89K Med  No
HIP 23575/Kirk Laboratory         155.42   840.29      2.62K Lrg Yes
</pre>

<p>
2019-09-28T10:58:40Z had to take a break for lunch, one tv show episode and small PMC DevSurf chore, so decided to shut PMC Gaming down for the time being, but I'll continue just after.
</p>

<p>
2019-09-28T10:59:31Z Elite Log session systems visited (FSD jumps): 70, planets smallest: 413.115km, largest: 77305.3km, detail surface scans: 201
</p>

<p>
2019-09-28T12:55:33Z and back, lets continue the above olddata list.
</p>

<pre>
Usipek/Reber Station              180.51   800.82        611 Med  No
HIP 1536/Houten-Groeneveld Survey 177.73   807.52        16K Med  No
Kanoai/McManus Enterprise         192.48   851.80        495 Lrg Yes
</pre>

<p>
Calculated new routes for olddata.
</p>

<pre>
python3 trade.py olddata --limit 100 --min-age 800 --ly 200 --route --near Kanoai
Station                                 DistLy Age/days      StnLs Pad Plt
Capricorni Sector DB-X b1-3/Drew Colony 192.40   868.45      1.27K Lrg Yes
Zmey Goab/Wells Survey                  155.89   829.81      1.18K Lrg Yes
Zmey Goab/Gibson Laboratory             155.89   835.65      1.53K Lrg Yes
Manaku/Drexler Orbital                  142.23   858.22         49 Med  No
Thrite/Gibson Vision                    124.49   856.92        405 Lrg Yes
Thrite/Ellison Prospect                 124.49   856.88         74 Lrg Yes
Chang Hsien/Bigourdan Installation      108.86   845.17      2.14K Lrg Yes
Huai Na/Jung Platform                    15.77   852.64        377 Med  No
Huai Na/Baille Vision                    15.77   851.95        323 Med  No
Sentii/Caselberg Orbital                190.75   820.62        335 Med  No
</pre>

<p>
2019-09-28T15:30:18Z Alright I'm done visiting these small stations and planetary outposts... now I want to mine or trade... so off to jameson memorial.
</p>

<div>
<a href="stories-exploration-mining-trading-2019-023.php" class="buttonnext">Next page</a>
<a href="stories-exploration-mining-trading-2019.php" class="buttonhome">Story home page</a>
<a href="stories.php" class="buttonhome">Stories index page</a>
<a href="stories-exploration-mining-trading-2019-021.php" class="buttonprevious">Previous page</a>
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
