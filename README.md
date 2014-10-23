# Banana Panel

Banana Panel is a web control centre written in PHP for the Banana Pi.

![Home of Raspcontrol](raspcontrol-home.png)

This is a Fork of the orignal Raspcontrol by Bioshox - It appears the repo is no longer available...

***


## Installation

You need a web server installed on your Banana Pi.


If you are in a hurry, just clone the repository with:

	git clone https://github.com/Bioshox/Raspcontrol.git raspcontrol

And create the json authentifation file `/etc/raspcontrol/database.aptmnt` with 740 rights and owned by www-data:

	{
 	   "user":       "yourName",
 	   "password":   "yourPassword"
	}

## Optional configuration

In order to have some beautiful URLs, you can enable URL Rewriting.  
__Note:__ It's not necessary to enable URL Rewriting to use Raspcontrol.

