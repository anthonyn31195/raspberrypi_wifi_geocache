<?php
# Functions
define("red","red");
define("green","green");

function writelog() {
  $date = date('U'); # ecpoch date
  if (isset($_REQUEST["geocaching_name"]) and !empty($_REQUEST["geocaching_name"])) {
    $file = fopen(log_file, append);
    if (flock($file,LOCK_EX)) {
      fwrite($file,$date . "|". $_REQUEST["geocaching_name"] . "\n");
      flock($file,LOCK_UN);
    }
    fclose($file);
  }
}

function tracking_code() {
  $tracking_code = "tracking code not found";
  if ( array_key_exists(php_uname("n"),tracking_codes)) {
    $tracking_code = tracking_codes[php_uname("n")];
  }
  return $tracking_code;
}

function set_color($text,$color) {
  return "<font color=\"$color\">$text</font>\n";
}
