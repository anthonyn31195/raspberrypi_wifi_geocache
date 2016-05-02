<?php

define("epoch","U");
define("log_format", "%s|%s|%s\n");
define("date_text","D, M d, Y h:m a");
define("date_field",0);
define("geocaching_nickname",1);
define("comment",2);

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

function read_log() {
	if (file_exists(log_file)) {
		$file = split("\n",file_get_contents(log_file));
		arsort($file);
		foreach ($file as $line) {
			$value = split("\|",$line);
			$value[comment] = nl2br(json_decode($value[comment]));
			$value[date_field] = date(date_text,$value[date_field]);
			print var_dump($value);

		}
		#print var_dump($file);
	}
}
