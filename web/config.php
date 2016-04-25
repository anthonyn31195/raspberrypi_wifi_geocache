<?php 
# 
# configure

define("tracking_codes", array(
	raspberrypi => "testcode"
	));

define( "tracking_code", tracking_codes[php_uname("n")]);

define("cache_name", "Splasher Hacker CacheBerry");

define("find_code", "CACHEBERRY");

define("log_file", "geocache_log.txt");

define("append", "a");

?>
