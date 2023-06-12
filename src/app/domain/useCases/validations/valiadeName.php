<?php

    class ValiadeName extends Validation{

        public function characterCheck($name) {
            if (strlen($name) > 100) {
                return "invalid";
            }
    
            return $name;
        }
    }
    

?>