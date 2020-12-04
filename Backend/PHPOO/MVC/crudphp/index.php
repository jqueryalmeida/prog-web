<?php
/**
 * Projeto: CRUD na estrutura MVC
 * Ferramentas extras: Bootstrap para visual e Datatables para controle de dados na tela
 * Criador: Daniel Araujo
 * @danerscode
 */
  session_start();
  setlocale(LC_TIME, 'pt_BR\ ', 'pt_BR.utf-8\ ', 'pt_BR.utf-8\ ', 'portuguese\ ');
  date_default_timezone_set('America/Sao_Paulo');
  require 'config.php';
  spl_autoload_register(function($class){
    if (file_exists('controllers/' . $class . '.php')) {
      require 'controllers/' . $class . '.php';
    } elseif (file_exists('models/' . $class . '.php')) {
      require 'models/' . $class . '.php';
    } elseif (file_exists('core/' . $class . '.php')) {
      require 'core/' . $class . '.php';
    }
  });
  $core = new core();
  $core->run();
 ?>
