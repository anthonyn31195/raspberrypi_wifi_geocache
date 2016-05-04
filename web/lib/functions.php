<?php

define("epoch","U");
define("log_format", "%s|%s|%s\n");
define("date_text","D, M d, Y h:m a");
define("_date",0);
define("_geocaching_nickname",1);
define("_comment",2);
define("comment","comment");
define("geocaching_nickname","geocaching_nickname");

function tacking_code() {
  global $tracking_codes;
  $code = "none";
  if ( array_key_exists( php_uname("n"), $tracking_codes )) {
    $code = $tracking_codes[php_uname('n')];
  }
  return $code;
}

function write_log() {
	$date = date(epoch);
	$comment = "";
	if (isset($_REQUEST[comment])) {
		$comment = json_encode($_REQUEST[comment]);
	}

	if (isset($_REQUEST[geocaching_nickname])) {
		$username = $_REQUEST[geocaching_nickname];
		$file = fopen(log_file, "a");
		flock($file, LOCK_EX);
		$text = sprintf(log_format, $date, $username, $comment);
		fwrite( $file, $text );
		flock($file, LOCK_UN);
		fclose;
	}
}

function read_log() {
	$output = "";
	if (file_exists(log_file)) {
		$file = split("\n",file_get_contents(log_file));
		#print var_dump($file);
		arsort($file);
		#print var_dump($file);
		foreach ($file as $line) {
			if ( strlen($line) > 0 ) {
				#print var_dump($line);
				$value = split("\|",$line);
				#print var_dump($value);
				$value[_comment] = comment_decode($value);
				$value[_date] = date_field_format($value);
				#print var_dump($value);
				$output .= format_row($value);
			}
		}
	#}
	#else {
	#	$output .= log_file . " not found";
	}

	return $output;
}

function comment_decode(&$value) {
	return nl2br(json_decode($value[_comment]));
}

function date_field_format(&$value) {
	return date(date_text,(int)$value[_date]);
}

function format_row($value)
{
	$output = "<div class=\"w3-row\">\n" .
    	"	<div class=\"w3-col s3\">\n" .
    	sprintf("  <a href=\"/\"><img src=\"%s\"></a>\n", image) .
    	"	</div>\n" .
    	"	<div class=\"w3-col s9 w3-container\">\n" .
    	"  <h3><a href=\"" . logs . "\">" . $value[_geocaching_nickname] . "</a></h3>\n" .
    	"  <h6><a href=\"" . logs . "\">" . $value[_date] . "</a></h6>\n" .
    	"  <a href=\"" . logs . "\">" . emoji_unified_to_html(emoticons($value[_comment])) . "</a>\n" .
    	"	</div>\n" .
  		"</div>\n" .
  		"\n" .
  		"<hr>\n\n";
  	return $output;
}
