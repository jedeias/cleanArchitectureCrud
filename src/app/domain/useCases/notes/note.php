<?php
class Note extends Notes{
    private Person $person;
    
	public function __construct(Person $person) {
		$this->setPerson($person);
	}

	public function getPerson(): Person {
		return $this->person;
	}

    public function setPerson(Person $person): self {
		$this->person = $person;
		return $this;
	}

}

?>