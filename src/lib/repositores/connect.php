<?php

class Connect extends Host{

    private $connect; 

    public function __construct() {
        $this->connect = new PDO("mysql:host={$this->getHost()};dbname={$this->getDatabase()}", 
                                 $this->getUser(), 
                                 $this->getPassword());
    }

	public function getConnect() {
		return $this->connect;
	}

}

?>