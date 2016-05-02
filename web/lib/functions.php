<?php

define("epoch","U");
define("log_format", "%s|%s|%s\n");

function write_log() {
	$date = date(epoch);
	$comment = "";
	if (isset($_REQUEST["comment"])) {
		$comment = json_encode($_REQUEST["comment"]);
	}

	if (isset($_REQUEST["geocaching_nickname"])) {
		$username = $_REQUEST["geocaching_nickname"];
		$file = fopen(log_file, "a");
		flock($file, LOCK_EX);
		$text = sprintf(log_format, $date, $username, $comment);
		fwrite( $file, $text );
		flock($file, LOCK_UN);
		fclose;
	}
}

