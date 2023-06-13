<?php


abstract class Authentication implements repositoryAuthenticationInterface {
    private $email;
    private $password;
    

	public function getPassword() {
		return $this->password;
	}
	
	public function setPassword($password): self {

		$validation = new ValidatePassword();

		$this->password = $validation->characterCheck($password);
		return $this;
	}
	
    public abstract function login();

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email): self {
		
		$validation = new ValidateEmail();

		$this->email = $validation->characterCheck($email);;
		return $this;
	}
}

?>