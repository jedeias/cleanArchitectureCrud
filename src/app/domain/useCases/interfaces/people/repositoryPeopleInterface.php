<?php
 
 interface repositoryPeopleInterface extends repositoryInterface{
   public function authentication ($email, $password);
   public function getIdByEmail(Person $person);
   
}
 

?>