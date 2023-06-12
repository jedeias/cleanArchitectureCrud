<?php
 
interface repositoryInterface{

    public function getById($id);

    public function save(object $object);
    
    public function update(object $object);

    public function delete($id);
    
}

?>