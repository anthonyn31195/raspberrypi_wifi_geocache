<?php
# Functions

function writelog() {
	$date = date('U');
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
	if ( tracking_codes[php_uname("n")] != null ) {
		$tracking_code = tracking_codes[php_uname("n")];
	}
	return $tracking_code;
}