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

    final function verifySession() : void{
        if($_SESSION == null){
            $this->destroy();
            echo "Make the authentication";
            die(header("Refresh: 3 url='/cleanArchitectureCrud'"));
        }
    }

}

?>