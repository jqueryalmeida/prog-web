<?php
  require 'enviroment.php';

  global $config;
  $config = array();
  if (ENVIROMENT == 'development') {
    ini_set("display_errors", "On");
    define("BASEURL", "http://backup/prymarya/");
    $config['dbname'] = 'testes';
    $config['host']   = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'root';
  } else {
    ini_set("display_errors", "Off");
    define("BASEURL", "SITENOAR");
    $config['dbname'] = 'BANCONOAR';
    $config['host']   = 'CAMINHODOBANCONOAR';
    $config['dbuser'] = 'USUARIONOAR';
    $config['dbpass'] = 'SENHANOAR';
  }

 ?>
