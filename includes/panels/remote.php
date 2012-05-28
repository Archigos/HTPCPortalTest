<?php
require '../required/defaults.php';
 ?>
<link rel="stylesheet" type="text/css" href="../css/portal.css" />
<p style="color:white">Well, I know this page looks like crap... for now, I'm just screwing around with a layout... and trying to figure out some things with JSON.</p>
	<div id="commands"><strong>XBMC </strong>
		<?php echo $JSONStart ?>XBMC.TakeScreenshot">Screenshot</a>
		<?php echo $JSONStart ?>XBMC.Action(ShowSubtitles)">Subtitles</a>
	</div>
	<div id="commands"><strong>Control </strong>
		<?php echo $JSONStart ?>XBMC.PlayerControl(Play)">Pause</a>
		<?php echo $JSONStart ?>XBMC.Reboot">Reboot</a> 
	</div>
	<div id="commands"><strong>Volume </strong>
		<?php echo $JSONStart ?>XBMC.Mute">Mute</a>
		<?php echo $JSONStart ?>XBMC.Action(VolumeUp)">&uparrow;</a>
		<?php echo $JSONStart ?>XBMC.Action(VolumeDown)">&downarrow;</a>
		<?php echo $JSONStart ?>XBMC.SetVolume(100%,showvolumebar)">Max</a>
	</div>
	<!-- Haven't found the correct code for these yet
	<div id="commands"><strong>Watched </strong>
		<?php echo $JSONStart ?>XBMC.Action(SetWatched)">(un)Mark</a>
		<?php echo $JSONStart ?>XBMC.">Toggle</a>
	</div>
	-->
	<div id="commands"><strong>Video </strong>
		<?php echo $JSONStart ?>XBMC.UpdateLibrary(video)">Update</a>
		<?php echo $JSONStart ?>XBMC.CleanLibrary(video)">Clean</a>
	</div>
	<div id="commands"><strong>Music </strong>
		<?php echo $JSONStart ?>XBMC.UpdateLibrary(music)">Update</a>
		<?php echo $JSONStart ?>XBMC.CleanLibrary(music)">Clean</a>
	</div>


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

<!-- JSON Fix: Start -->
<div id="json" ><iframe hidden="yes" id="jsonresponse" name="jsonresponse" src=""></iframe></div>
<!-- JSON Fix: End -->
</body>
</html>