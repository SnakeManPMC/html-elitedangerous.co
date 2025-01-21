<!DOCTYPE html>
<html lang="en">
<head>
<title>PMC Elite Dangerous - Keyboard Controls</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="PMC Elite Dangerous Keyboard Controls">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>PMC Elite Dangerous - Keyboard Controls</h1>

<p>
Keyboard controls and joystic Hands On Throttle And Stick (HOTAS) controls.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Keyboard Layouts</h2>

<p>Keyboard Layouts are saved to:<br>
Bindings are saved in %LOCALAPPDATA%\Frontier Developments\Elite Dangerous\Options\Bindings<br>
If that doesn't work try "\Products\FORC-FDEV-D-1000\ControlSchemes"<br>
</p>

<p>CTRL-ALT-SPACE - Flyable debug camera with limited range<br>
<b>Comms menu:</b><br>
/r - reply to comms directed at you<br>
/local chat to local comms<br>
/wing chat to wing comms
<br><br>
Use [TAB] to cycle through valid message recipients<br>
Use [/r] to respond to the last ship that you received comms from<br>
Use [/t] to send comms directly to targeted ship<br>
Use [/w] to send comms to all wingmen
</p>

<p>Use <b>CTRL-ALT-G</b> to enable / disable cockpit User Interface.</p>

<p>To enable mouse cursor on your cockpit HUD, use Options -> Controls -> Show Mouse Widget.</p>

<p>Screen resolutions mode settings are put on:<br>
C:\Users\USERNAME\AppData\Local\Frontier Developments\Elite Dangerous\Options\Graphics\DisplaySettings.xml<br>
However if you try to make like 50% of your 1080p fullscreen ie 960x540, it doesnt work, Elite wont recognize that resolution. You just need to choose resolution from the UI -> Graphics setup.
</p>

<p>Game now supports borderless window. Using ALT-ENTER to switch to windowed and fullscreen will stop you being in borderless window mode
</p>

<h2>Log file(s)</h2>
<p>For older Elite versions Log files could be found from:<br>
C:\Users\USERNAME\AppData\Local\Frontier_Developments\Products\FORC-FDEV-D-1001\Logs
<br><br>
However its just easier to search them at v2.0 release from edlauncher\Products\elite-dangerous-64\Logs directory.
</p>

<h2>Configuration Files</h2>

<p><b>AppConfigLocal.xml</b>
<br><br>
This file is for your <b>AppConfig.xml</b> overrides and should be edited, not the actual AppConfig.xml file because every time Frontier releases a new Elite patch/upgrade, your AppConfig.xml file gets overwritten and your edits are lost. If you use <b>AppConfigLocal.xml</b> file then your config tweaks are safe.
</p>

<p>Please access your AppConfigLocal.xml which can be found in your game directory and open this in proper text editor. You'll see a block near the bottom named "Network". Please insert the following lines somewhere in that block -
<br><br>
<code>
ReportSentLetters="1"<br>
ReportReceivedLetters="1"<br>
VerboseLogging="1"
</code>
<br><br>
This will produce a more detailed NetLog. Copy your AppConfig.xml to AppConfigLocal.xml file name, add these lines and then restart the game for these edits to take effect.
</p>

<p><b>Port Forwarding</b><br>
Find the network tag and there are stuff like:
<br><br>
<code>
Port="0"<br>
upnpenabled="1"
</code>
<br><br>
Where you need to add your own port and disable UPNP like this:
<br><br>
<code>
Port="1234"<br>
upnpenabled="0"
</code>
<br><br>
Which would use port 1234 and disable UPNP. Remember; do this on AppConfigLocal.xml file otherwise you lose this edit on next Elite patch/upgrade.
</p>

<p><b>GraphicsConfigurationOveride.xml</b>
<br><br>
Put this file in following directory:<br>
<code>
C:\Users\%username%\AppData\Local\Frontier Developments\Elite Dangerous\Options\Graphics\
</code><br>
Here you can setup custom heads up display HUD colors.
</p>

<p><b>Settings.xml</b>
<br><br>
FOV value <b>67.672745</b> is perfect for 16:9 screens. It is 100 degrees horizontal.
</p>
<p>
Field of View Settings.xml values are smallest: 54.32, middle (default?): 57.16 and largest: 60.00
</p>
<p>
Settings.xml contents cannot be put in GraphicsConfigurationOverride.xml file.
</p>

<h2>Install Directory</h2>
<p>Elite v2.0 Horizons Beta install directory. You could rename the 1001 to 1010 to skip re-installing v1.4.01 when horizon beta was about to go live.
<br><br>
Elite v2.0 Horizons installs to edlauncher\Products\elite-dangerous-64\ directory. It obviously depends where you have installed Elite Launcher in the first place. For Steam version you need to check your steam library directories for Elite dir.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("include/footer.php"); ?>
</footer>

</body>
</html>
