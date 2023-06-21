<?php
 
interface repositoryNotesInterface extends repositoryInterface{
    function getByPerson(Person $person) : array;
}

?>