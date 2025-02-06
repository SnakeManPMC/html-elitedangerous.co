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
	<h2>2019-09-30 The Hunt For The Missing Data</h2>

<p>
2019-09-30T06:33:39Z New elite day has started. Honestly I'm already a bit bored, I play elite because... what else could I do (because I'm bored)? heh. Was thinking about mining to make a lot of credits in one go, or hunting missing data this time from eddb closest missing page, dunno.
</p>

<p>
I bet this day ends early with me being bored out of my mind...
</p>

<p>
2019-09-30T07:15:14Z Completed one trade loop, had ordered PMC EDDN Sender transfer to Ki/Binet Port and now its time to hunt missing data. Decided to go with EDDB closest missing page data and to hunt those with distance from star ls data missing.
</p>

<p>
2019-09-30T07:27:25Z Docked at HIP 22296/Remek Mines. But already felt stupid doing these planetary outposts which has ZERO use for traders. So decided to go hunt the real missing data for trading instead.
</p>

<pre>
python3 trade.py olddata --limit 59 --no-planet --pad-size l --ls-max 2000
Station                                   Age/days      StnLs Pad Plt
Tawega/Heinlein Station                     379.54        403 Lrg  No
HIP 86470/Merril Prospect                   379.53        266 Lrg  No
Poqomana/Cori Terminal                      371.65        358 Lrg  No
Pichi Wang/Slonczewski Dock                 348.46        288 Lrg  No
HIP 21458/Foglio Vision                     338.46      1.23K Lrg  No
HIP 19198/Comper Dock                       337.80      1.45K Lrg  No
HR 5550/Wohler Gateway                      334.77        739 Lrg  No
</pre>

<p>
2019-09-30T08:43:30Z As I said, I'm bored. It felt so boring and tedious to jump 200+ ly hops between the oldest stations, so I calculated new route with less jumps. It makes more sense like this but does catch more not-so-old stations as well, so while you see the impact of only the oldest non sorted stations list easier, its far more nicer to travel into these sorted by distance --route parameter stations. Also looks like it only returns very few with those default parameters, so kind of less work to do before needing to calculate new route.
</p>

<pre>
python3 trade.py olddata --limit 59 --no-planet --pad-size l --ls-max 2000 --min-age 200 --ly 500 --route --near HR5550
Station                                   DistLy Age/days      StnLs Pad Plt
HIP 71737/Andrews Ring                     44.03   264.07      1.19K Lrg  No
HIP 68160/Ryman Orbital                    49.23   253.23        658 Lrg  No
LP 442-37/Bryant Hub                       48.45   230.14        725 Lrg  No
16 Tau Coronae Borealis/McDaniel Terminal  74.45   296.19      1.20K Lrg  No
</pre>

<p>
2019-09-30T09:35:42Z I'm SO bored, I really don't know what to do (well I do but dont have 6000 euros haha). I'm going to travel back to base jameson memorial and if I haven't got any good ideas like better than just mining... I don't know, going to watch tv I guess...
</p>

<p>
2019-09-30T09:45:49Z Yup, nothing came to mind, shut down elite... dunno what I'll be doing now...
</p>

<div>
<a href="stories-exploration-mining-trading-2019-028.php" class="buttonnext">Next page</a>
<a href="stories-exploration-mining-trading-2019.php" class="buttonhome">Story home page</a>
<a href="stories.php" class="buttonhome">Stories index page</a>
<a href="stories-exploration-mining-trading-2019-026.php" class="buttonprevious">Previous page</a>
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
