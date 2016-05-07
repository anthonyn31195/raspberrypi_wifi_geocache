
**Install instruction**  
http://www.piface.org.uk/assets/piface_clock/PiFaceClockguide.pdf  
sudo apt-get --quiet update  
sudo apt-get --yes --quiet upgrade  
sudo apt-get --yes --quiet install dnsmasq dnsutils hostapd i2c-tools iptables lighttpd php5-cgi   
wget https://raw.githubusercontent.com/piface/PiFace-Real-Time-Clock/master/install-piface-real-time-clock.sh  
chmod 700 install-piface-real-time-clock.sh  
./install-piface-real-time-clock.sh  

scp -r web \<raspberrypi\>  

scp -r etc \<raspberrypi\>  

ssh \<raspberrpi\>  

cd ~/web  

sudo mv * /var/www/html

cd /var/www/html  

chown -Rv root:root *

cd ~/etc/lighttpd  

sudo mv 90-raspberrypi.conf /etc/lighttpd//etc/lighttpd/conf-enabled 

cd /etc/lighttpd/conf-enabled  

sudo ln -s ../conf-available/10-fastcgi.conf
sudo ln -s ../conf-available/15-fastcgi-php.conf
sudo ln -s ../conf-available/90-raspberrypi.conf

sudo service lighttpd restart  

sudo vi /etc/dnsmasq.d/geocache.conf

Add:

sudo dpkg-reconfigure keyboard-configuration

sudo raspi-config

https://redmine.lighttpd.net/projects/1/wiki/HowToSimpleSSL  
cd /etc/lighttpd  
openssl req -new -x509 -keyout server.pem -out server.pem -days 365 -nodes  
chmod 400 server.pem
