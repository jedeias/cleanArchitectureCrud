<?php

class ValidatePassword extends Validation{

    public function characterCheck($password) {
        if (strlen($password) > 12) {
            return "invalid";
        }

        return $password;
    }

}

?>