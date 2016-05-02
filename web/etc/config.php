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

define("log_file", "/tmp/geocache_log.txt");

define("gname","geocaching_nickname");

define("gname_label","Geocaching Nickname");

define("gcomment","comment");

define("image","/image/image.png");

date_default_timezone_set(timezone);

function tacking_code() {
  global $tracking_codes;
  $code = "none";
  if ( array_key_exists( php_uname("n"), $tracking_codes )) {
    $code = $tracking_codes[php_uname('n')];
  }
  return $code;
}
?>
