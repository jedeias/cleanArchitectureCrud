<?php


abstract class Authentication implements repositoryAuthenticationInterface {
    private $name;
    private $password;
    
	public function getName() {
		return $this->name;
	}
	
	public function setName($name): self {
		$this->name = $name;
		return $this;
	}
	
	public function getPassword() {
		return $this->password;
	}
	
	public function setPassword($password): self {
		$this->password = $password;
		return $this;
	}
	
    public abstract function authentication($emial, $password);

}

?>