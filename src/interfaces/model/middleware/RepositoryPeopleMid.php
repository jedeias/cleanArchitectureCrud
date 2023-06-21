<?php

class RepositoryPeopleMid implements RepositoryPeopleMidInterface{

    private repositoryPeopleInterface $repository;

    final public function __construct() {
        $this->repository = new RepositoryPeople();
    }
 
    final public function savePerson(Person $person) : void {
        
        $this->repository->save($person);

    }
 
    final public function updatePerson(Person $person) : void {
        
        $this->repository->update($person);

    }

    final public function deletePerson($id) : void {
        
        $this->repository->delete($id);

    }

    final public function getPeopleId(Person $person) : array {
        
        $peopleArray = $this->repository->getIdByEmail($person);

        return $peopleArray;
    }

    final public function getPresonById($id) : array {
        
        $presonArray = $this->repository->getById($id);

        return $presonArray;
    }

    final public function selectAllPeople() : array {
        
        $peopleArray = $this->repository->selectPeople();

        return $peopleArray;
    }

}

?>