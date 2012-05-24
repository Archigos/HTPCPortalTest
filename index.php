<?php
/**
 * @author Archigos
 * @copyright 2012
 * Originally based on the "Addon" to Maraschino by 'hernandito' of XBMC Forums.
 * Please do not edit this file, check the Readme.md and edit 'settings.ini' instead
 */

require 'includes/required/errorreporting.php';
require 'includes/required/defaults.php';
require 'includes/required/header.php';
 
?>
<body>
<!-- Left Panel: Start -->
<div id="leftofframe">
	<!-- Personal Links: Start -->
	<div id="nav"><strong>Portal </strong> 
		<a class="classpanel" href="http://constellation.ictcsc.net/index.php?board=33.0" rel="ajaxpanel" >Forums</a>
		<a class="classpanel" href="https://github.com/Archigos/HTPCPortal" target="_new" >GitHub</a>
	</div>
	<!-- Personal Links: End -->
	<div id="rss" class="rss">
		<?php echo $RSSToggle ?>
		<?php writeRSSName($ini['feed1name']); ?>
        <?php writeRSS($ini['feed1'],$rsscount); ?>
		<?php writeRSSName($ini['feed2name']); ?>
        <?php writeRSS($ini['feed2'],$rsscount); ?>
		<?php writeRSSName($ini['feed3name']); ?>
        <?php writeRSS($ini['feed3'],$rsscount); ?>
		<?php writeRSSName($ini['feed4name']); ?>
        <?php writeRSS($ini['feed4'],$rsscount); ?>
		<?php writeRSSName($ini['feed5name']); ?>
        <?php writeRSS($ini['feed5'],$rsscount); ?>
    </div>
</div>
<!-- Left Panel: End -->

<!-- Top Navigation: Start -->
<div id="navi" class="navi">
	<ul>
		<li><a href="remote.php" rel="ajaxpanel" data-loadtype="iframe">Remote</a></li>
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
                <li><a href="http://www.themoviedb.org/" target="_new">TheMovieDB</a></li>
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
                <li><a href="http://www.cnn.com/" target="myiframe"><img src="includes/images/cnn.png" width="104" height="60" /></a></li>
                <li><a href="http://www.trakt.tv/" target="myiframe"><img src="includes/images/trakt.png" width="104" height="60" /></a></li>
                <li><a href="http://www.youtube.com/" target="_new"><img src="includes/images/youtube.png" width="104" height="60" /></a></li>
            </ul> 
        </li>
        <li><?php writeAppURL($CallHP_Mara,Skynet); ?>
            <ul>
                <li><a href="http://www.dropbox.com/" target="_new"><img src="includes/images/dropbox.png" width="104" height="60" /></a></li>
                <li><a href="http://www.icloud.com/" target="_new"><img src="includes/images/icloud.png" width="104" height="60" /></a></li>
                <li><a href="http://www.skydrive.com/" target="_new"><img src="includes/images/skydrive.png" width="104" height="60" /></a></li>
                <li><a href="http://www.twitter.com/" target="_new"><img src="includes/images/twitter.png" width="104" height="60" /></a></li>
                <li><a href="http://www.igoogle.com/" target="_new"><img src="includes/images/igoogle.png" width="104" height="60" /></a></li>
                <li><a href="http://www.facebook.com/" target="myiframe"><img src="includes/images/facebook.png" width="104" height="60" /></a></li>
                <li><a href="http://en.wikipedia.org/" target="myiframe"><img src="includes/images/wikipedia.png" width="104" height="60" /></a></li>
            </ul>
        </li> 
	</ul>
</div>
<!-- Top Navigation: End -->

<!-- iFrame Section: includes fix for dynamic size based on browser -->
<script src="includes/javascript/iframesize.js" type="text/javascript"></script>
<iframe id="ifrm" name="myiframe" src="http://<?php echo $CallHP_Mara ?>"></iframe>
<!-- iFrame Section: End -->
</body>
</html>