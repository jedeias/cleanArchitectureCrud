<?php 

require_once ("../../../autoload.php");

$session = new Session();

$session->verifySession();

$user = $session->get("user");

$removed = $_GET['pkPeople'];

$repository = new RepositoryPeopleMid();

$repository->deletePerson($removed);

echo "The user has been removed";

header("refresh: 3; url=../noteList.php");

?>