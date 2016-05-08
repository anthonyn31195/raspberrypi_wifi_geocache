<?php 
# 
# configure

$tracking_codes = array(
  "raspberrypi" => "testcode"
  );

define("timezone", "America/Los_Angeles");

define("footer", "Cachin' the Bay");

define("cache_name", "Hacker's Wi-Fi CacheBerry");

define("find_code", "testing");

define("log_file", "/var/www/html/geocache_log/geocache_log.txt");

define("gname","geocaching_nickname");

define("gname_label","Geocaching Nickname");

define("gcomment","comment");

define("image","/image/hacker.png");

define("raspberry_pi_logo","/image/raspberry-pi-logo-212x250.png");

define("raspberry_pi_name","Raspberry Pi");

define("logs", "/logs");

define("about", "/about");

date_default_timezone_set(timezone);

?>
