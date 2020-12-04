<?php
declare(strict_types = 1);

namespace Mvc\Core;

class Router
{
    private $urlController = null;

    /** @var null O método (do controller acima), também chamado de "action" */
    private $urlAction = null;

    /** @var array URL parameters */
    private $urlParams = array();

    /**
     * "Start" the application:
     * Analizar os elementos da URL e chamar de acordo com o controller/method/parameter
     */
    public function __construct()
    {
        // Criar array com as partes de URL
        $this->splitUrl();

        // Checar por controller: caso não exista controller então carreque a página inicial
        if (!$this->urlController) {
			// Caso nenhum controller seja encontrado chame o controller HomeController com o action index
//            $page = new \Mvc\Controller\HomeController(); // No Mini3
			$controllerDefault = '\\Mvc\\Controller\\' . CONTROLLER_DEFAULT . 'Controller';// Agora o CONTROLLER_DEFAULT vem de config.php
			$page = new $controllerDefault;
            $page->index();

		// Se encontrar um controller
        } elseif (file_exists(APP . 'Controller/' . ucfirst($this->urlController) . 'Controller.php')) {
            // Aqui checamos o controller: existe um controller?

            // Nesse caso, carregue esse arquivo e crie este controller: como \Mvc\Controller\CustomersController
            $controller = '\\Mvc\\Controller\\' . ucfirst($this->urlController) . 'Controller';
            $this->urlController = new $controller();

            // Cheque por um método: existe um método neste controller ?
			// Se existe um método e se é método que pode ser chamado
            if (method_exists($this->urlController, $this->urlAction) && is_callable(array($this->urlController, $this->urlAction))) {
                
				// Cheque se o parâmetro não é vazio
                if (!empty($this->urlParams)) {
                    // Se existe chame o método e passe o parâmetro para ele
                    call_user_func_array(array($this->urlController, $this->urlAction), $this->urlParams);
                } else {
                    // Se nenhum parâmetro foi dado, apenas chame o método sem parâmetros, como $this->home->method();
                    $this->urlController->{$this->urlAction}();
                }

			// Se nenhum método for encontrado
            } else {
                if (strlen($this->urlAction) == 0) {
                    // Nenhum action definido: chame o método index() default controller selecionado
                    $this->urlController->index();

				// De outra forma dispare o ErrorController
                } else {
					$action = $this->urlAction;
					$contr = explode('\\',$controller);// Capture ucfirst($this->urlController) in [3]
                    $page = new \Mvc\Controller\ErrorController();
                    $page->index($contr[3],$action);
                }
            }

		// Caso nenhum controller seja encontrado dispare ErrorController
        } else {
			$controller = $this->urlController;
			$action = $this->urlAction;
            $page = new \Mvc\Controller\ErrorController();
//            $page->index($controller,$action);
            $page->index(ucfirst($controller).'Controller',$action);
        }
    }

    /**
     * Obter e quebrar em partes a URL
     */
    private function splitUrl()
    {
		// Checar se a url foi setada
        if (isset($_GET['url'])) {

            // Quebrar a URL
            $url = trim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            // Coloque partes do URL nas propriedades correspondentes
            // A propósito, a sintaxe aqui é apenas uma forma curta de if/else, chamado "Operador Ternário"
            // @see http://davidwalsh.name/php-shorthand-if-else-ternary-operators
            $this->urlController = isset($url[0]) ? $url[0] : null;
            $this->urlAction = isset($url[1]) ? $url[1] : 'index';// era null

            // Remova o controller e o action da URL dividida
            unset($url[0], $url[1]);

            // Rebase as chaves do array e armazene os parâmetros da URL
            $this->urlParams = array_values($url);

            /* ==  Para DEBUGGING descomente as linhas abaixo caso encontre algum problema com a URL == */
            // echo 'Controller: ' . ucfirst($this->urlController) . '<br>';
            // echo 'Action: ' . $this->urlAction . '<br>';
            // echo 'Parameters: ' . print_r($this->urlParams, true) . '<br>';
        }
    }
}

