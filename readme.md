LANager
=======

LANager is a web application designed to make [LAN Parties](https://en.wikipedia.org/wiki/Lan_party)
more enjoyable for attendees and organisers alike.

## Goals
*Currently these appear to be the most valuable goals, but this list is likely to evolve*

### For Attendees
* Make it easy to find out what's going on and join in
	* [Games in progress](http://zeropingheroes.co.uk/wp-content/gallery/lanager/xbn2r.png) with direct join links
	* [Events](http://zeropingheroes.co.uk/wp-content/gallery/lanager/timetable.png) & tournaments
	* [Shouts](http://zeropingheroes.co.uk/wp-content/gallery/lanager/tixua.png)
	* [Files](http://zeropingheroes.co.uk/wp-content/gallery/lanager/files.png) e.g. game mods and patches
* Enhance the social aspect of LAN parties
	* [Attendee profiles](http://zeropingheroes.co.uk/wp-content/gallery/lanager/p5gat.png) with Steam add/message links
	* [List of attendees](http://zeropingheroes.co.uk/wp-content/gallery/lanager/iblhk.png) with people's seating location etc
* Let attendees find out important venue/event information
	* [Info pages](http://zeropingheroes.co.uk/wp-content/gallery/lanager/info.png) easily editable for displaying things like where to sleep etc
* Give attendees a voice during the event
	* [Request music & videos](http://zeropingheroes.co.uk/wp-content/gallery/lanager/playlist.png) for playout on a big screen
	* [Watch & listen](http://zeropingheroes.co.uk/wp-content/gallery/lanager/playlist_screen.png) to requested music & videos

### For Organisers
* Make it easy to get information out to attendees via [Info pages](http://zeropingheroes.co.uk/wp-content/gallery/lanager/info.png) and [Shouts](http://zeropingheroes.co.uk/wp-content/gallery/lanager/tixua.png)
* Encourage socialising and participation
* Get instant feedback from attendees


## Requirements
* Windows / Linux / OSX
* Web server (Apache, ngix and others)
* PHP 5.3.7+
* MySQL

WAMP, LAMP and MAMP are a quick way to satisfy the above, just check that the version you download includes PHP 5.3.7+

## Installation

LANager uses the excellent PHP dependency manager [Composer](http://getcomposer.org/) which makes installing and updating a breeze. You do not need to download the source directly from GitHub - it is sufficient to follow the below instructions:

1. [Download and install Composer](http://getcomposer.org/download/)
2. From a terminal in the directory you wish to install LANager, run `composer create-project zeropingheroes/lanager`
3. Configure your web server to use `lanager/public/` as the root web directory


## Feedback & Contributions

* Found a bug? Got a great feature idea? Post it to the [core issue tracker](https://github.com/zeropingheroes/lanager-core/issues)!
* Want to contribute?
	* [Fork the core project](https://github.com/zeropingheroes/lanager-core/fork) and add the features you want to see
	* Work on new features / bug fixes in the [core issue tracker](https://github.com/zeropingheroes/lanager-core/issues)
	* Or if you're really hardcore, request commit access


This repository (`zeropingheroes/lanager`) is the bootstrapped install version, and doesn't include or track the core project code. All forks, issues and pull requests should be submitted to [`zeropingheroes/lanager-core`](https://github.com/zeropingheroes/lanager-core).