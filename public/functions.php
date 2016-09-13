<?php
function inputHas($key){

	if (isset($_REQUEST[$key])){
		return true;
	}else{
		return false;
	}

}

function inputGet($key){
	// if input Has ($key)
	// return the value specified by the key
	// or return null if the key is not set
	if (inputHas($key)) {
		return $_REQUEST[$key];
	}else{
		return null;
	}
}

function escape($string){
	return htmlspecialchars(strip_tags($string));
}