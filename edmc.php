<!DOCTYPE html>
<html>
<head>
<title>PMC Elite Dangerous - Market Connector (EDMC)</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="PMC, Elite Dangerous, Market Connector, EDMC">
<META name="keywords" content="PMC, Elite Dangerous, Market Connector, EDMC">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("include/google-ads.php"); ?>
<h1><b>PMC Elite Dangerous, Market Connector (EDMC)</b></h1>
<p>By Otis B.</p>
</header>

<section>
<h2>Elite Dangerous Market Connector</h2>
<p>Uses Frontier Developments official iOS API (aka <a href="community-api.php">Community API</a>) to connect and download commodity market prices, shipyard ship sales and outfitting modules information. It then sends this data automatically to <a href="eddn.php">EDDN</a> with single click of a button, or a keyboard hotkey or even automatically if so configured in settings.
</p>

<p>It also updated <a href="edsm.php">EDSM</a> for your flight logs etc.
</p>

<p>Early days of Elite we had to use manual pencil and paper, then we got the OCR solutions which were somewhat cumbersome and poor, but now finally we have EDMC which uses the API, makes no mistakes and is automatic (you only have to click a button).
</p>

<p>
When you returned from a long exploration journey with thousands of system scans and you have used the option to delay sending scan data to EDDN until docked, EDMC will start to send that data once you dock. Having thousands of scans cause EDMC to send that data for a quite while as it sends it slowly not to flood EDDN.
</p>

<p>
When sending scan data and you close EDMC no data gets lost as next time when you start EDMC and have elite running, the sending of scan data continues. Note that if you just have EDMC running alone it will not send scan data, you must start elite and be docked for EDMC to send data.
</p>

<p><a href="https://github.com/Marginal/EDMarketConnector">EDMC Homepage</a> in github
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
