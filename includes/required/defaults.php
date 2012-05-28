<?php
$version = 2.3;

/* Verify 'settings.ini' is available, if not, attempt to use defaults below; */
$ini_ini_filename = 'settings.ini';
if (@is_readable($ini_ini_filename)) {
	$ini = parse_ini_file($ini_ini_filename, FALSE);
}
else {
	unset($ini);
}
/* Variables to set if value is missing from settings
 *  Around the site, use the following Syntax for calling your links:
 *		'zzzz' is 4 character abbreviation for AppName
 *		$zzzzhost		= The Host for AppName
 *		$zzzzport		= The Port for AppName
 *		$CallHP_zzzz	= Gives Host:Port format
 *		
 *		Additionals:
 *		$xbmcjson		= Root to JSON
 *		$xbmcvfs		= Root to XBMC's Virtual File System
 *		$comingEpis		= SickBeard's ComingEpisodes
 *		
 *		JSON Calls: (Experimental)
 *		
 */

// Hosts and Ports
// XBMC
if (!isset($ini['xbmc'])) { $ini['xbmc']                    = 'localhost'; }
if (!isset($ini['xport'])) { $ini['xport']                  = 8080; }
if (!isset($ini['xbmcuser'])) { $ini['xbmcuser']			= 'xbmc'; }
if (!isset($ini['xbmcpass'])) { $ini['xbmcpass']			= ''; }
$xbmchost													= $ini['xbmc'];
$xbmcport													= $ini['xport'];
$xbmcuser													= $ini['xbmcuser'];
$xbmcpass													= $ini['xbmcpass'];
$CallHP_XBMC												= $xbmchost . ":" . $xbmcport;
$xbmcjson													= 'http://' . $xbmcuser . ":" . $xbmcpass . "@" . $xbmchost . ":" . $xbmcport . '/jsonrpc/';
$xbmcvfs													= 'http://' . $xbmchost . ":" . $xbmcport . '/vfs/';

// Plex Media Server
if (!isset($ini['plex'])) { $ini['plex']                    = 'localhost'; }
if (!isset($ini['plexport'])) { $ini['plexport']            = 32400; }
$plexhost													= $ini['plex'];
$plexport													= $ini['plexport'];
$CallHP_Plex												= $plexhost  . ":" . $plexport;

// Maraschino
if (!isset($ini['mara'])) { $ini['mara']                    = 'localhost'; }
if (!isset($ini['maraport'])) { $ini['maraport']            = 7000; }
$marahost													= $ini['mara'];
$maraport													= $ini['maraport'];
$CallHP_Mara												= $marahost . ":" . $maraport;

// SickBeard
if (!isset($ini['sick'])) { $ini['sick']                    = 'localhost'; }
if (!isset($ini['sbport'])) { $ini['sbport']                = 8080; }
if (!isset($ini['sbapi'])) { $ini['sbapi']                  = ''; }				// API Key
$sickhost													= $ini['sick'];
$sickport													= $ini['sbport'];
$CallHP_Sick												= $sickhost . ":" . $sickport;
$comingEpis													= 'http://' . $sickhost . ":" . $sickport . '/comingEpisodes/';

// CouchPotato
if (!isset($ini['couch'])) { $ini['couch']                  = 'localhost'; }
if (!isset($ini['cpport'])) { $ini['cpport']                = 5000; }
$couchost													= $ini['couch'];
$coucport													= $ini['cpport'];
$CallHP_Couch												= $couchost . ":" . $coucport;

// SabNZBd+
if (!isset($ini['sab'])) { $ini['sab']                      = 'localhost'; }
if (!isset($ini['sabport'])) { $ini['sabport']              = 8080; }
if (!isset($ini['sabapi'])) { $ini['sabapi']                = ''; }				// API Key
$sabnhost													= $ini['sab'];
$sabnport													= $ini['sabport'];
$CallHP_Sab													= $sabnhost . ":" . $sabnport;

// uTorrent
if (!isset($ini['utor'])) { $ini['utor']                    = 'localhost'; }
if (!isset($ini['utport'])) { $ini['utport']                = 32459; }
$utorhost													= $ini['utor'];
$utorport													= $ini['utport'];
$CallHP_uTor												= $utorhost . ":" . $utorport . "/gui/";

// Headphones
if (!isset($ini['headphones'])) { $ini['headphones']        = 'localhost'; }
if (!isset($ini['headport'])) { $ini['headport']            = 8181; }
$headhost													= $ini['headphones'];
$headport													= $ini['headport'];
$CallHP_Head												= $headhost . ":" . $headport;

// Transmission
if (!isset($ini['transmission'])) { $ini['transmission']    = 'localhost'; }
if (!isset($ini['tranport'])) { $ini['tranport']            = 51413; }
$tranhost													= $ini['transmission'];
$tranport													= $ini['tranport'];
$CallHP_Tran												= $tranhost . ":" . $tranport;

// jDownloader
if (!isset($ini['jDown'])) { $ini['jDown']					= 'localhost'; }
if (!isset($ini['jDport'])) { $ini['jDport']				= 10025; }
$jdowhost													= $ini['jDown'];
$jdowport													= $ini['jDport'];
$CallHP_Jdown												= $jDown . ":" . $jDport;

// AutoMovies
if (!isset($ini['autom'])) { $ini['autom']					= 'localhost'; }
if (!isset($ini['amport'])) { $ini['amport']				= 8087; }
$aumohost													= $ini['autom'];
$aumoport													= $ini['amport'];
$CallHP_AutoM												= $autom . ":" . $amport;

// TVHeadend
if (!isset($ini['tvhe'])) { $ini['tvhe']					= 'localhost'; }
if (!isset($ini['tvhport'])) { $ini['tvhport']				= 9981; }
$tvhehost													= $ini['tvhe'];
$tvheport													= $ini['tvhport'];
$CallHP_TVHe												= $tvhe . ":" . $tvhport;

// SubSonic
if (!isset($ini['subs'])) { $ini['subs']					= 'localhost'; }
if (!isset($ini['ssport'])) { $ini['ssport']				= 4040; }
$subshost													= $ini['subs'];
$subsport													= $ini['ssport'];
$CallHP_subs												= $subs . ":" . $ssport;

function writeAppURL($AppCall,$AppName) {
	echo '<a class="classpanel" target="myiframe" href="http://' . $AppCall . '">' . $AppName . '</a>';
}
function writeAppFull($AppURL,$ImageName) {
	echo '<a class="classpanel" target="myiframe" href="http://' . $AppURL . '"><img src="includes/images/apps/' . $ImageName . '.png" /></a>';
}
function writeTopNav($AppName) {
	echo '<a class="classpanel" href="#">' . $AppName . '</a>';
}

// NZB Sites
$NZBMatrix													= 'nzbmatrix.com/nzb.php?';
if (!isset($ini['matrixuser'])) { $ini['matrixuser']		= ''; }
$NZBMatrixUser												= $ini['matrixuser'];
if (!isset($ini['matrixapi'])) { $ini['matrixapi']          = ''; }
$NZBMatrixAPI 												= $ini['matrixapi'];
if (!isset($ini['nzbsuapi'])) { $ini['nzbsuapi']            = ''; }
$NZBsuAPI													= $ini['nzbsuapi'];

// Advanced Settings
if (!isset($ini['charset'])) { $ini['charset']              = 'windows-1251'; }					// NOT in $ini by default
if (!isset($ini['external_css'])) { $ini['external_css']    = 'includes/css/portal.css'; }

// Array containing list of filenames which should be omitted during directory loading. Wildcards aren't allowed.
$ini['ignore_files'] = array('.', '..', $ini_ini_filename, $ini['description_filename'], $ini['cache_dir'], basename($_SERVER['SCRIPT_NAME']), '.htaccess', '.htpasswd', 'Thumbs.db', 'error_log', 'access_log', 'cgi-bin', '_notes');

// JSON API (Experimental)
$jsonarray1 = array(
    'host' => $xbmchost,
    'port' => $xbmcport,
    'user' => $xbmcuser,
    'pass' => $xbmcpass
);

$JSONStart  = '<a class="classpanel" target="jsonresponse" href="http://' . $xbmchost . ":" . $xbmcport . '/xbmcCmds/xbmcHttp?command=ExecBuiltIn&parameter=';

/** Attempt at new JSON... do NOT use as it doesn't work (yet)
$xbmcdbconn = array(
'video' => array('dns' => 'sqlite:/home/xbmc/.xbmc/userdata/Database/MyVideos64.db', 'username' => $xbmcuser, 'password' => $xbmcpass, 'options' => array()),
'music' => array('dns' => 'sqlite:/home/xbmc/.xbmc/userdata/Database/MyMusic20.db', 'username' => $xbmcuser, 'password' => $xbmcpass, 'options' => array()),
);
$shortcut["Clean XBMC Video Library"] = array("xbmcsend" => 'CleanLibrary(video)');
*/	


/** Modules Section */

// RSS Feeds
$rsson	=	$ini['rss_on'];

?>