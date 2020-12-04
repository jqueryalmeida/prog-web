<?php
require_once '../../vendor/autoload.php';
print '<h1>Simplest PHP MVC</h1>';

$view = new \Mvc\View\View();
$usuario = $view->add();
var_dump($usuario);exit;
?>

<form method="post" action="">
Nome <input type="text" name="nome"><br>
<input type="submit" name="enviar" value="Cadastrar">
