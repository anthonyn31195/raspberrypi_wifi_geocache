<?php
# Functions

function writelog() {
	$data = date('M d, Y');
	if isset($_REQUEST["geocaching_name"] and !empty($vars[1])) {
		$file = fopen(log_file, append);
		if (flock($file,LOCK_EX)) {
			fwrite($file,$date . "|". $_REQUEST["geocaching_name"] . "\n");
			flock($file,LOCK_UN);
		}
	}
	fclose($file);
}
