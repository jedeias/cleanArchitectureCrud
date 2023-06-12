<?php 

abstract class Repository implements repositoryInterface{
    
    public abstract function getById($id);

    public abstract function save(object $object);
    
    public abstract function update(object $object);

    public abstract function delete($id);

}

?>