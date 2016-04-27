<?php

include_once(dirname(__file__)."/LogEntry.php");

Class LogEntries {
	
	const DEFAULT_LOG_FILE_NAME = "/tmp/geocache_log.txt";

	public function __construct() {
		$this->LogEntries = array();
		$this->logFileName = DEFAULT_LOG_FILE_NAME;
		$this->file_contents = array();
		_readfile();
		_setLogEntries();
	}

	public function addLogEntry(&$_entry) {
		array_push($this->LogEntries, $_entry);
	}
	public function setFileName($_filename) {
		$this->logFileName -$_filename;
	}

	public function getFileName() {
		return $this->logFileName;
	}

	function _readFile() {
		if ( file_exists($this->logFileName)) {
			$this->file_contents =  explode('\n', file_get_contents($this->logFileName));
		}
	}
	function _setLogEntries() {
		foreach ( $this->file_contents as $value ) {
			$this->LogEntries = push(new LogEntry(split(LogEntry::SEPARATOR, $value)));
		}
	}
}

?>
