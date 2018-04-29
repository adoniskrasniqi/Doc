<?php
require 'database.php';

class Patient extends Database{
	private $patientId;
	private $personalDetail;
	private $history;
	private $paymentData;

	function __construct($patientId){
		$this->patientId = $patientId;
	}


	/*
	*	Get personal data
	*/
	function getPatientId(){
		return $this->patientId;
	}
	function getName(){
		return $this->personalDetail["name"];
	}
	function getPersonalId(){
		return $this->personalDetail["personalId"];
	}
	function getPhoneNumber(){
		return $this->personalDetail["phoneNumber"];
	}
	/*
	Continues...
	*/


	/*
	*	Get history data alltogether or for specified time
	*/
	function getHistory(){
		return $this->history;
	}
	function getHistoryByTime($time){
		return $this->history[$time];
	}



	/*
	*	Get payment data alltogether or for specified time
	*/
	function getPaymentData(){
		return $this->paymentData;
	}
	function getPaymentDataByTime($time){
		return $this->paymentData[$time];
	}

}

