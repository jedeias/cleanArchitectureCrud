<?php

class Session implements sessionInterface{
    final function __construct() {
        
        session_start();
    }
   
    final function set($sessionName, $var) : void {
        $_SESSION[$sessionName] = $var;
    }

    final function get($name) {
        if (isset($_SESSION[$name])) {
            return $_SESSION[$name];
        }
        return null;
    }
   
    final function destroy() : void{
        session_destroy();
    }
}

?>