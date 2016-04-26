<?php
# Functions
define("red","red");
define("green","green");
define("_append", "a");
define("_read","r");
define("_write","w+");
define("_pre_append", "r+");
define("fhostname",php_uname("n"));
define("log_format","%s|%s|%s");
define("date_format","D, M jS, Y g:i a")

define("table", 
"  <div class=\"container\">\n" .
"    <table class=\"table\">\n" .
"      <thead>\n" .
"        <tr>\n" .
"          <th>Date</th>\n" .
"          <th>Geocache Nickname</th>\n" .
"          <th>Comment</th>\n" .
"        </tr>\n" .
"      <thead>\n" .
"      %s\n" .
"    </table>\n" .
  );

define("table_row", "
        <tr>
          <tr>%s</tr>
          <tr>%s/tr>
          <tr>%s</tr>
        </tr>
  ");

function writelog() {
  if (isset($_REQUEST[gname]) and !empty($_REQUEST[gname])) {
    if ( file_exists(log_file)) {
      $file = fopen(log_file, _pre_append) or die("Unable to open file!");
    } else {
      $file = fopen(log_file, _write) or die("Unable to open file!");
    }
    if (flock($file,LOCK_EX)) {
      $content = fread($file, filesize(log_file));
      fseek($file,0);
      fwrite($file, get_current() ."\n" . $content);
      flock($file,LOCK_UN);
    }
    fclose($file);
  }
}

function readlog() {
  $ouput = ""
  if ( file_exists(log_file) ) {
    $log = fopen(log_file, _read);
    if ($log) {
      while (($line = gets($log)) != false) {
        $output = set_row($line);
      }
    }
    printf(table, $output);
  }
}

function set_row($input) {
  list($date,$name,$comment) = split('|',$input);
  return sprintf(table_row,
    date(date_format,$date),
    $name,
    $comment);
}

function get_current() {
  $output = "";
  if ( if (isset($_REQUEST[gname]) and !empty($_REQUEST[gname])) {
    $output = sprintf(log_format,time(),$_REQUEST[gname],$_REQUEST[gcomment]);
  }
  return $output;
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
