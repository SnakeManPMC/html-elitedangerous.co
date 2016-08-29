<!DOCTYPE html>
<html>
<head>
<title>PMC Elite Dangerous - Controls</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="PMC, Elite, Dangerous, Controls">
<META name="keywords" content="PMC, Elite, Dangerous, Controls">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("../include/google-ads.php"); ?>
<?php include("../include/paypal.php"); ?>
<h1><b>PMC Elite Dangerous - Controls</b></h1>
</header>

<section>
<h2>Info about Controls like Keyboard of Joystick HOTAS etc.</h2>

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
This file is for your AppConfig.xml overrides and should be edited, not the actual AppConfig.xml file.
</p>

<p>Please access your AppConfig.xml which can be found in your game directory and open this in proper text editor. You'll see a block near the bottom named "Network". Please insert the following lines somewhere in that block -
<br><br>
<code>
ReportSentLetters="1"<br>
ReportReceivedLetters="1"<br>
VerboseLogging="1"
</code>
<br><br>
This will produce a more detailed NetLog. Copy your AppConfig.xml to AppConfigLocal.xml file name, add these lines and then restart the game for these edits to take effect.
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

</section>

<footer>
<p>Back to <a href="index.php">Elite Dangerous root page</a></p>
<?php include("../include/paypal.php"); ?>
<br><br>
<p><i>PMC Elite Dangerous 2014 - <?print(date("Y"));?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
