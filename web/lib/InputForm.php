<?php

$inputForm = new InputForm();

Class InputForm {

	const FORM_NAME = 'InputForm';
	const METHOD = 'post';
	const ACTION = '#';
	const TARGET = '';
	const TRACK = true;
	const TEXT = 'text';
	const NAME = 'name';
	const NAME_COMMENT = 'Geocaching Name:';
	const NAME_ACTION = 'trim';
	const NAME_RULE_COMMENT = "Enter Geocaching Name:";
	const NAME_SIZE = 30;
	const NAME_MAX = 100;
	const LOG = 'submit';
	const LOG_COMMENT = 'Log';
	const HEADER = 'header';
	const HEADER_COMMENT = 'Write to the Geocache log';
	const REQUIRED = required;

	public function __construct() {
		$this->inputForm = new HTML_QuickForm(
			FORM_NAME,
			METHOD,
			ACTION,
			TARGET,
			TRACK);

		$this->inputForm->addElement(HEADER, HEADER_COMMENT);
		$this->inputForm->addElement(TEXT, NAME, TEXT,
			array('size' => NAME_SIZE, 'maxlength' => NAME_MAX));

		$this->inputForm-addElement(LOG, null, LOG_COMMENT);

		$this->inputForm->applyFilter(NAME, NAME_ACTION);
		$this->inputForm->addRule(NAME,NAME_RULE_COMMENT,REQUIRED, null, 'client');

		if ($form->validate()) {
    		echo '<h1>Hello, ' . htmlspecialchars($form->exportValue(NAME)) . '!</h1>';
    		exit;
    	}
    }
}

?>
