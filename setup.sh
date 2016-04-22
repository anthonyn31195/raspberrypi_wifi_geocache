#!/bin/bash

sudo apt-get --quiet update
sudo apt-get --yes --quiet upgrade
sudo apt-get --yes --quiet install dnsmasq dnsutils hostapd iptables lighttpd php5-cgi 

/etc/lighttpd/conf-enabled
ls -s ../conf-available/15-fastcgi-php.conf
ln -s ../conf-available/10-fastcgi.conf
