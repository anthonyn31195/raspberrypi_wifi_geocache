# RaspberryPI Wi-Fi Geocache 

This is at GIT repo to create a [RaspberryPI](https://www.raspberrypi.org/) Wi-FI Geocache

The purpose of this is to setup a [Wi-Fi](https://en.wikipedia.org/wiki/Wi-Fi) Geocache using the RasberryPI as field puzzle. 

Since most people of smart phones, with Wi-Fi and web browser the already have to Tools Of The Trade (TOTT) that they will need to find the cache.

Inorder to find and log this cache the geocacher will have to find the Wi-Fi access point Service Set Identifier (SSID), Load there Web Broswer and navagate to the log page.

There are a few things that must be accounted for:
 * The RaspberryPI will be standalone and not conencted to the Internet.
 * The RaspberryPI sent up as an Wi-Fi access point.
 * The RaspberryPI will have be a DNS server and return all queries to return it IP address for the query.
 * The Web Server on the system must accept any HTTP request and direct to the log page.
 * Since HTTPS SSL must be signed with certificate match the site name it will not.

Hardware Requirements:
* RaspberryPI 3 or RaspberryPi 2 with a Wi-Fi USB Adapter. 
* [Real Time Clock](http://www.piface.org.uk/products/piface_clock/) (optional)

![alt text](https://www.raspberrypi.org/wp-content/uploads/2012/03/raspberry-pi-logo-212x250.png "RaspberryPI")
![alt text](https://www.geocaching.com/play/Content/images/touch/touch-icon-192x192.png "Geocache")
