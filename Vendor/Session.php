<?php
/**
 * Created by PhpStorm.
 * User: 
 * Date: 
 * Time: 
 */

class Session {

    private static $instance;
    public function __construct()
    {
       // session_start();
    }

    public static function getInstance() {
        if(!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;

    }

    public function destroy() {
        session_destroy();
    }

    public function set($key,$value) {
        $_SESSION[$key] = $value;
    }


    public function get($key = null) {
        $sessionArr = [];
        if($key) {
            if(isset($_SESSION[$key])){
                return $_SESSION[$key];
            } else return false;
        } else {
            foreach ($_SESSION as $key => $value) {
                $sessionArr[$key] = $value;
            }
            return $sessionArr;
        }
    }
}
