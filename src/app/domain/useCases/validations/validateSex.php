<?php

class ValidateSex extends Validation{

    public function characterCheck($sex) {
        if ($sex !== "M" AND $sex !== "F" ) {
            return "invalid";
        }

        return $sex;
    }
}

?>