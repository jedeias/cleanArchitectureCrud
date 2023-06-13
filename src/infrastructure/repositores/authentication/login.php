<?php 

class Login extends Authentication{

    private repositoryPeopleInterface $people;

    public function __construct($email, $password) {
        $this->setEmail($email);
        $this->setPassword($password);

        $this->people = new RepositoryPeople(); // inversio dependency injection
    }

    public function login(){

        
        $person = $this->people->authentication($this->getEmail(), $this->getPassword());
        
        $person = $person[0];
        
        var_dump($person);

        if($person == null){
            echo"<h1>Account not found. Please verify your email and password.<h1>";

            header("Location: ../../../../");
        }

        if($this->getEmail() == $person['email'] && $this->getPassword() == $person['password']){
            $user = new Person($person['name'], $person['email'], $person['password'], $person['sex'], $person['fkAccessLevel']);

            header("Location: interfaces/view/noteList.php");
        
        }

    }

}

$login = new Login("jose@jose.com", "password");

$login->login();


?>