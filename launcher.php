<!DOCTYPE html>
<html lang="en">
<head>
<title>PMC Elite Dangerous Game Launcher</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="PMC Elite Dangerous Game Launcher">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>PMC Elite Dangerous Game Launcher</h1>

<p>
Launcher program, HOWTO install and upgrade Elite Dangerous game.
</p>

<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Launcher</h2>

<p>
Download official <a href="https://hosting.zaonce.net/elite/Client-Installer.exe" target="_blank">Client-Installer.exe</a> from frontiers homepage.
</p>

<p>
When you start the launcher it will ask to upgrade itself if newer version is found. Click Yes and it open browser pointing into hosting.zaonce.net/elite/Client-Installer.exe link. Download and install this "Client-Installer.exe" to proceed.
</p>

<p>
When setup asks install directory, it should offer the existing one you currently have. <b>Use this</b>, so you don't lose your existing log and other config files by selecting new / wrong directory.
</p>

<p>
When setup is done, start the launcher.
</p>

<p>
You most likely have to type in your elite dangerous login info now. Click Log-in button and type username/password. Wait for email you get from frontier and type in verification code from it.
</p>

<h2>Upgrade</h2>

<p>
If you have elite upgrades available, just click the Upgrade button and wait patiently.
</p>

<p>
Depending on the popularity of elite upgrade release (are there other than super popular? haha) it might take a while to download and upgrade.
</p>

<p>
When its done, Play button appears.
</p>

<p>
Launcher offers different game version options to install, assuming you have access to these. Public or so called live version and possible beta if currently available.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("include/footer.php"); ?>
</footer>

</body>
</html>
