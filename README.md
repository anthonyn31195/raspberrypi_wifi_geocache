# RaspberryPI Wi-Fi Geocache 

This is at GIT repo to create a [RaspberryPI](https://www.raspberrypi.org/) Wi-FI Geocache.

The purpose of this is to setup a [Wi-Fi](https://en.wikipedia.org/wiki/Wi-Fi) Geocache using the RasberryPI as field puzzle. This tell you how to set and install the software. It does not scribe how to set the hardware side of the cache or power it with a battery. This is based on [Wireless Geocache Tutorial](http://forums.groundspeak.com/GC/index.php?showtopic=329890) on [Geocaching Forums](http://forums.groundspeak.com)

Since most Geocacher have smart phones with Wi-Fi and web browser they already have to Tools Of The Trade (TOTT) needed.

Inorder to find and log this cache the geocacher will have to find the Wi-Fi access point Service Set Identifier (SSID), Open a Web Broswer App on there phone and navagate to the log page. Enter there Geocaching nickname on the form and hit submit button.

**There are a few things that must be accounted for:**
 * The RaspberryPI will be standalone and not conencted to the Internet.
 * The RaspberryPI sent up as an Wi-Fi access point.
 * The RaspberryPI will have be a DNS server and return all queries to return it IP address for the query.
 * The Web Server on the system must accept any HTTP (Port 80) request and direct to the log page.
 * Since HTTPS (Port 443) SSL must be signed with SSL Certificate match the site name it will not.

**Hardware Requirements:**
* RaspberryPI 3 or RaspberryPi 2 with a Wi-Fi USB Adapter. 
* [Real Time Clock](http://www.piface.org.uk/products/piface_clock/) (optional)  
  Since the RaspberryPI does not have an onborad clock it will not rember the time when shutdown and since it not be connected to the internet it will not be able to get time from via [NTP](http://www.ntp.org/). If you want time stamp to be correct on users logs. You will need this.
* Mirco USB adpter for powering the RaspberryPI
* Mirco SD card (recommend 32GB)
* Cat 5 Ethernet Cable. (Installing OS and configure the software)
* Router with an Enternet Port. (Installing OS and configure the software)
* RaspberryPI case (optional)
* USB Keyboard (Installing OS and configure the software)
* USB Moouse ((Installing OS and configure the software))
* Monitor with HDMI port
* HDMI Cable

**Software Requirments installed on the RaspberryPI:**
* [Raspbian](https://www.raspberrypi.org/downloads/) - operating system. 
* [dnsmasq](http://www.thekelleys.org.uk/dnsmasq/doc.html) - DNS and DHCP server software
* dnsutils (optional) for test dns - [nslookup](http://linux.die.net/man/1/nslookup) - DNS jelp commands
* [git](https://git-scm.com/) (optional) - software repo software
* [hostapd](https://w1.fi/hostapd/) - Wi-Fi access point software
* [iptables](https://en.wikipedia.org/wiki/Iptables) - IP Packet filtering
* [lighttpd](https://www.lighttpd.net/) - Web Server software
* [isc-dhcp-server](https://www.isc.org/downloads/dhcp/) - DHCP software
* [ssh](https://en.wikipedia.org/wiki/Secure_Shell) - Login using SSH cliets like: (optional)   [PuTTY](http://www.chiark.greenend.org.uk/~sgtatham/putty/) for Window.

**How it works:**

* **Raspbian** a Linux operating system the is installed on the MircoSD card.
* **Hostapd** is the Wi-Fi access point software that broadcast the SSID that Wi-FI client need to connect to the subnet.
* **isc-dhcp-server** manages the IP address and give the client it network information (IP address, Netmask, Default Router and DNS server). The Default Router and DNS sever will the IP address if WLAN0 Ethernet Inteface.
* **DNSmasq** is the DNS server that will serve DNS queries, since the the device will not be connect to the internet. **DNSmasg** will return any address lookup request to be the IP address on the WLAN0 interface.
* **Iptables** is use a firewall and we use to router HTTP (port 80) route all reqeust to Port 80 on the RaspberryPI.
* **Lighttpd** is the Web server the will handle the GET requst and server up the web. Also has a [rewrite rule](https://redmine.lighttpd.net/projects/1/wiki/docs_modrewrite) so any page request will return the index.html page.
* **php5-cgi
* sudo apt-get install lighttpd php5-cgi
* sudo lighty-enable-mod fastcgi 
* sudo lighty-enable-mod fastcgi-php
* sudo service lighttpd force-reload [refence](https://wiki.ubuntu.com/Lighttpd%2BPHP)
**Installing the Software:**
* To install the Raspberry Pi operating system refer to [Installing Guide](https://www.raspberrypi.org/documentation/installation/installing-images/) on [RaspberryPI web site](https://www.raspberrypi.org/).

**Setup and Test Enviroment use [QEMU](http://wiki.qemu.org/) (optional)**
* Read [How to use QEMU](qemu_howto.md)
  
  
  
  
  
  
  
[![alt text](https://www.raspberrypi.org/wp-content/uploads/2012/03/raspberry-pi-logo-212x250.png "RaspberryPI")](http://www.raspberrypi.org/)
[![alt text](https://www.geocaching.com/play/Content/images/touch/touch-icon-192x192.png "Geocache")](http://www.geocaching.com)
