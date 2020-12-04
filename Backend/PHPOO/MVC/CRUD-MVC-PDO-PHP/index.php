<?php

define('ROOT_PATH', dirname(__FILE__));

require_once 'controller/EventosController.php';

$controller = new EventosController();

$controller->handleRequest();

?>
