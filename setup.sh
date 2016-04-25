#!/bin/bash

piface_real_time_clock_url=https://raw.githubusercontent.com/piface/PiFace-Real-Time-Clock/master/install-piface-real-time-clock.sh
piface_real_time_clock=/tmp/`basename $piface_real_time_clock_url`
package_list="dnsmasq dnsutils hostapd i2c-tools iptables lighttpd php5-cgi openssl"
function SetupLighttpd () {
	cd /etc/lighttpd/conf-enabled
	ls -s ../conf-available/15-fastcgi-php.conf
	ln -s ../conf-available/10-fastcgi.conf
}

function package () {
	sudo apt-get --quite --yes $@
}
# Setup script config a raspberryPI 
sudo raspi-config
package update
package upgrade
package install $package_list
package autoremove

wget $piface_real_time_clock_url --output-document=$piface_real_time_clock
chmod 750 $piface_real_time_clock
sudo $piface_real_time_clock
sudo raspi-config
