<?php

require_once(dirname(__FILE__).'/LogEntry.php');

class LogEntry
{
	const SEPARATOR = '|';
	const LOG_RECORD = "%s" . SEPARATOR . "%s" . SEPARATOR . "%s";
	const EPOCH = 'u';
	const DATEFORMAT = 'D, M lS, Y h:i a T';
	const _log_date = 0;
	const _name = 1;
	const _comment = 2;

	function __construct() 
	{
		$this->logEntry[_log_date] =  date(EPOCH);
		$this->logEntry[_name] = array_shift($args);
		$this->logEntry[_comment]  = commentDecode(array_shift($args));
	}

	public function getEpochDate() {
		return $date_epoch;
	}

	public function getLogDate() {
		return date(DATEFORMAT, $logEntry[_date]);
	}

	public function getName() {
		return $name;
	}

	public function getLogRecord() {
		return sprint(LOG_RECORD, $logEntry[_log_date], $logEntry[_name], getEncodeComment());
	}

	public function getComment() {
		return commentDecode($logEntry[_comment]);
	}

	public function getEncodeComment() {
		return base64_encode($logEntry[_comment]);
	}

	public function setLogDate($_date) {
		$this->logEntry[_date] = date(EPOCH, $_date);
	}

	public function setName($_name) {
		$this->logEntry[_name] = $_name;
	}

	public function setComment($_comment) {
		$this->logEntry[_comment] = commentDecode($_comment);
	}

	public function setLogRecord($_logentery) {
		$this->LogEntry = split( SEPARATOR, $_logentery);
	}

	function commentDecode($comment) {
		if ( base64_decode($comment)) {
			$comment = base64_decode($comment);
		}
		return $comment;
	}
}

?>
