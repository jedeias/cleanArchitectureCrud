<?php

class repositoryPeopleMid{

    private repositoryPeopleInterface $repository;

    public function __construct() {
        $this->repository = new RepositoryPeople();
    }
 
    public function savePerson(Person $person) : void {
        
        $this->repository->save($person);

    }
 
    public function updatePerson(Person $person) : void {
        
        $this->repository->update($person);

    }

    public function deletePerson($id) : void {
        
        $this->repository->delete($id);

    }

    public function getPeopleId(Person $person) : array {
        
        $peopleArray = $this->repository->getIdByEmail($person);

        return $peopleArray;
    }

    public function getPresonById($id) : array {
        
        $presonArray = $this->repository->getById($id);

        return $presonArray;
    }

    public function selectAllPeople() : array {
        
        $peopleArray = $this->repository->selectPeople();

        return $peopleArray;
    }

}

?>