<?php
/*
 * A simple class for form security.
 * 
 * Author: Lav Gupta
 * Last Updated: 25/03/2014
 */

class Form_Check {
	
	public function __construct() {
		if(!isset($_SESSION)) session_start();
	}
	
	/*
	 * Call this function when the form is loaded, to set the timestamp. 
	 * Inputs: 
	 * 		$formName = Name of the form
	 */
	public function set_timestamp($formName) {
		$_SESSION[$formName]['time_started'] = time();
	}
	
	/*
	 * Call this function to unset the timestamp. 
	 * Inputs: 
	 * 		$formName = Name of the form
	 */
	public function unset_timestamp($formName) {
		unset($_SESSION[$formName]['time_started']);
	}
	
	/*
	 * Call this function after the form is submitted. 
	 * Inputs: 
	 * 		$formName = Name of the form
	 * 		$honeypotFieldName = Name of the honeypot field
	 * 		$timeToSubmit = Minimum time required to submit the form (in seconds)
	 */
	public function valid($formName, $honeypotFieldName, $timeToSubmit) {
		
		$valid_submission = false;
		$honeypotFieldValue = isset($_REQUEST[$honeypotFieldName]) ? $_REQUEST[$honeypotFieldName] : 0;
		
		if((isset($_SESSION[$formName]['time_started'])) && ((time() - $_SESSION[$formName]['time_started']) >= $timeToSubmit) && ($honeypotFieldValue === '')) {
			$valid_submission = true;
		}
		else {
			$valid_submission = false;
		}
		
		$_SESSION[$formName]['time_started'] = time();	// reset the timestamp. 
		
		return $valid_submission;
	}
	
}
