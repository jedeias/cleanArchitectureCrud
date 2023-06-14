<?php

interface RepositoryPeopleMidInterface{

public function savePerson(Person $person) : void;

public function updatePerson(Person $person) : void;

public function deletePerson($id) : void;

public function getPeopleId(Person $person) : array;

public function getPresonById($id) : array;

public function selectAllPeople() : array;

}
?>