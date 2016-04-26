<?php
# Functions
define("red","red");
define("green","green");
define("_append", "a");
define("_read","r");
define("_write","w+");
define("_pre_append", "r+");
define("fhostname",php_uname("n"));
define("log_pattern", "/\|/");
define("log_replace", "</td><td>");

function writelog() {
  $date = date('Y-m-d'); # ecpoch date
  if (isset($_REQUEST[gname]) and !empty($_REQUEST[gname])) {
    if ( file_exists(log_file)) {
      $file = fopen(log_file, _pre_append) or die("Unable to open file!");
    } else {
      $file = fopen(log_file, _write) or die("Unable to open file!");
    }
    if (flock($file,LOCK_EX)) {
      $content = fread($file, filesize(log_file));
      fseek($file,0);
      fwrite($file,$date . "|" . $_REQUEST[gname] . "|" . $_REQUEST[gcomment] ."\n" . $content);
      flock($file,LOCK_UN);
    }
    fclose($file);
  }
}

function readlog() {
  if ( file_exists(log_file) ) {
    $log = fopen(log_file, _read);

    $log_text = fread($log, filesize(log_file));
    if (isset($_REQUEST[gname]) and !empty($_REQUEST[gname])) {
      $log_text = date('Y-m-d') . "|" . $_REQUEST[gname] . "|" . $_REQUEST[gcomment] ."\n" . $log_text;
    }
    $log_text = preg_replace(log_pattern, log_replace, $log_text);
    $log_text = preg_replace("/\r?\n/","</td></tr>\n<tr><td>",$log_text);
    $log_text = "<table width=\"90%\">\n<tr><td>" . $log_text . "</td></tr>\n</table>\n";
    print $log_text;
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
