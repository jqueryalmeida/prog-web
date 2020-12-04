<?php

try
{
    $pdo = new PDO('sqlite:./sqlite');
}
catch(PDOEXCEPTION $e)
{
	$e->getMessage();
}

