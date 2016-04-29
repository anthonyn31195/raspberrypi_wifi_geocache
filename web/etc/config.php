<?php 
# 
# configure

$tracking_codes = array(
  "raspberrypi" => "testcode"
  );

define("timezone", "America/Los_Angeles");

define("footer", "Cachin' the Bay");

define("cache_name", "Hacker's CacheBerry");

define("find_code", "testing");

define("log_file", "/tmp/geocache_log.txt");

define("gname","geocaching_nickname");

define("gname_label","Geocaching Nickname");

define("gcomment","comment");

date_default_timezone_set(timezone);

function tacking_code() {
  return php_uname('n');
}
?>
