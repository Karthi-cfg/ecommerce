<?php

class Sessions{

    public static $user = null;
    public static function start_session(){
        session_start();
    }

    public static function unset_all(){
        session_unset();
    }

    public static function destroy(){
        session_destroy();
    }


    public static function set($key, $value){
        $_SESSION[$key] = $value;
    }

    public static function getUser()
    {  //  getUser()->getUsername;
        return Sessions::$user;
    }

    public static function delete($key){
        unset($_SESSION[$key]);
    }


    public static function isset($key){
        return isset($_SESSION[$key]);
    }

    public static function get($key, $default=false){
        if(Sessions::isset($key)) {

            return $_SESSION[$key];
        } else {
            
            return $default;
        }

      
    
    }


}

?>