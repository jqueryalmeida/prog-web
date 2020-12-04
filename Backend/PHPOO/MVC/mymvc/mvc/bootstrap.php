<?php

/**
 * Este arquivo basicamente inicia o aplicativo, depois de receber o chamado de public/index.php
 */

/**
 * MyMVC
 *
 * @author Ribamar FS <ribafs@gmail.com>
 *
 */

// Definir uma constante que mantenha o caminho da pasta do projeto, como "/var/www/html/mymvc".
// DIRECTORY_SEPARATOR adiciona uma barra ao final do path
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);

// Configura uma constante que manipula a pasta 'mvc' folder do projeto, como '/var/www/html/mymvc/mvc'.
define('APP', ROOT . 'mvc' . DIRECTORY_SEPARATOR);

// Este é o carregador automático para dependências do Composer (para carregar ferramentas no seu projeto).
require_once ROOT . 'vendor/autoload.php';

// Carregar configuração da aplicação (relatório de erros etc.)
require_once APP . 'config/config.php';

// Carregar classe Router
use Mvc\Core\Router;

// Iniciar aplicativo
$app = new Router();
