
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

zcat /usr/share/doc/hostapd/examples/hostapd.conf.gz | sudo tee -a /etc/hostapd/hostapd.conf  

sudo vi /etc/hostapd/hostapd.conf  

Change ssid = geocache
enable country_code=US <-- or your county code
enable ieee80211d=1


sudo vi /etc/dnsmasq.d/geocache.conf

Add:

sudo dpkg-reconfigure keyboard-configuration

sudo raspi-config

https://redmine.lighttpd.net/projects/1/wiki/HowToSimpleSSL  
cd /etc/lighttpd  
openssl req -new -x509 -keyout server.pem -out server.pem -days 365 -nodes  
chmod 400 server.pem

sudo iptables -t nat -I PREROUTING -p tcp --dport 80 -j DNAT --to 192.168.42.1:80  
sudo iptables -t nat -I PREROUTING -p tcp --dport 443 -j DNAT --to 192.168.42.1:443  
sudo sh -c "iptables-save > /etc/iptables.ipv4.nat"  
sudo sh -c "pre-up iptables-restore < /etc/iptables.ipv4.nat" >> /etc/network/interfaces  
sudo sh -c "sysctl -w net.ipv4.conf.all.route_localnet=1" >> /etc/sysctl.conf  

