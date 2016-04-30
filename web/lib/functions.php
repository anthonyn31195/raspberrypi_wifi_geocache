<?php

#include_once(dirname(__file__)."/LogEntries.php");
#include_once(dirname(__file__)."/LogEntry.php");
#include_once(dirname(__file__)."/InputForm.php");
# Functions
define("red","red");
define("green","green");
define("_append", "a");
define("_read","r");
define("_write","w+");
define("_pre_append", "r+");
define("fhostname",php_uname("n"));
define("log_format","%s|%s|%s\n");
define("date_format","D, M jS, Y g:i a");

function write_log($date, $username, $comment) {
  $file = fopen(log_file, "a");
  $text = sprintf(log_format, $date, $username, $comment);
  fwrite( $file, $text );
  fclose;
}

