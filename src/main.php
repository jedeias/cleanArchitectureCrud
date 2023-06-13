<?php

require_once ("autoload.php");

$login = new Login($_POST["email"], $_POST["password"]);

$login->login();

?>