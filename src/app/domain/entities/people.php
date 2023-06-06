<?php

abstract class People{

    private $name;
    private $email;
    private $password;
    private $sex;
    private $accessLevel;

	public function getName() {
		return $this->name;
	}
	
	public function setName($name): self {
		
		$validation = new ValiadeName();

		$this->name = $validation->characterCheck($name);
		
		return $this;
	}

	public function getEmail() {

		return $this->email;
	}
	
	public function setEmail($email): self {
		
		$validation = new ValidateEmail();

		$this->email = $validation->characterCheck($email);;
		return $this;
	}

	public function getPassword() {
		return $this->password;
	}
	
	public function setPassword($password): self {

		$validation = new ValidatePassword();

		$this->password = $validation->characterCheck($password);
		return $this;
	}

	public function getSex() {
		return $this->sex;
	}
	
	public function setSex($sex): self {

		$validation = new ValidateSex();

		$this->sex = $validation->characterCheck($sex);
		return $this;
	}

	public function getAccessLevel() {
		return $this->accessLevel;
	}
	
	public function setAccessLevel($accessLevel): self {
		$this->accessLevel = $accessLevel;
		return $this;
	}
}

?>