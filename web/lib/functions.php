<?php
# Functions
define("red","red");
define("green","green");
define("_append", "a");
define("_read","r");
define("fhostname",php_uname("n"));

function writelog() {
  $date = date('U'); # ecpoch date
  if (isset($_REQUEST[gname]) and !empty($_REQUEST[gname])) {
    $file = fopen(log_file, _append) or die("Unable to open file!");
    if (flock($file,LOCK_EX)) {
      fwrite($file,$date . "|" . $_REQUEST[gname] . "|" . $_REQUEST[gcomment] ."\n");
      flock($file,LOCK_UN);
    }
    fclose($file);
  }
}

function readlog() {
  if ( file_exists(log_file) ) {
    $log = fopen(log_file, _read);
    print nl2br(fread($log, filesize(log_file)));
  }
}

function tracking_code() {
  global $tracking_codes;
  $tracking_code = "tracking code not found";
  if ( array_keys($tracking_codes,fhostname,true)) {
    $tracking_code = $tracking_codes[fhostname];
  }
  return $tracking_code;
}

function set_color($text,$color) {
  return "<font color=\"$color\">$text</font>\n";
}
