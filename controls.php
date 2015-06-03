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
C:\Users\USERNAME\AppData\Local\Frontier Developments\Elite Dangerous\Options\Bindings<br>
If that doesn't work try "\Products\FORC-FDEV-D-1000\ControlSchemes"</p>

<p>CTRL-ALT-SPACE - Flyable debug camera with limited range<br>
<b>Comms menu:</b><br>
/r - reply to comms directed at you<br>
/local chat to local comms<br>
/wing chat to wing comms<br><br>

Use [TAB] to cycle through valid message recipients<br>
Use [/r] to respond to the last ship that you received comms from<br>
Use [/t] to send comms directly to targeted ship<br>
Use [/w] to send comms to all wingmen
</p>

<p>Use <b>CTRL-ALT-G</b> to enable / disable cockpit User Interface.</p>

<p>To enable mouse cursor on your cockpit HUD, use Options -> Controls -> Show Mouse Widget.</p>

<p>
Screen resolutions mode settings are put on:<br>
C:\Users\USERNAME\AppData\Local\Frontier Developments\Elite Dangerous\Options\Graphics\DisplaySettings.xml<br>
However if you try to make like 50% of your 1080p fullscreen ie 960x540, it doesnt work, Elite wont recognize that resolution. You just need to choose resolution from the UI -> Graphics setup.
</p>

<p>Log file(s):<br>
C:\Users\USERNAME\AppData\Local\Frontier_Developments\Products\FORC-FDEV-D-1001\Logs
</p>

<p>Please access your AppConfig.xml which can be found in your game directory and open this in Notepad. You'll see a block near the bottom named "Network". Please insert the following lines somewhere in that block -
<br><br>
<code>
ReportSentLetters="1"<br>
ReportReceivedLetters="1"<br>
VerboseLogging="1"
</code>
<br><br>
This will produce a more detailed NetLog for us. If you could, please save your AppConfig file with these lines and then load the game again.
<br><br>
Game now supports borderless window. Using ALT-Enter to switch to windowed and fullscreen will stop you being in borderless window mode</p>
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
