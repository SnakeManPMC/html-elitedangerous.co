<!DOCTYPE html>
<html>
<head>
<title>PMC Elite Dangerous - Multiple Accounts</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="PMC, Elite Dangerous, Multiple Accounts">
<META name="keywords" content="PMC, Elite Dangerous, Multiple, Accounts">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("include/google-ads.php"); ?>
<h1><b>PMC Elite Dangerous - Multiple Accounts</b></h1>
<p>Second Commander?</p>
</header>

<section>
<h2>Multiple Accounts</h2>

<ul>
<li>You do not need to install game multiple times
</li>
<li>You do need to purchase the game for every CMDR account (note about base elite and expansion seasons)
</li>
</ul>

<h2>Purchase Elite's</h2>

<p>You need to buy second (or how many you want) account from <a href="https://www.frontierstore.net/eur/games/elite-dangerous-cat.html">Frontier Store</a>.
</p>

<p>Note that it is not cheap to have multiple accounts. In October 31st 2017 the base game costs 24.99euro (but was in discount 12.50euro) and horizons season pass cost the same 24.99euro (but was in discount 16.74euro) to total of <b>49.98euro</b> (but discounted 29.24euro). In the years to come future, who knows how frontier setups their expansions so the price can and most likely will increase as different expansions are released.
</p>

<p>Oddly enough CMDR deluxe edition was discounted 28.99euro which is whopping 0.25euro cheaper and you get few "SKINZ" ;)
</p>

<p>When you purchase new elite's, aka accounts, <b>you must use different email for every account!</b> Get emails from gmail.com they are free.
</p>

<h2>Howto Use Multiple Accounts</h2>

<p>Install single one copy of elite. In the frontier\edlaunch\ directory COPY the edlaunch.exe file to different name (yes I know, sounds strange).
</p>

<p>For example "CMDR Snake Man" is the original "EDLaunch.exe", then you copy the exe to lets say "EDLaunch_CMDR_Snake2.exe" or something for "CMDR Snake2" and you use these individual lancher exe's to launch different CMDR accounts.
</p>

<p>So make shortcut to desktop and name it properly like "Elite CMDR Snake Man" and "Elite CMDR Snake2" etc.
</p>

<h2>Login Account</h2>

<p>First time you run new edlaunch exe (or the copied ones), it asks email login/password, insert them and go through the sending activation code to that email hoops, but once its done the login account stays with that launcher exe as long as you dont change it (or mess up your windows or some odd client launcher update comes).
</p>

<p>You can also skip copying edlaunch.exe and log in and log out using the single launcher, however this is cumbersome as you must type in your email and password on every CMDR account. However here is how you do it: untick remember me box, then use options -> log out, not log out machine because that requires the email verification code to be sent. Use options -> log out to switch CMDR emails.
</p>

<h2>Log Files</h2>

<p>If you dont care about log files, then you can ignore this part.
</p>

<p><b>Journal</b>
</p>

<p>Journal files are still created at the same dir, no two CMDRs are never overwritten, but if your journal reading tool is not intelligent to detect CMDR name, then you will get duplicate data from 1st and 2nd etc CMDR's.
</p>

<p><b>netLog</b>
</p>

<p>Same goes for netLog files as to journal files. You could of course 7zip backup or just move the journal and netlog directories everytime you launch different CMDR, but that is very dangerous if you forget and then they are messed up heh.
</p>

<h2>Visited Stars Cache</h2>

<p>You can run multiple commander accounts without messing up your visited stars cache file because they are located in different directories for each CMDR.
</p>

<p>Visited Stars Cache directories:
</p>

<pre>
C:\Users\YOURNAME\AppData\Local\Frontier Developments\Elite Dangerous\YOUR_CMDR_ID\
</pre>

<p>This is repeated to each CMDR login account you have.
</p>

<h2>Two Elites Running</h2>

<p>You could run <b>two elite clients at the same time</b> with this technique. Actually I'm not sure if you must install the game twice, I don't think so, but who knows. You just run the games in window, I think(?) and can swap between each of them.
</p>

<p>Although who the hell would want to run two elite clients at the same time, its difficult enough to run single one like exploration hyper space jumps, that it would be all but impossible to run two :)
</p>

<p>But hey, its nice to know technically it can be done.
</p>

<p>Some info at <a href="https://forums.frontier.co.uk/showthread.php/386995-Elite-Dangerous-Multiple-accounts-on-the-same-Windows-user-account">Frontier Forums topic</a>.
</p>

</section>

<footer>
<p>Back to <a href="index.php">Elite Dangerous root page</a></p>
<br><br>
<p><i>PMC Elite Dangerous 2014 - <?php print(date("Y"));?>.</i></p>
<?php include("include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
