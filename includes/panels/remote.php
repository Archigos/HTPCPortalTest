<?php
/* Required Files: Start */
require '../required/defaults.php';
require '../required/header.php';
/* Required Files: End */

/* Grab Personalized Settings: Start */
$ini_ini_filename = '../../settings.ini';
if (@is_readable($ini_ini_filename)) {
	$ini = parse_ini_file($ini_ini_filename, FALSE);
}
else {
	unset($ini);
}
/* Grab Personalized Settings: End */

/* Variables: Start */
/* XBMC: All */
$xbmchost													= $ini['xbmc'];
$xbmcport													= $ini['xport'];
$xbmcuser													= $ini['xbmcuser'];
$xbmcpass													= $ini['xbmcpass'];

/* XBMC: HTTP API */
$JSONStart  = '<a target="jsonresponse" href="http://' . $xbmchost . ":" . $xbmcport . '/xbmcCmds/xbmcHttp?command=ExecBuiltIn&parameter=';

/* XBMC: JSON API */
// Required to 'loop' the variable into JavaScript
$wsJson			= "ws://" . $xbmchost . ":9090/jsonrpc/";
// -- System Related -- //
$ping			= array('{"jsonrpc": "2.0", "method": "JSONRPC.Ping", "id": 1}');
$introspect		= array('{"jsonrpc": "2.0", "method": "JSONRPC.Introspect", "id": "1"}');
$XBMCReboot		= array('{"jsonrpc": "2.0", "method": "Application.Reboot", "id": "1"}');
$XBMCQuit		= array('{"jsonrpc": "2.0", "method": "Application.Quit", "id": "1"}');
// -- Subtitles -- //
$SubtitleOn		= array('{"jsonrpc": "2.0", "method": "Player.SetSubtitle", "params": {"playerid": 1, "subtitle" : "on"}, "id": "1"}');
$SubtitleOff	= array('{"jsonrpc": "2.0", "method": "Player.SetSubtitle", "params": {"playerid": 1, "subtitle" : "off"}, "id": "1"}');
// -- Volume -- //
$VolMute		= array('{"jsonrpc": "2.0", "method": "Application.SetMute", "params": {"mute": "toggle"}, "id": "1"}');
$VolUp			= array('{"jsonrpc": "2.0", "method": "Application.SetVolume", "params": {"volume": "increment"}, "id": "1"}');
$VolDown		= array('{"jsonrpc": "2.0", "method": "Application.SetVolume", "params": {"volume": "decrement"}, "id": "1"}');
$VolMax			= array('{"jsonrpc": "2.0", "method": "Application.SetVolume", "params": {"volume": 100}, "id": "1"}');
// -- Library Scan/Update -- //
$ScanVidLib		= array('{"jsonrpc": "2.0", "method": "VideoLibrary.Scan", "id": "1"}');
$ScanAudLib		= array('{"jsonrpc": "2.0", "method": "AudioLibrary.Scan", "id": "1"}');
$VidClean		= array('{"jsonrpc": "2.0", "method": "VideoLibrary.Clean", "id": "1"}');
$AudClean		= array('{"jsonrpc": "2.0", "method": "AudioLibrary.Clean", "id": "1"}');
// Video Library
$VidPlayPause	= array('{"jsonrpc": "2.0", "method": "Player.PlayPause", "params": {"playerid": 1}, "id": "1"}');
$VidStop		= array('{"jsonrpc": "2.0", "method": "Player.Stop", "params": {"playerid": 1}, "id": "1"}');

// Currently Broken JSON Commands

?>
<link rel="stylesheet" type="text/css" href="../css/portal.css" />
<meta charset="utf-8" />
<script language="javascript" type="text/javascript">
	var $wsJson = '<?php echo $wsJson; ?>';
	var wsUri = $wsJson;
	var output;

	function init() {
		output = document.getElementById("output");
		testWebSocket();
	}

	function testWebSocket() {
		websocket = new WebSocket(wsUri);
		websocket.onopen = function(evt) { onOpen(evt) };
		websocket.onmessage = function(evt) { onMessage(evt) };
		websocket.onerror = function(evt) { onError(evt) };
	}

	function onOpen(evt) {
		doSend('{"jsonrpc": "2.0", "method": "JSONRPC.Ping", "id": 1}');
	}

	function onMessage(evt) {
		writeToScreen('<span style="color: blue;">RESPONSE: ' + evt.data+'</span>');
	}

	function onError(evt) {
		writeToScreen('<span style="color: red;">ERROR:</span> ' + evt.data);
	}

	function doSend(message) {
		writeToScreen("SENT: " + message);
		websocket.send(message);
	}

	function writeToScreen(message) {
		var pre = document.createElement("p");
		pre.style.wordWrap = "break-word";
		pre.innerHTML = message;
		output.appendChild(pre);
	}

	window.addEventListener("load", init, false);
</script>
<?php if ($ini['developer']=="1") { ?>
	<div id="remote" style="width: 275px">
		<center>
			<a href="remote.php" target="_self">Reload Panel</a>&nbsp;
			<button name='Introspect' onClick='doSend(<?php echo json_encode($ping); ?>)'>Ping</button>&nbsp;
			<button name='Introspect' onClick='doSend(<?php echo json_encode($introspect); ?>)'>Introspect</button>
		</center>
	</div>
<?php } elseif ($ini['developer']!=="1") { ?>
<img border="0" src="../images/site/logo-big.png" />
<?php } ?>

<table id="remote" border="0">
  <tr>
    <td colspan="3" width="49%">Commands (HTTP API): <strong>For Dharma and Eden</strong></td>
    <td width="1%">&nbsp;</td>
    <td colspan="3" width="49%">Commands (JSON API): <strong>For Pre-Frodo (March 25, 2012 or Newer Required)</strong></td>
  </tr>
  <tr>
    <td width="10%"><strong>Control</strong></td>
    <td align="right">
		<?php echo $JSONStart ?>XBMC.PlayerControl(Stop)">Stop</a>
		<?php echo $JSONStart ?>XBMC.PlayerControl(Play)">Pause</a>
	</td>
    <td>
		<?php echo $JSONStart ?>XBMC.Reboot">Reboot</a>
		<?php echo $JSONStart ?>XBMC.Quit">Quit</a>
	</td>
    <td>&nbsp;</td>
    <td width="10%"><strong>Control</strong></td>
    <td align="right">
		<button name='VidStop' onClick='doSend(<?php echo json_encode($VidStop);?>)'>Stop</button>
		<button name='VidPlayPause' onClick='doSend(<?php echo json_encode($VidPlayPause);?>)'>Pause</button>
	</td>
    <td>
		<button name='XBMCReboot' onClick='doSend(<?php echo json_encode($XBMCReboot);?>)'>Reboot</button>
		<button name='XBMCQuit' onClick='doSend(<?php echo json_encode($XBMCQuit);?>)'>Quit</button>
	</td>
  </tr>
  <tr>
    <td><strong>Libraries (V|A)</strong></td>
    <td align="right">
		<?php echo $JSONStart ?>XBMC.UpdateLibrary(video)" title="Video Library">Update</a>
		<?php echo $JSONStart ?>XBMC.CleanLibrary(video)" title="Video Library">Clean</a>
	</td>
    <td>
		<?php echo $JSONStart ?>XBMC.UpdateLibrary(music)" title="Audio Library">Update</a>
		<?php echo $JSONStart ?>XBMC.CleanLibrary(music)" title="Audio Library">Clean</a>
	</td>
    <td>&nbsp;</td>
    <td><strong>Libraries (V|A)</strong></td>
    <td align="right">
		<button title="Video Library" name='VidScan' onClick='doSend(<?php echo json_encode($ScanVidLib); ?>)'>Update</button>
		<button title="Video Library" name='VidClean' onClick='doSend(<?php echo json_encode($VidClean); ?>)'>Clean</button>
	</td>
    <td>
		<button title="Audio Library" name='AudScan' onClick='doSend(<?php echo json_encode($ScanAudLib); ?>)'>Update</button>
		<button title="Audio Library" name='AudClean' onClick='doSend(<?php echo json_encode($AudClean); ?>)'>Clean</button>
	</td>
  </tr>
  <tr>
    <td><strong>Volume</strong></td>
    <td align="right">
		<?php echo $JSONStart ?>XBMC.Action(VolumeDown)" title="Volume Down">&downarrow;</a>
		<?php echo $JSONStart ?>XBMC.Action(VolumeUp)" title="Volume Up">&uparrow;</a>
	</td>
    <td>
		<?php echo $JSONStart ?>XBMC.Mute">Mute</a>
		<?php echo $JSONStart ?>XBMC.SetVolume(100%,showvolumebar)">Max</a>
	</td>
    <td>&nbsp;</td>
    <td><strong>Volume</strong></td>
    <td align="right">
		<button title="Volume Down" name='VolDown' onClick='doSend(<?php echo json_encode($VolDown);?>)'>&downarrow;</button>
		<button title="Volume Up" name='VolUp' onClick='doSend(<?php echo json_encode($VolUp);?>)'>&uparrow;</button>
	</td>
    <td>
		<button name='VolMute' onClick='doSend(<?php echo json_encode($VolMute);?>)'>Mute</button>
		<button name='VolMax' onClick='doSend(<?php echo json_encode($VolMax);?>)'>Max</button>
	</td>
  </tr>
  <tr>
    <td><strong>Subtitles</strong></td>
    <td colspan="2" align="center"><?php echo $JSONStart ?>XBMC.Action(ShowSubtitles)">Toggle</a></td>
    <td>&nbsp;</td>
    <td><strong>Subtitles</strong></td>
    <td align="right">
		<button name='SubtitleOn' onClick='doSend(<?php echo json_encode($SubtitleOn);?>)'>On</button>
	</td>
    <td>
		<button name='SubtitleOff' onClick='doSend(<?php echo json_encode($SubtitleOff);?>)'>Off</button>
	</td>
  </tr>
  <tr>
    <td><strong>Screenshot</strong></td>
    <td colspan="2" align="center"><?php echo $JSONStart ?>XBMC.TakeScreenshot">Take Screenshot</a></td>
    <td>&nbsp;</td>
    <td><strong>Screenshot</strong></td>
    <td colspan="2" align="center">Not Available</td>
  </tr>
</table>


<!--
<table align="right" border="0" cellpadding="1" cellspacing="0" draggable="false">
	<tr>
    	<td></td>
    	<td><kbd>&uarr;</kbd></td>
    	<td></td>
    </tr>
	<tr>
    	<td><kbd>&larr;</kbd></td>
    	<td><kbd>&darr;</kbd></td>
    	<td><kbd>&rarr;</kbd></td>
    </tr>
</table> 
-->

<?php if ($ini['developer']=="1") { echo '<hr><div id="output"></div>'; } elseif ($ini['developer']!=="1") { echo '<div id="output" hidden="yes"></div>'; } ?>
<!-- JSON Fix: Start -->
<div id="json"><iframe hidden="yes" id="jsonresponse" name="jsonresponse" src=""></iframe></div>
<!-- JSON Fix: End -->
</body>
</html>