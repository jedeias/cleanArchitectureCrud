<?php

class RepositiryNotes extends Repository implements repositoryNotesInterface{
    
    private Connect $connect;

    public function __construct() {
        $this->connect = new Connect();
    }

    public function getById($id) : array{

        try {

            $stmt = $this->connect->getConnect()->prepare("CALL selectNoteByID (:pkNote)");
            $stmt->bindValue(':pkNote', $id);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
        } catch (PDOException $e) {
            foreach ($e as $key) {
                echo"$key";
            }
            return ["error"]; 
        }

    }

    public function save(object $object): void{
        try {

            $stmt = $this->connect->getConnect()->prepare("CALL insertNotes (:fkPeople, :note)");

            $people = new RepositoryPeople(); 

            $pkPeople = ($people->getIdByEmail($object->getPerson())["pkPeople"]);

            $stmt->bindValue(':fkPeople', $pkPeople);
            $stmt->bindValue(':note', $object->getNotes());
            $stmt->execute();

        } catch (PDOException $e) {
            foreach ($e as $key) {
                echo"$key";
            } 
        }
    }
    
    public function update(object $object){

    }

    public function delete($id) : void{
        try {

            $stmt = $this->connect->getConnect()->prepare("CALL deleteNotes (:pkNote)");

            $stmt->bindValue(':pkNote', $id);
            $stmt->execute();

        } catch (PDOException $e) {
            foreach ($e as $key) {
                echo"$key";
            } 
        }
    }

    function getByPerson(Person $person) : array {
        
        try {

            $stmt = $this->connect->getConnect()->prepare("CALL getNoteByPerson (:email)");
            $stmt->bindValue(':email', $person->getEmail());
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            foreach ($e as $key) {
                echo"$key";
            }
            return ["error"]; 
        }
    }

}

?>