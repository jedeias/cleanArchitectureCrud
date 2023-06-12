<?php

require_once ("../../../autoload.php");

class RepositoryPeople extends Repository implements repositoryPeopleInterface{

    private $connect; 

    public function __construct() {
        $this->connect = new Connect();
    }

    public function getById($id){

    }

    public function getIdByEmail(Person $person){
        try {

            $stmt = $this->connect->getConnect()->prepare("CALL selectByEmail (:email)");
            $stmt->bindValue(':email', $person->getEmail());
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            foreach ($e as $key) {
                echo"$key";
            }
            return []; 
        }
    }

    public function save(object $object): void {
        try {
            $stmt = $this->connect->getConnect()->prepare("CALL insertPerson(:name, :email, :password, :sex, :accessLevel)");
            $stmt->bindValue(':name', $object->getName());
            $stmt->bindValue(':email', $object->getEmail());
            $stmt->bindValue(':password', $object->getPassword());
            $stmt->bindValue(':sex', $object->getSex());
            $stmt->bindValue(':accessLevel', $object->getAccessLevel());
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    public function update(object $object) : void{

        

    }

    public function delete($id) : void{

        try {
            $stmt = $this->connect->getConnect()->prepare("CALL deletePerson(:ID)");
            $stmt->bindParam(':ID', $id);
            $stmt->execute();
        
        } catch (PDOException $e) {
            foreach ($e as $key) {
                echo"$key";
            }
        }
    }

    public function authentication ($email, $password): array{
        try {
            $stmt = $this->connect->getConnect()->prepare("CALL login(:email, :password)");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            foreach ($e as $key) {
                echo"$key";
            }
            return []; 
        }
    }


    function selectPeople(): array {
        try {
            $stmt = $this->connect->getConnect()->prepare("CALL selectPeople()");
            $stmt->execute();
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            foreach ($e as $key) {
                echo"$key";
            }
            return []; 
        }
    }

}

$repository = new RepositoryPeople();

$peopleList = $repository->selectPeople();

echo"<pre>";
var_dump($peopleList);

echo"<hr>";

$login = $repository->authentication("test@test.com", "password");

echo"<pre>";
var_dump($login);


echo"<hr>";

$person = new Person("testson", "test@test.com", "password", "M", "2");

$getPkPerson = $repository->getIdByEmail($person);

echo"<pre>";
var_dump($getPkPerson);

$jose = new Person("jose", "jose@jose.com", "password", "M", "1");

$repository->save($jose);

?>
