<?php
/**
 * @author Archigos
 * @copyright 2012
 * Originally based on the "Addon" to Maraschino by 'hernandito' of XBMC Forums.
 * Please do not edit this file, check the Readme.md and edit 'settings.ini' instead
 */

 require 'includes/required/errorreporting.php';
 require 'includes/required/defaults.php';
 
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>HTPC Portal v<?php echo $version ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $ini['charset'] ?>"/>
			<?php
			$css_external_path = FALSE;
			$css_external_path = $ini['external_css'];
			if ('' != $css_external_path) {
				if ( preg_match('|^https?://|i', $css_external_path) || 0 == substr_compare($css_external_path, '/', 0, 1) ) {
					$css_is_external = TRUE;
				}
				else if ( is_readable($css_external_path) ) {
					$css_external_path =  ('/' != dirname($_SERVER['SCRIPT_NAME']) ? dirname($_SERVER['SCRIPT_NAME']) : '' ) . '/' . $css_external_path;
					$css_is_external = TRUE;
				}
			}
			if ( $css_is_external ) {
				print('<link href="' . $css_external_path . '" rel="stylesheet" type="text/css">');
				} else { ?> <link rel="stylesheet" type="text/css" href="includes/css/portal.css" /> <?php 
			} ?>
        <link rel="shortcut icon" href="includes/images/favicon.ico" />
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
    </head>
<body>
<!-- Left Panel: Start -->
<div id="leftofframe">
	<div id="nav"><strong>XBMC </strong>
		<?php echo $JSONStart ?>XBMC.TakeScreenshot">Screenshot</a>
		<?php echo $JSONStart ?>XBMC.Action(ShowSubtitles)">Subtitles</a>
	</div>
	<div id="nav"><strong>Control </strong>
		<?php echo $JSONStart ?>XBMC.PlayerControl(Play)">Pause</a>
		<?php echo $JSONStart ?>XBMC.Reboot">Reboot</a> 
	</div>
	<div id="nav"><strong>Volume </strong>
		<?php echo $JSONStart ?>XBMC.Mute">Mute</a>
		<?php echo $JSONStart ?>XBMC.Action(VolumeUp)">&uparrow;</a>
		<?php echo $JSONStart ?>XBMC.Action(VolumeDown)">&downarrow;</a>
		<?php echo $JSONStart ?>XBMC.SetVolume(100%,showvolumebar)">Max</a>
	</div>
	<!-- Haven't found the correct code for these yet
	<div id="nav"><strong>Watched </strong>
		<?php echo $JSONStart ?>XBMC.Action(SetWatched)">(un)Mark</a>
		<?php echo $JSONStart ?>XBMC.">Toggle</a>
	</div>
	-->
	<div id="nav"><strong>Video </strong>
		<?php echo $JSONStart ?>XBMC.UpdateLibrary(video)">Update</a>
		<?php echo $JSONStart ?>XBMC.CleanLibrary(video)">Clean</a>
	</div>
	<div id="nav"><strong>Music </strong>
		<?php echo $JSONStart ?>XBMC.UpdateLibrary(music)">Update</a>
		<?php echo $JSONStart ?>XBMC.CleanLibrary(music)">Clean</a>
	</div>
	<!-- Personal Links: Start -->
	<div id="nav"><strong>Email </strong> 
		<a target="myiframe" class="classpanel" href="#">Personal</a>
		<a target="myiframe" class="classpanel" href="http://www.gmail.com">Gmail</a>
	</div>
	<!-- Personal Links: End -->
</div>
<!-- Left Panel: End -->

<!-- Top Navigation: Start -->
<div id="navi" class="navi">
	<ul>
		<li><?php writeAppURL($CallHP_Mara,Maraschino); ?></li>
        <li><?php writeAppURL($CallHP_Sab,SabNZBd); ?></li>
        <li><?php writeAppURL($CallHP_uTor,'&micro;Torrent'); ?></li>
        <li><?php writeAppURL($CallHP_Sick,SickBeard); ?></li>
        <li><?php writeAppURL($CallHP_Couch,CouchPotato); ?></li>
        <li><?php writeAppURL($CallHP_Mara,Maxtrix); ?>
            <ul>
                <li><a href="http://<?php echo $NZBMatrix ?>category=Movies" target="myiframe" title="Movies"><img src="includes/images/movies.png" width="104" height="104" /></a></li>
                <li><a href="http://<?php echo $NZBMatrix ?>category=TV" target="myiframe" title="TV"><img src="includes/images/tv.png" width="104" height="104" /></a></li>
                <li><a href="http://<?php echo $NZBMatrix ?>category=Apps" target="myiframe" title="Applications"><img src="includes/images/apps.png" width="104" height="104" /></a></li>
                <li><a href="http://<?php echo $NZBMatrix ?>cat=14" target="myiframe" title="Xbox"><img src="includes/images/xbox.png" width="104" height="104" /></a></li>
            </ul>
        </li>
        <li><?php writeAppURL($CallHP_Mara,NZB.su); ?>
            <ul>
                <li><a href="http://nzb.su" target="myiframe" title="NZB.su"><img src="includes/images/nzbsu.png" width="104" height="104" /></a></li>
                <li><a href="http://nzb.su/movies" target="myiframe" title="NZB.su Movies"><img src="includes/images/nzbsum.png" width="104" height="104" /></a></li>
                <li><a href="http://nzb.su/browse?t=5000" target="myiframe" title="NZB.su TV"><img src="includes/images/nzbsut.png" width="104" height="104" /></a></li>
            </ul>
        </li>
        <li><?php writeAppURL($CallHP_Mara,Forums); ?>
            <ul>
                <li><a href="http://forum.xbmc.org/index.php" target="myiframe"><img src="includes/images/xbmc.png" width="140" height="50" /></a></li>
                <li><a href="http://openelec.tv/forum/recent" target="myiframe"><img src="includes/images/openelec.png" width="140" height="50" /></a></li>
                <li><a href="http://lime-technology.com/forum/index.php" target="myiframe"><img src="includes/images/unraid.png" width="140" height="50" /></a></li>
                <li><a href="http://forums.maraschinoproject.com/index.php" target="myiframe"><img src="includes/images/maraschino.png" width="140" height="50" /></a></li>
            </ul>
        </li>
        <li><?php writeAppURL($CallHP_Mara,dBases); ?>
            <ul>
                <li><a href="http://www.imdb.com/" target="myiframe">IMDB</a></li>
                <li><a href="http://www.themoviedb.org/" target="myiframe">TheMovieDB</a></li>
                <li><a href="http://thetvdb.com/" target="myiframe">TheTVDB</a></li>
                <li><a href="http://www.joblo.com/blu-rays-dvds/release-dates/?" target="myiframe">DVD Releases</a></li>
                <li><a href="http://www.movieweb.com/movies/2012" target="myiframe">2012 Movies</a></li>
                <li><a href="http://www.rlslog.net/category/movies/hdrip/" target="myiframe">RlsLog.net</a></li>
                <li><a href="http://www.rottentomatoes.com/news/" target="myiframe">Rotten Tomatoes</a></li>
            </ul>
        </li>
        <li><?php writeAppURL($CallHP_Mara,unRAID); ?>
            <ul> 
                <li><a href="http://forum.xbmc.org/index.php" target="myiframe">unMenu</a></li> 
            </ul> 
        </li>
        <li><?php writeAppURL($CallHP_Mara,Favorites); ?>
            <ul> 
                <li><a href="http://www.engadget.com/" target="myiframe"><img src="includes/images/engadget.png" width="104" height="60" /></a></li> 
                <li><a href="http://blog.lifehacker.com/" target="myiframe"><img src="includes/images/lifehacker.png" width="104" height="60" /></a></li> 
                <li><a href="http://your demonoid link here" target="myiframe"><img src="includes/images/demonoid.png" width="104" height="60" /></a></li> 
                <li><a href="http://www.warez-bb.org/" target="myiframe"><img src="includes/images/warezbb.png" width="104" height="60" /></a></li> 
                <li><a href="http://www.cnn.com/" target="myiframe"><img src="includes/images/cnn.png" width="104" height="60" /></a></li>
                <li><a href="http://www.trakt.tv/" target="myiframe"><img src="includes/images/trakt.png" width="104" height="60" /></a></li>
                <li><a href="http://www.youtube.com/" target="myiframe"><img src="includes/images/youtube.png" width="104" height="60" /></a></li>
            </ul> 
        </li>
        <li><?php writeAppURL($CallHP_Mara,Skynet); ?>
            <ul>
                <li><a href="http://www.dropbox.com/" target="myiframe"><img src="includes/images/dropbox.png" width="104" height="60" /></a></li>
                <li><a href="http://www.icloud.com/" target="myiframe"><img src="includes/images/icloud.png" width="104" height="60" /></a></li>
                <li><a href="http://www.skydrive.com/" target="myiframe"><img src="includes/images/skydrive.png" width="104" height="60" /></a></li>
                <li><a href="http://www.twitter.com/" target="myiframe"><img src="includes/images/twitter.png" width="104" height="60" /></a></li>
                <li><a href="http://www.igoogle.com/" target="myiframe"><img src="includes/images/igoogle.png" width="104" height="60" /></a></li>
                <li><a href="http://www.facebook.com/" target="myiframe"><img src="includes/images/facebook.png" width="104" height="60" /></a></li>
                <li><a href="http://en.wikipedia.org/" target="myiframe"><img src="includes/images/wikipedia.png" width="104" height="60" /></a></li>
            </ul>
        </li> 
		<li><a class="classname2" target="_blank" href="https://github.com/Archigos/HTPCPortal">GitHub</a></li>
	</ul>
</div>
<!-- Top Navigation: End -->

<!-- iFrame Section: includes fix for dynamic size based on browser -->
<script src="includes/javascript/iframesize.js" type="text/javascript"></script>
<iframe seamless="seamless" id="ifrm" name="myiframe" src="http://<?php echo $CallHP_Mara ?>"></iframe>
<!-- iFrame Section: End -->

<!-- JSON Fix: Start -->
<div id="json" class="json"><iframe hidden="yes" id="jsonresponse" name="jsonresponse" src=""></iframe></div>
<!-- JSON Fix: End -->
</body>
</html>