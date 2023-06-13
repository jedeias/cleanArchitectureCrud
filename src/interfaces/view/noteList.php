<?php

require_once ("../../autoload.php");

$session = new Session();

$user = $session->get("user");

echo "<pre>";

print_r($user);

?>