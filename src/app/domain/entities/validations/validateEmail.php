<?php

class ValidateEmail extends Validation {
    public function characterCheck($email) {
        if (strlen($email) > 80 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "invalid";
        }
        
        return $email;
    }
}
    

?>