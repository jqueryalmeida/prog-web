<?php
// Define as duas constantes
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'src' . DIRECTORY_SEPARATOR);

require_once ROOT . 'vendor/autoload.php'; // Carrega o psr-4
require_once APP . 'config/config.php'; // Carrega as configurações

// Iniciar a aplicação
use RibaFS\Core\Router;
$app = new Router();
