<?php

interface sessionInterface{

    public function set($var, $session);
    public function get($var);
    public function destroy();
    
}

?>