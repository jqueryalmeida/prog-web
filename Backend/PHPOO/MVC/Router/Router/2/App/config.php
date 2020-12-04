<?php

define('DS', DIRECTORY_SEPARATOR);

// Captura o path completo do aplicativo. DIRECTORY_SEPARATOR adiciona uma barra ao final do path
define('ROOT', dirname(__DIR__) . DS);
print ROOT;
// Captura a pasta do projeto: path full mais src, como '/var/www/html/mini-framework2/src'.
define('APP', ROOT . 'App' . DS);
define('CORE', ROOT . 'Core' . DS);

// Este é o auto-loader para as dependências do Composer (para carregar ferramentas para seu projeto execute: composer update).
require_once ROOT . 'vendor/autoload.php';

