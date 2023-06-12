<?php

class Person extends People{  

    public function __construct($name, $email, $password, $sex, $accessLevel) {
        $this->setName($name);
        $this->setEmail($email);
        $this->setPassword($password);
        $this->setSex($sex);
        $this->setAccessLevel($accessLevel);
    }

}

?>