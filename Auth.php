<?php

require_once('Log.php');
require_once('Input.php');

class Auth
{
	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

	public static $username="";


	// attempt will take in a $username and $password. If the $username is guest and the $password matches the hashed password above then set the LOGGED_IN_USER session variable as before. Use the Log class to log an info message: "User $username logged in.". If either the username or password are incorrect then log an error: "User $username failed to log in!". You will need to use the PHP method password_verify() to check the password hash.

	public static function attempt($username, $password)
	{

		$logObject=new Log();

		if ($username=='guest'&&password_verify($password,self::$password)) {
			$message=$username . "has successfully logged in.";
			$logObject->logInfo($message);
			$_SESSION['user_is_logged_in']=true;
			$_SESSION['username']=$_POST['username'];
			return true;
		}else{
			$message=$username . "has failed to log in.";
			$logObject->logError($message);
			return false;
		}


	}


	// will check to see if user is logged in

	public static function check(){
		if (isset($_SESSION['username'])) {
			return true;
		}else{
			return false;
		}
	}

	// will return username

	public static function user(){
		if (self::check()) {
			return $_SESSION['username'];
		}else{
			return null;
		}
	}

	// will logout current session

	public static function logout(){
	// clear $_SESSION array
    session_unset();

    // delete session data on the server
    session_destroy();

    // ensure client is sent a new session cookie
    session_regenerate_id();

    // start a new session - session_destroy() ended our previous session so
    // if we want to store any new data in $_SESSION we must start a new one
    session_start();

    header("Location: login.php");
    die();
	}

	// This function redirects user to new page
	public static function redirect($url){
		header($url);
		die();
	}









}