<!DOCTYPE html>
<html>
<head>
<title>PMC Elite Dangerous - TradeDangerous</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="PMC, Elite, Dangerous, TradeDangerous">
<META name="keywords" content="PMC, Elite, Dangerous, TradeDangerous">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("include/google-ads.php"); ?>
<h1><b>PMC Elite Dangerous - TradeDangerous</b></h1>
</header>

<section>
	<h2>Overview</h2>

<p>TradeDangerous (TD) by Kfsone is the greatest trading tool for Elite Dangerous simply because it has the ability to <b>return the BEST trading profit collected from ALL stations!</b> which no other tool does (others ask you from which system you want to search best profits or they pre-calculate the stations etc).
</p>

<p>Are you tired of wondering where the best REALLY the best profits are? Well TD has the answer for you.
</p>

<p>TD also gives you the ability to search for very large loops, for example we have tested it several times with <b>120 hop loop</b> and it works great.
</p>

<p>TD requires Python v3.4 to work (doesn't work with older python versions). There is no windows program single executable to run.
</p>

	<h2>Download</h2>

<p>
Grab the git repository or ZIP from <a href="https://github.com/eyeonus/Trade-Dangerous">eyeonus TD github</a>.
</p>


	<h2>Update Database</h2>

<p>
Update database from EDDN through EDDB through <a href="http://elite.ripz.org/">Tromador's Trading Dangerously (elite.ripz.org)</a> by using eddblink plugin. elite.ripz.org database (Live Prices listings-live.csv) seems to be updating every 5 minutes.
</p>

<pre>
python3 trade.py import --plug=eddblink
</pre>

	<h2>Usage</h2>

<p>
<b>2018-11-15</b> updated.
</p>

<p>
Best profit in the whole galaxy, give it to me now, I need to make some CREDITS! :-)
</p>

<pre>
python3 trade.py run --cr 1000000 --cap 6 --ly 8.6 -vvv --ls-max 2000 --avoid alioth
</pre>

<p>
Howto use common parameters text file. What I do is make text files for each of my ships, for example pmc-sidewinder.txt and pmc-type6.txt etc. In these files I write stuff like below example of my pmc-type6.txt:
</p>

<pre>
--cap
104
--empty
29.94
--ly
19.47
--age
2
-vvv
--prog
--ls-max
1000
--avoid
alioth,minmar/acropolis
--insurance
145643
--gpt
1200
</pre>
<p>
As you can see its simply parameter first and the value second, very easy to setup and this saves time typing and the length of your command line. Then you run TD and use plus sign as the parameter for this text file, as seen here:
</p>

<pre>
python3 trade.py run +pmc-type6.txt --cr 1000000
</pre>

<p>
You have commodity you need to sell, where to sell it?
</p>

<pre>
python3 trade.py sell basicmedicines --near Morana --ly 40 --price-sort --gt 4000

Station                             Cost DistLy Age/days      StnLs B/mkt Pad Plt
---------------------------------------------------------------------------------
Ngaiawang/Dornier Terminal         9,872  39.17    65.57      1.04K    No Lrg  No
Seharis/Luu Works                  5,107  30.91    12.50        12K   Yes Med  No
Brib/Dominique Holdings            4,911  11.07    47.92        266   Yes Lrg  No
</pre>

<p>
Define allowed jumps between hops.
</p>

<pre>
python3 trade.py run +pmc-type6.txt --cr 1000000 --jumps 3 --fr Rauraci/Cyrrhus
</pre>

<p>
Define how many hops you want.
</p>

<pre>
python3 trade.py run +pmc-type6.txt --cr 1000000 --hops 3 --fr Rauraci/Cyrrhus
</pre>

<p>
--gpt VALUE parameter sets the Gain Per Ton value.
</p>

<p>
Bunch of command lines from 2018-11-13 when I cleared save on my second account and started trading from scratch. Yes sidewinder and 1000cr hehe.
</p>

<pre>
python3 trade.py run --cr 31139 --cap 6 --ly 8.6 -vvv --pad ? --ls-max 2000 --avoid alioth
python3 trade.py run --cr 31139 --cap 6 --ly 8.6 -vvv --ls-max 2000 --avoid alioth --fr dahan/dahangateway
python3 trade.py run --cr 94968 --cap 6 --ly 8.6 -vvv --ls-max 2000 --avoid alioth --fr Opala/RomanenkoEstate
python3 trade.py run --cr 94968 --cap 6 --ly 8.6 -vvv --ls-max 2000 --avoid alioth --fr aulin/simmons
python3 trade.py run +pmc-sidewinder.txt --age 30 --cr 159198 --fr opala/onizuka
python3 trade.py run +pmc-adder.txt --age 30 --cr 172975 --fr opala/onizuka
python3 trade.py run +pmc-adder.txt --age 30 --cr 367573 --fr Opala/Romanenko
python3 trade.py run +pmc-cobra.txt --age 30 --cr 97443 --fr lhs446/ryaza
python3 trade.py run +pmc-cobra.txt --age 30 --cr 886427 --fr duamta/hurston
python3 trade.py run +pmc-cobra.txt --age 30 --cr 886427 --fr duamta/hurston --to wolf359/trygg
python3 trade.py run +pmc-cobra.txt --age 30 --cr 886427 --fr wolf359/trygg
python3 trade.py run +pmc-type6.txt --age 30 --cr 1394346 --fr wise08550714/yamazaki
python3 trade.py run +pmc-type6.txt --age 30 --cr 1394346 --fr epsilonindi/krylov
python3 trade.py run +pmc-type6.txt --age 30 --cr 2484399 --fr epsilonindi/nikitin
python3 trade.py run +pmc-type6.txt --cr 2646274 --fr ehecatl/michelson
python3 trade.py run +pmc-type6.txt --cr 1927561 --fr zearla/payson
python3 trade.py run +pmc-type6.txt --cr 2.683m --fr hirapa/butler
python3 trade.py run +pmc-type6.txt --gpt 1200 --cr 3.193m --fr GaulaWu/FriedmanWorks
python3 trade.py run +pmc-type6.txt --gpt 1200 --cr 3.193m --fr Azrael/GuthDock
python3 trade.py run +pmc-type6.txt --gpt 1200 --cr 3.246m --fr Carthage/CookDepot
python3 trade.py run +pmc-type6.txt --gpt 1200 --cr 4.792m --fr Xuanduna/Furukawa
</pre>

<p>
Find stations that have markets around defined system and range of light years.
</p>

<pre>
python3 trade.py local "Barnard's Star" --ly 10 -vv --stations --trading
</pre>

<p>
Some older notes, these are couple of years old at 2018-11-15.
</p>

<pre>
python3 trade.py import --plug=maddavo --opt=syscsv --opt=stncsv -v
python3 trade.py run --cr 10000000 --cap 532 --ly 12.02 -vvv --pad l --ls-max 1500 --avoid alioth
python3 trade.py import import.prices
python3 trade.py update -T --editor=nano
python3 trade.py station --add sys/stat --ls 0 --bm y --pad l
python3 trade.py station --update sys/stat --ls 0 --bm y --pad l
python3 trade.py run --cr 10000000 --cap 532 --ly 12.02 -vvv --pad l --fr ltt377 --via g26847/arch --to ltt377 --hops 3
python3 trade.py local --ly 27 -v aulin|more
</pre>

<p>
Landing --pad-size sml?. Small, Medium, Large and ? is unknown (doh). So for type-9's do "--pad l"
</p>

<pre>
python3 trade.py run --from sol --start-jumps 3 --hops 2
python3 trade.py run --from sol -s3 --hops 2
</pre>

<p>
--routes 10. Added a "--ls-max" option to "run" so you can set a hard limit on how far you'll fly. This lets you say "I want to go from somewhere within a couple of jumps of sol to somewhere in the vicinity of lave":
</p>

<pre>
trade.py run ... --from sol --start-jumps 2 --end-jumps 5 ...
or
trade.py run ... --from sol --start 2 --end 5 ...
or
trade.py run ... --from sol -s 2 -e 5 ...
or fly to somewhere near Anlave that has a black market:
trade.py run .. --to anlave --end-jumps 4 --black-market
trade.py run .. --to anlave -e 4 -bm
python3 trade.py station --add --system &lt;system_name&gt;/&lt;station_name&gt; --ls-from-star 0 --bm ? --pad-size m
python3 trade.py station --add --system Lansbury --ls-from-star 0 --bm ? --pad-size l Landis Settlement
python3 trade.py station --add --system Lansbury --ls-from-star 0 --bm ? --pad-size l Thomson Orbital
python3 trade.py station --add --system Lansbury --ls-from-star 0 --bm ? --pad-size m Henson Laboratory
$ trade.py station --add "guiwande/aikin horizons"
or if you know the ls-from star, the pad size and whether the station has a black market:
$ trade.py station --add "guiwande/aikin horizons" --ls=3948 --pad=l --bm=y
</pre>

<p>
"does it only update it to the SQL .db file like it says, or to Station.csv as well?", only in the local station, you'll need to do a "trade.py export --table Station" when you're done. Or ... add a blank line at the end of the file and then the following code (which is not indented, no spaces or tabs infront of it):
<br><br>
import csvexport<br>
csvexport.exportTableToFile(tdb, tdb.tdenv, "Station")<br>
print("Rebuilt Station.csv")
</p>

<p>
Data is merged into the master Station.csv file automatically. So we all add info to our Station.csv files, upload them, and then get a new master file. It usually takes 2 minutes to merge data into the database and generate a new set of master files available for download.
</p>

<p>
If a station needs to be deleted, this can be achieved by setting the distance to -1 in the Station.csv when it is uploaded. That will delete the station from the database and flag it as deleted so that anyone else sending the station again will NOT recreate the station.
</p>

<p>
Yep, literally. TD barfs with a -1 distance. Set to -1 to delete. Upload. Wait. Download/import. Continue. I tend to do deletes at the end of a session so I don't have to wait.
</p>

<pre>
python3 trade.py run --cr 2556705 --cap 532 --ly 12.02 -vvv --pad l --avoid alioth --fr BD024304/Durrance --insurance 3611881
python3 trade.py run --cr 2934671 --cap 532 --ly 12.02 -vvv --pad l --avoid alioth --fr BD024304/Durrance
python3 trade.py run --cr 594348 --cap 532 --ly 12.02 -vvv --pad l --avoid alioth --fr BD024304/Bean --insurance 3611881
python3 trade.py run --cr 5322580 --cap 532 --ly 12.02 -vvv --pad l --avoid alioth --fr SUESSETANI/Gutierre --insurance 3611881 --to BD024304/Durrance --hops 1
python3 trade.py run --cr 9267358 --cap 532 --ly 12.02 -vvv --pad l --avoid alioth --fr SUESSETANI/Gutierre
python3 trade.py run --cr 5322580 --cap 532 --ly 12.02 -vvv --pad l --ls-max 1500 --avoid alioth --fr SUESSETANI/Gutierre --insurance 3611881 --to BD024304/Durrance --hops 1
python3 trade.py run --cr 2837250 --cap 532 --ly 12.02 -vvv --pad l --avoid alioth --fr LOUGUALA/Mcmullen --to BD024304 --hops 1
python3 trade.py run --cr 2934671 --cap 532 --ly 12.02 -vvv --pad l --avoid alioth --fr BD024304/Durrance --hops 12
</pre>

<p>
trade.py uses requests module for CSV downloads but older method for .prices files.
</p>

<p>
Script to leech data from MMS and rename system/station csv files:
</p>
<pre>
cd tradedangerous/data
rm System.csv
wget http://www.davek.com.au/td/System.csv
wget http://www.davek.com.au/td/station.asp
rm Station.csv
mv station.asp Station.csv
cd ..
python3.4 trade.py import --plug=maddavo -O usefull
</pre>

<pre>
trade.py import --plug=maddavo -O csvs
trade.py import --plug=maddavo -O csvs,csvonly
trade.py import --plug=maddavo -O usefull
trade.py import --plug=maddavo -O use2d
trade.py import --plug=maddavo -O use3h
</pre>

<p>
- Added "--stock" option to set minimum stock level required. CAVEAT: It will ignore any stations that have "?" as their listed quantity.
</p>

<pre>
trade.py local Ross209 --ly 20 --stations -vv
trade.py local Ross209 --ly 20 --stations -vv --pad ?
</pre>


	<h2>Uploading</h2>

<p>
<b>2018-11-15</b> Update, use <a href="edmc.php">EDMC</a> or other EDDN sender tools, your data will be included in TD by using the import feature (eddblink).
</p>

<p>
<b>Maddavo's Market Share</b> 2018-11-15 outdated/dead site.
<br><br>
You can upload a big Station.csv from your TD data directory, OR a small &lt;any-name&gt;.csv - it doesn't matter. All that is REQUIRED is the first line that has the Station.csv schema. That's how it knows it is a Station.csv-format file.
</p>

<p>
<b>Merging Data</b><br>
Any new stations are added IF the System exists in our System.csv. In theory, we have been given a list of all the systems that have stations, this weeds out typos.
</p>

<p>
Any existing stations are updated if the ls_from_star, blackmarket or max_pad_size change from default values. If ls_from_star is within 10Ls or 1% then it is ignored.
</p>

<p>
Any other conflicting data is NOT merged into the database - it is flagged for checking. I am writing a crowdsourcing 'fix stations' page where cmdrs can help check stations and choose which data is correct.
</p>

<p>
Station Distance - ls_from_star values. Some points about station distance:
</p>

<p>
The ls_from_star value changes. The game is real-time and orbiting objects in a system move. Although they move slowly, they DO move. If you have a station orbiting a planet then the ls_from_star will oscillate around an average value (the planet's orbital distance). If you have a station orbiting a moon orbiting a planet, then the ls_from_star will oscillate around the moon's oscillation around an average value (also the planet's orbital distance). Things get even more complicated when binary or n-ary planets or stars are involved.
</p>

<p>
It IS very possible to have stations in a system with the same ls_from_star values. If they are orbiting the same body, then their average ls_from_star will be the same. But also if they are orbiting a moon or planet that is orbiting another body (eg: &lt;star&gt; B, C or D) then their average ls_from_star will also be the same. eg: in SOL: Abraham Lincoln, M.Gorbechev, Li Qing Jao all orbit Earth so they have the same ls_from_star value. Earth's orbit is 1AU so their ls_from_value is 499 (or close to it). Galileo orbits the moon, the moon orbits earth, so Galileo's ls_from_star value is also 499. In our Station.csv the values are 505-506, fair enough.
</p>

<p>
The System View can be used to get the distance in many cases. eg: If there is a station orbiting a planet orbiting an A star then select the planet and look at the orbit semi-major axis value. The elliptical orbit is generally close to a circle and this can be used. The value is in AU (Astronomical Units). 1 AU = 499Ls . So multiply this value by 499 and you have the ls_from_star. If there are binary (or n-ary) stars in the system and the station is orbiting B or above, then you can't use the System View. You have to know the distance of the n star from the A star which isn't shown in the System View - you have to visit the system. So once you visit the system, you may as well just get the distance of the station from the nav panel.
</p>

<p>
The System View cannot be used if the station is part of the orbital hierarchy of a binary or n-ary planet or part of the orbital heirarchy of a binary or n-ary star B or higher. This is because the reported semi-major axis value is for the orbit of the partner body - it does not show the orbit of the collective COG to the parent body (frustrating).
</p>

<p>
When you jump into a system, you jump in at the A star. This is the one with the Nav Beacon. But you jump in near it, not in the centre of it. So if you jump in and 'stop' (still going 30m/s) and look at the nav panel then potentially you could be on the near side or the far side of the star from the station you're looking at. This introduces another oscillation into the ls_from_star value if you measure it with the nav panel in this way.
</p>

<p>
Some people land at the station, then look at the nav panel and choose the distance to the Nav Beacon. It's probably better to choose the A star.
</p>

<p>
So basically if we all measure a station's ls_from_star value by various means and we're within about 10Ls or 1% of each other then I think that's good enough. It's certainly good enough for the purposes for which we use it in TD.
</p>


	<h2>April 2015 Notes</h2>

<p>
--loop-int<br>
--shorten
</p>

<p>
I've just landed 1.8.2 which adds "--loop-int", this lets you specify that you don't want to go back to the same station in less than X hops, e.g.
</p>

<pre>
trade.py run synteini/lager --pad L --hops 6 --sum --ls-max 4000 --stock 10000 --ly=42 -li=2
</pre>

<p>
will find routes that requires at least 2 hops between returns to a given station
</p>

<p>
A-&gt;B-&gt;A-&gt;B &lt;- not allowed<br>
A-&gt;B-&gt;C-&gt;A &lt;- allowed
</p>

<p>
--shorten requires "--to"; it does the same thing that "--to" does, but it will allow routes that reach the destination in less than --hops jumps to be considered and at the end of the route calculations it will compare routes based on their average Gain Per Ton (gpt).
</p>

<p>
This will get stuck on loops if there's a really good loop between you and your destination (I just had this happen on the way to Shinrarta, someone had input a really bad price for Gold that produced >3000cr/ton profits, I shoulda used --max-gpt, duh).
</p>

<p>
Another useful thing to do - occasionally - "--limit". If you've got 500 cargo capacity, try using "--limit 450" sometimes and let TD suggest some extra stuff to help you stir up sales a bit.
</p>

<p>
Why some stations have some old prices? (obsolete in 2017 when we have EDMC/EDDN etc tools).
</p>

<p>
It comes down to this: The OCR tools provide incomplete data, so we had to break the import model to support them. Along with people who contribute by submitting individual line-item updates, the data set as a whole acquires certain properties. The data we have for most stations is "gossip", we have a particular snapshot value from a point in time and no way to tell what the lack of updates means.
</p>

<p>
This results in spreads of prices at stations, and TD's still a little inconsistent about how it represents this. In particular, sometimes a station will wind up with a single line item that's ancient because the only people who have visited the station in a while are using an OCR tool, and the OCR tools don't know whether the item is gone or you didn't take a screenshot of them, so the OCR tools only send updates, not deletes...
</p>

<p>
The station then gets a bad rep for having "old" data, and people avoid it, missing out on great prices.
</p>

<p>
Rebuild database?
</p>

<pre>
trade.py build -f
</pre>


	<h2>History</h2>

<p>
<b>2014-08-14</b>: Kfsone created <a href="https://forums.frontier.co.uk/showthread.php/34986-TradeDangerous-power-user-trade-optimizer">FDEV forum TradeDangerous-power-user-trade-optimizer topic</a>. TD was one of the first trading tools back in the day when there was no journal, community api, eddb, edmc, edsm etc etc. Original links: <a href="https://bitbucket.org/kfsone/tradedangerous">bitbucket.org/kfsone/tradedangerous</a>.
</p>

<p>
Data was downloaded from Maddavo's Market Share (MMS) web site which had <a href="eddn.php">EDDN listener.</a>.
</p>

<p>
<b>2017-12-11</b>: MMS is unfortunately not working, the EDDN listener haven't been working in a long time.
</p>

<p>
It seems to work for a while then breaks, then its down until maddavo perhaps months later fixes it, then the same loop starts all over again. We cannot unfortunately rely on MMS stability and therefore to TD which is truly a shame. Maddavo last post on FDEV forums was on 2017-11-20 (at the time of updating this page, obviously).
</p>

<p>
<b>2018-04-22</b>: CMDR eyeonus <a href="https://forums.frontier.co.uk/showthread.php/34986-TradeDangerous-power-user-trade-optimizer?p=6641627&viewfull=1#post6641627">posted on TD topic</a> about making new EDDB API file reading plugin, database and EDDN listener for TD because MMS is broken. <a href="https://github.com/eyeonus/EDDBlink">GitHub EDDB Link</a> and <a href="https://github.com/eyeonus/EDDBlink-listener">EDDB Link Listener</a>. Summary <a href="https://forums.frontier.co.uk/showthread.php/34986-TradeDangerous-power-user-trade-optimizer?p=6779500&viewfull=1#post6779500">how to run EDDB Link</a>.
</p>

<p>
<b>2018-06-16</b>: new <a href="https://github.com/eyeonus/Trade-Dangerous">eyeonus GitHub Trade Dangerous repository</a> and created <a href="https://forums.frontier.co.uk/showthread.php/441509-Trade-Dangerous-(Est-2015)-Power-user-s-highly-configurable-trade-optimizer">FDEV forum Trade-Dangerous-(Est-2015)-Power-user-s-highly-configurable-trade-optimizer topic</a>.
</p>

<!--
	<h2></h2>

<p>
</p>

<pre>
</pre>
-->

</section>

<footer>
<p>Back to <a href="index.php">Elite Dangerous root page</a></p>
<br><br>
<p><i>PMC Elite Dangerous 2014 - <?php print(date("Y")); ?>.</i></p>
<?php include("include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
