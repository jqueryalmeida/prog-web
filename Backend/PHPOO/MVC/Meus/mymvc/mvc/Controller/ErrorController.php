<?php

/**
 * Class Error
 *
 */

declare(strict_types = 1);

namespace Mvc\Controller;

class ErrorController
{
  
  /**
     * PÁGINA: index
     * Este método manipula a página de erros que deve ser mostrada quando uma página não for encontrada
     */
    public function index($controller = null, $action = null)
    {
        // Carregar views
        require APP . 'template/_templates/header.php';
        require APP . 'template/error/index.php';
        require APP . 'template/_templates/footer.php';
    }
}

