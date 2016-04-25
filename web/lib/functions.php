<?php
# Functions
define("red","red");
define("green","green");

function writelog() {
  $date = date('U'); # ecpoch date
  if (isset($_REQUEST[gname]) and !empty($_REQUEST[gname])) {
    $file = fopen(log_file, append) or die("Unable to open file!");
    if (flock($file,LOCK_EX)) {
      fwrite($file,$date . "|" . $_REQUEST[gname] . "\n");
      print $date . " " . $_REQUEST[gname] . "<br>\n";
      flock($file,LOCK_UN);
    }
    fclose($file);
  }
}

function tracking_code() {
  global $tracking_codes;
  $tracking_code = "tracking code not found";
  if ( array_keys($tracking_codes,php_uname("n"),true)) {
    $tracking_code = $tracking_codes[php_uname("n")];
  }
  return $tracking_code;
}

function set_color($text,$color) {
  return "<font color=\"$color\">$text</font>\n";
}
