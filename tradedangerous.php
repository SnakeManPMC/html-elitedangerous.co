<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>PMC Elite Dangerous - TradeDangerous</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="PMC, Elite, Dangerous, TradeDangerous">
<META name="keywords" content="PMC, Elite, Dangerous, TradeDangerous">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<!--
google analytics here
-->

</head>
<body>

<!--
google ads here
paypal here
-->

<center>
<h1><b>PMC Elite Dangerous - TradeDangerous</b></h1>

<table width="1024" align="center" class="text">
<tr>
<td>

<h1>TradeDangerous</h1>

<h2>Usage</h2>
<p>python3 trade.py import --plug=maddavo --opt=syscsv --opt=stncsv -v<br>
python3 trade.py run --cr 10000000 --cap 532 --ly 12.02 -vvv --pad l --ls-max 1500 --avoid alioth<br>
python3 trade.py import import.prices<br>
python3 trade.py update -T --editor=nano<br>
python3 trade.py station --add sys/stat --ls 0 --bm y --pad l<br>
python3 trade.py station --update sys/stat --ls 0 --bm y --pad l<br>
python3 trade.py run --cr 10000000 --cap 532 --ly 12.02 -vvv --pad l --fr ltt377 --via g26847/arch --to ltt377 --hops 3<br>
python3 trade.py local --ly 27 -v aulin|more<br>
--pad-size sml?<br>
Small, Medium, Large and ? is unknown (doh). So for type-9's do "--pad l"<br>
python3 trade.py run --from sol --start-jumps 3 --hops 2<br>
python3 trade.py run --from sol -s3 --hops 2<br>
--routes 10<br>
Added a "--ls-max" option to "run" so you can set a hard limit on how far you'll fly.<br>
This lets you say "I want to go from somewhere within a couple of jumps of sol to somewhere in the vicinity of lave":<br>
trade.py run ... --from sol --start-jumps 2 --end-jumps 5 ...<br>
or<br>
trade.py run ... --from sol --start 2 --end 5 ...<br>
or<br>
trade.py run ... --from sol -s 2 -e 5 ...<br>
or fly to somewhere near Anlave that has a black market:<br>
trade.py run .. --to anlave --end-jumps 4 --black-market<br>
trade.py run .. --to anlave -e 4 -bm<br>
python3 trade.py station --add --system &lt;system_name&gt;/&lt;station_name&gt; --ls-from-star 0 --bm ? --pad-size m<br>
python3 trade.py station --add --system Lansbury --ls-from-star 0 --bm ? --pad-size l Landis Settlement<br>
python3 trade.py station --add --system Lansbury --ls-from-star 0 --bm ? --pad-size l Thomson Orbital<br>
python3 trade.py station --add --system Lansbury --ls-from-star 0 --bm ? --pad-size m Henson Laboratory<br>
<br>
$ trade.py station --add "guiwande/aikin horizons"<br>
or if you know the ls-from star, the pad size and whether the station has a black market:<br>
$ trade.py station --add "guiwande/aikin horizons" --ls=3948 --pad=l --bm=y<br>
<br>
"does it only update it to the SQL .db file like it says, or to Station.csv as well?"<br>
Only in the local station, you'll need to do a "trade.py export --table Station" when you're done. Or ... add a blank line at the end of the file and then the following code (which is not indented, no spaces or tabs infront of it):<br>
<br>
import csvexport<br>
csvexport.exportTableToFile(tdb, tdb.tdenv, "Station")<br>
print("Rebuilt Station.csv")<br>
<br>
data is merged into the master Station.csv file automatically. So we all add info to our Station.csv files, upload them, and then get a new master file. It usually takes 2 minutes to merge data into the database and generate a new set of master files available for download.<br>
<br>
If a station needs to be deleted, this can be achieved by setting the distance to -1 in the Station.csv when it is uploaded. That will delete the station from the database and flag it as deleted so that anyone else sending the station again will NOT recreate the station.<br>
<br>
Yep, literally. TD barfs with a -1 distance. Set to -1 to delete. Upload. Wait. Download/import. Continue. I tend to do deletes at the end of a session so I don't have to wait.<br>
<br>
python3 trade.py run --cr 2556705 --cap 532 --ly 12.02 -vvv --pad l --avoid alioth --fr BD024304/Durrance --insurance 3611881<br>
<br>
python3 trade.py run --cr 2934671 --cap 532 --ly 12.02 -vvv --pad l --avoid alioth --fr BD024304/Durrance<br>
<br>
python3 trade.py run --cr 594348 --cap 532 --ly 12.02 -vvv --pad l --avoid alioth --fr BD024304/Bean --insurance 3611881<br>
<br>
python3 trade.py run --cr 5322580 --cap 532 --ly 12.02 -vvv --pad l --avoid alioth --fr SUESSETANI/Gutierre --insurance 3611881 --to BD024304/Durrance --hops 1<br>
<br>
python3 trade.py run --cr 9267358 --cap 532 --ly 12.02 -vvv --pad l --avoid alioth --fr SUESSETANI/Gutierre<br>
<br>
python3 trade.py run --cr 5322580 --cap 532 --ly 12.02 -vvv --pad l --ls-max 1500 --avoid alioth --fr SUESSETANI/Gutierre --insurance 3611881 --to BD024304/Durrance --hops 1<br>
<br>
python3 trade.py run --cr 2837250 --cap 532 --ly 12.02 -vvv --pad l --avoid alioth --fr LOUGUALA/Mcmullen --to BD024304 --hops 1<br>
<br>
python3 trade.py run --cr 2934671 --cap 532 --ly 12.02 -vvv --pad l --avoid alioth --fr BD024304/Durrance --hops 12
<br><br>
</p>

<h2>Uploading</h2>
<p>Maddavo's site
<br><br>
You can upload a big Station.csv from your TD data directory, OR a small &lt;any-name&gt;.csv - it doesn't matter. All that is REQUIRED is the first line that has the Station.csv schema. That's how it knows it is a Station.csv-format file.
<br><br>
<b>Merging Data</b><br>
Any new stations are added IF the System exists in our System.csv. In theory, we have been given a list of all the systems that have stations, this weeds out typos.<br>
Any existing stations are updated if the ls_from_star, blackmarket or max_pad_size change from default values.
If ls_from_star is within 10Ls or 1% then it is ignored.<br>
Any other conflicting data is NOT merged into the database - it is flagged for checking. I am writing a crowdsourcing 'fix stations' page where cmdrs can help check stations and choose which data is correct.
<br><br>
Station Distance - ls_from_star values. Some points about station distance:
<br><br>
The ls_from_star value changes. The game is real-time and orbiting objects in a system move. Although they move slowly, they DO move. If you have a station orbiting a planet then the ls_from_star will oscillate around an average value (the planet's orbital distance). If you have a station orbiting a moon orbiting a planet, then the ls_from_star will oscillate around the moon's oscillation around an average value (also the planet's orbital distance). Things get even more complicated when binary or n-ary planets or stars are involved.
<br>
It IS very possible to have stations in a system with the same ls_from_star values. If they are orbiting the same body, then their average ls_from_star will be the same. But also if they are orbiting a moon or planet that is orbiting another body (eg: <star> B, C or D) then their average ls_from_star will also be the same. eg: in SOL: Abraham Lincoln, M.Gorbechev, Li Qing Jao all orbit Earth so they have the same ls_from_star value. Earth's orbit is 1AU so their ls_from_value is 499 (or close to it). Galileo orbits the moon, the moon orbits earth, so Galileo's ls_from_star value is also 499. In our Station.csv the values are 505-506, fair enough.
<br>
The System View can be used to get the distance in many cases. eg: If there is a station orbiting a planet orbiting an A star then select the planet and look at the orbit semi-major axis value. The elliptical orbit is generally close to a circle and this can be used. The value is in AU (Astronomical Units). 1 AU = 499Ls . So multiply this value by 499 and you have the ls_from_star. If there are binary (or n-ary) stars in the system and the station is orbiting B or above, then you can't use the System View. You have to know the distance of the n star from the A star which isn't shown in the System View - you have to visit the system. So once you visit the system, you may as well just get the distance of the station from the nav panel.
<br>
The System View cannot be used if the station is part of the orbital hierarchy of a binary or n-ary planet or part of the orbital heirarchy of a binary or n-ary star B or higher. This is because the reported semi-major axis value is for the orbit of the partner body - it does not show the orbit of the collective COG to the parent body (frustrating).
<br>
When you jump into a system, you jump in at the A star. This is the one with the Nav Beacon. But you jump in near it, not in the centre of it. So if you jump in and 'stop' (still going 30m/s) and look at the nav panel then potentially you could be on the near side or the far side of the star from the station you're looking at. This introduces another oscillation into the ls_from_star value if you measure it with the nav panel in this way.
<br>
Some people land at the station, then look at the nav panel and choose the distance to the Nav Beacon. It's probably better to choose the A star.
<br><br>
So basically if we all measure a station's ls_from_star value by various means and we're within about 10Ls or 1% of each other then I think that's good enough. It's certainly good enough for the purposes for which we use it in TD.
<br><br>
</p>

</tr>
</table>
</center>

<table width="1024" align="center" class="text">
<tr>
<td>

<p>Back to <a href="index.php">Elite Dangerous root page</a></p>

<p><i>PMC Elite Dangerous 2014 - <?print(date("Y"));?>.</i></p>
</tr>
</table>

<center>
<p>
  <a href="http://validator.w3.org/check?uri=referer"><img
      src="http://www.w3.org/Icons/valid-html401"
      alt="Valid HTML 4.01 Transitional" height="31" width="88"></a>

    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!">
    </a>
</p>
</center>

</body>
</html>
