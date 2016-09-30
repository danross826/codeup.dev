<?php

class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */

    public static $key='';

    // This array will hold error messages



    public static function has($key)
    {
        // TODO: Fill in this function

            if (isset($_REQUEST[$key])){
                return true;
            }else{
                return false;
    }
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        // TODO: Fill in this function
            if (self::has($key)) {
                return $_REQUEST[$key];
            }else{
                return $default;
            }
    }

// This function gets strings, the key has to be a string and uses the get request to putll it from $_REQUEST if it exists
    public static function getString($key, $default = null, $min = 1, $max = 1000)
    {
        if (!is_string($key)||!is_numeric($min)||!is_numeric($max)) {
            throw new InvalidArgumentException("Argument is invalid!");
            
        }elseif (strlen($key)<$min||strlen($key)>$max) {
            throw new LengthException("String not valid length!");
        }else{
            if (!self::has($key) && $default === null) {

                throw new OutOfRangeException("$key does not exist");

            } else if (is_string(self::get($key, $default)) && !is_numeric(self::get($key, $default))) {
                return self::get($key, $default);
            } else {

                    throw new DomainException($key . ' must be a string');

            }
        }
    }

    // This function gets numbers, the key has to be a number or the string of a number 
    // and uses the get request to putll it from $_REQUEST if it exists

    public static function getNumber($key, $default = null, $min = 0, $max = 100000)
    {
        if (!is_numeric($min)||!is_numeric($max)) {
            throw new InvalidArgumentException("Argument is invalid!");
            
        }elseif ($key<$min||$key>$max) {
            throw new RangeException("Number not within range!");
        }else{
            if (!self::has($key) && $default === null) {

                throw new OutOfRangeException("$key does not exist");

            }else if (is_numeric(self::get($key, $default))) {
                return floatval(self::get($key, $default));
            }else{


                    throw new DomainException($key . ' must be a number');



            }
        }
    }

    public static function getErrors(){
        return self::e;
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}

// $errors = [];

// try {
//     throw new Exception("This is an error.");
// }catch (Exception $e){
//     $errors[] = $exception->getMessage();
// }

// var_dump($errors);


