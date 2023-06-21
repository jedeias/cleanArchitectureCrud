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
        

        if($person == null){
            echo"<h1>Account not found. Please verify your email and password.<h1>";

            header("Refresh: 3 url='/cleanArchitectureCrud'");
        }


        if($this->getEmail() == $person['email'] && $this->getPassword() == $person['password']){
            $user = new Person($person['name'], $person['email'], $person['password'], $person['sex'], $person['fkAccessLevel']);

            $session = new Session();

            $session->set("user", $user);

            header("Location: interfaces/view/noteList.php");
        
        }

    }

}

?> 