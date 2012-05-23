#HTPC Portal

The HTPCPortal is a PHP based 'wrapper' for use on your home network, providing quick access to all of your HTPC related apps and sites as well as other commonly used sites (like web based email). Although there are other 'consolidation' sites out there, like [Maraschino](http://maraschinoproject.com), which incorporates information from multiple HTPC Apps in a great fashion, sometimes there's a need to quickly swap between the actual applications as opposed to just viewing partial info.

![preview thumb](http://goo.gl/EfKk4)
Disregard the Maraschino 'issues' in the above screenshot, it was taken on a low resolution (1366x768) laptop and the Pre-Frodo 'fix' hadn't been applied to Maraschino yet.
![ipad version](http://goo.gl/N33Fm)
iPad specific version made to utilize it's native 1024x768 screen resolution. As you notice, the left hand menu appears different in this version and is ideally setup for 7 icon based links (You can substitute 2 'normal links' per 'image link' replaced).

## Dependencies
HTPCPortal requires an Apache/PHP Webserver to be running on the machine or network and must have PHP 5 configured correctly.

## Install
Drop the entire folder structure on to your previously configured server and load the page in your browser.

## Known Issues and Reporting Bugs
Since there are 2 different repos for this project (explained below), make sure you visit the correct page when reporting your issue.

### Current Issue
This site is currently sending JSON calls to XBMC via the now depreciated HTTP API and need to be converted over to true JSON API calls. This site was tested against a Pre-Frodo Nightly build (May 16, 2012) and all is working.

-----------------------------------------------------------------------------------------------------------------------------------------------------------------
Special Notes:<br />
	Prior to loading the site for the first time, please rename 'settings-default.ini' to 'settings.ini' and fill in each of the fields. If you 'forget' this step, there are defaults built in that 'may' work if you run each app on the same system and with their default port. When entering information in the settings.ini (other than RSS section) do not include special characters or surround your input in quotes.

	[Host]
	xbmc		=	localhost
	xport		=	8080
	xbmcuser	=	xbmc
	xbmcpass	=	xbmc
	[...]
	mara		=	192.168.1.2
	maraport	=	7000
	[...] etc.
	
	[APIKeys]		// This section is not currently used, ignore if you'd like.
	sabapi		=	xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx  // API for SabNZBd+
	sbapi		=	xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx  // API for SickBeard
	matrixapi	=	xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx  // API for NZBMatrix.com
	nzbsuapi	=	xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx  // API for NZB.su
	
	[RSS]
	rsscount	=	0	// The number of entries you want shown. 0 = All available
	feed1name	=	Movies
	feed1		=	http%3A%2F%2Frss.nzbmatrix.com%2Frss.php%3Fpage%3Ddetails%26subcat%3D1%26english%3D1
	[...]
	feed5name	=	"<img src="includes/images/engadget_iconsm.png" width="14" height="14" />"
	feed5		=	http%3A%2F%2Fwww.engadget.com%2Frss.xml

	/** To get the required format for your RSS feed, open the site and click "Remote" from
	the top navigation. From there click "RSS Editor" and paste the feed url into the box
	and click "Generate Javascript", copy and paste the end result into one of the feeds
	above. You should verify that the RSS feed is valid from the Editor page prior to using
	it. If you'd like to use an image for your RSS Feed, make it 14x14 and mimic 'feed5name'.
	*/

-----------------------------------------------------------------------------------------------------------------------------------------------------------------
## Why Two Repos?
This project is maintained on two seperate Repos, where [HTPCPortal](https://github.com/Archigos/HTPCPortal) acts as the "Master" or release (stable) version; and [HTPCPortalTest](https://github.com/Archigos/HTPCPortalTest) acts as cutting edge (read as: unstable and may/will probably break often).<br />
So, again, based on how GitHub works... why two repos and not two branchs? The simple answer is, I got drunk after I made my third (maybe fourth) commit to the first repo and decided I wanted to be safe and create a secondary place for testing... and, oops. Wrong option, but works just the same.

-----------------------------------------------------------------------------------------------------------------------------------------------------------------
More detailed information will be included later...