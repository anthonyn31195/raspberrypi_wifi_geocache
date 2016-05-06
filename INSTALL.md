
**Install instruction**

sudo apt-get --quiet update  
sudo apt-get --yes --quiet upgrade  
sudo apt-get --yes --quiet install dnsmasq dnsutils hostapd iptables lighttpd php5-cgi php-pear
sudo pear install HTML_Table

sudo vi /etc/dnsmasq.d/geocache.conf

Add:

sudo dpkg-reconfigure keyboard-configuration

sudo raspi-config

https://redmine.lighttpd.net/projects/1/wiki/HowToSimpleSSL
cd /etc/lighttpd/certs
openssl req -new -x509 -keyout lighttpd.pem -out lighttpd.pem -days 365 -nodes
chmod 400 lighttpd.pem
