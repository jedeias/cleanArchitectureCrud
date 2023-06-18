<?php

require_once ("../../../autoload.php");

$session = new Session();

$session->destroy();

echo"Bye :)";
die(header("Refresh: 1 url='/cleanArchitectureCrud'"));

?>