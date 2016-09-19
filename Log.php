<?php


class Log

{
	
	public $fileName;

	public $handle;

	public $date;

	public $time;

	// The logMessage function will never be manipulated directly, it's just used by logError and logInfo

	public function logMessage($logLevel,$message){
		fwrite($this->handle, PHP_EOL . $this->date . $this->time . " " . $logLevel . ":" . $message);

	}
	// Both logError and log Info take in a message and add the appropriate level
	public function logError($message){
		$this->logMessage("ERROR", $message);
	}

	public function logInfo($message){
		$this->logMessage("INFO", $message);
	}

	// Construct is used to to create the variables, it's not manipulated directly

	public function __construct($prefix='log-'){
		$this->date=date("m-d-o");
		$this->fileName=$prefix . $this->date;
		$this->handle=fopen($this->fileName, 'a');
		$this->time=" " . date("g") . ":" . date("i") . ":" . date("s");
		

	}
	public function __destruct(){
		fclose($this->handle);
	}


}
