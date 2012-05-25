<?php
require 'includes/required/defaults.php';
require 'includes/required/header.php';
?>

<div id="configPageHeader"><strong>Welcome to the HTPCPortal Configuration page.</strong><br />
This page does NOT currently create or alter your configuration and simply displays the information for you. This will hopefully change shortly after I'm happy with the overall layout and design.<br /><br />
</div>

<div id="nav">
<?php
$file = "settings.ini";
if (!(file_exists($file))) {
	echo ("<strong>$file</strong> The file doesn't exist.<br /><br />");
	echo ("&nbsp;&nbsp;Please:<br />&nbsp;&nbsp;Copy 'settings-default.ini' to 'settings.ini'");
	
	} else {
	echo ("<strong>$file</strong> File exists");
}
?>
</div>	
<table class="configTable" border="0">
	<tr>
    	<td colspan="7" align="center" id="nav"><strong>Media Servers</strong></td>
        <td colspan="4" align="center" id="nav"><strong>RSS</strong></td>
    </tr>
	<tr>
    	<td width="75" height="65" rowspan="4" align="center"><img src="includes/images/apps/XBMC.png" title="XBMC" /></td>
        <td width="75">Hostname / IP:</td>
        <td width="20%"><?php echo $ini['xbmc'] ?></td>
        <td rowspan="4"></td>
    	<td width="75" height="65" rowspan="4" align="center"><img src="includes/images/apps/Plex.png" title="Plex" /></td>
        <td width="75">Hostname / IP:</td>
        <td width="20%"><?php echo $ini['plex'] ?></td>
        <td rowspan="4"></td>
    	<td rowspan="2" colspan="2" align="center" valign="middle"><a class="classpanel" href="includes/required/feed2js/build.php">RSS Editor</a></td>
		<td width="20%" rowspan="4" valign="top">To create valid RSS Feeds for this site, you must click the link to the left and follow the directions.</td>
    </tr>
	<tr>
        <td>Port:</td>
        <td><?php echo $ini['xport'] ?></td>
        <td>Port:</td>
        <td><?php echo $ini['plexport'] ?></td>
    </tr>
    <tr>
		<td>User:</td>
        <td><?php echo $ini['xbmcuser'] ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>Pass:</td>
        <td><?php echo $ini['xbmcpass'] ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
	<tr>
    	<td colspan="11" align="center" id="nav"><strong>Management</strong></td>
    </tr>
	<tr>
    	<td rowspan="4" align="center"><img src="includes/images/apps/Maraschino.png" title="Maraschino" /></td>
        <td>Hostname / IP:</td>
        <td><?php echo $ini['mara'] ?></td>
		<td rowspan="4"></td>
    	<td rowspan="4" align="center"><img src="includes/images/apps/SickBeard.png" title="SickBeard" /></td>
        <td>Hostname / IP:</td>
        <td><?php echo $ini['sick'] ?></td>
		<td rowspan="4"></td>
    	<td rowspan="4" align="center" width="75"><img src="includes/images/apps/CouchPotato.png" title="CouchPotato" /></td>
        <td width="75">Hostname / IP:</td>
        <td><?php echo $ini['couch'] ?></td>
    </tr>
	<tr>
        <td>Port:</td>
        <td><?php echo $ini['maraport'] ?></td>
        <td>Port:</td>
        <td><?php echo $ini['sbport'] ?></td>
        <td>Port:</td>
        <td><?php echo $ini['cpport'] ?></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>API Key:</td>
        <td><?php echo $ini['sbapi'] ?></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
	<tr>
    	<td colspan="11" align="center" id="nav"><strong>Downloaders</strong></td>
    </tr>
	<tr>
    	<td rowspan="4" align="center"><img src="includes/images/apps/SabNZBd.png" title="SabNZBd+" /></td>
        <td>Hostname / IP:</td>
        <td><?php echo $ini['sab'] ?></td>
		<td rowspan="4"></td>
    	<td rowspan="4" align="center"><img src="includes/images/apps/uTorrent.png" title="&micro;Torrent" /></td>
        <td>Hostname / IP:</td>
        <td><?php echo $ini['utor'] ?></td>
		<td rowspan="4"></td>
    	<td rowspan="4" align="center"><img src="includes/images/apps/jDownloader.png" title="jDownloader" /></td>
        <td>Hostname / IP:</td>
        <td><?php echo $ini['jDown'] ?></td>
    </tr>
	<tr>
        <td>Port:</td>
        <td><?php echo $ini['sabport'] ?></td>
        <td>Port:</td>
        <td><?php echo $ini['utport'] ?></td>
        <td>Port:</td>
        <td><?php echo $ini['jDport'] ?></td>
    </tr>
    <tr>
        <td>API Key:</td>
        <td><?php echo $ini['sabapi'] ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
	<tr>
    	<td colspan="11" align="center" id="nav"><strong>Other</strong></td>
    </tr>
	<tr>
    	<td rowspan="4" align="center"><img src="includes/images/apps/Headphones.png" title="Headphones" /></td>
        <td>Hostname / IP:</td>
        <td><?php echo $ini['headphones'] ?></td>
		<td rowspan="4"></td>
    	<td rowspan="4" align="center"><img src="includes/images/apps/AutoMovies.png" title="AutoMovies" /></td>
        <td>Hostname / IP:</td>
        <td><?php echo $ini['autom'] ?></td>
		<td rowspan="4"></td>
    	<td rowspan="4" align="center"><img src="includes/images/apps/SubSonic.png" title="SubSonic" /></td>
        <td>Hostname / IP:</td>
        <td><?php echo $ini['subs'] ?></td>
    </tr>
	<tr>
        <td>Port:</td>
        <td><?php echo $ini['headport'] ?></td>
        <td>Port:</td>
        <td><?php echo $ini['amport'] ?></td>
        <td>Port:</td>
        <td><?php echo $ini['ssport'] ?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
	<tr>
    	<td rowspan="4" align="center"><img src="includes/images/apps/Transmission.png" title="Transmission" /></td>
        <td>Hostname / IP:</td>
        <td><?php echo $ini['transmission'] ?></td>
		<td rowspan="4"></td>
    	<td rowspan="4" align="center"><img src="includes/images/apps/TVHeadend.png" title="TVHeadend" /></td>
        <td>Hostname / IP:</td>
        <td><?php echo $ini['tvhe'] ?></td>
		<td rowspan="4"></td>
    	<td rowspan="4" align="center"><img src="includes/images/apps/XBMC.png" /></td>
        <td>Hostname / IP:</td>
        <td>&nbsp;</td>
    </tr>
	<tr>
        <td>Port:</td>
        <td><?php echo $ini['tranport'] ?></td>
        <td>Port:</td>
        <td><?php echo $ini['tvhport'] ?></td>
        <td>Port:</td>
        <td></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
</body>
</html>