<?php
// Os dados da url estão vindo do .htaccess

class Router
{
	private $controller = 'Clientes';
	private $action = 'index';
	private $param = [];	
	private $url = [];
	
	public function __construct(){
		$this->splitUrl();
		$this->controller = $this->url[0];
		$this->action = $this->url[1];
		$this->param = $this->url[2];				
		print $this->param;// Aqui dá para pegar as 3 partes: controller, action e param
	}

	function splitUrl(){
		$url = explode('/', $_SERVER['REQUEST_URI']);// Captura a URL
		array_shift($url);
		array_shift($url);
		array_shift($url);
		// O fato de remover 3 elementos da $url, indica que este exemplo está engessado para um aplicativo num subdiretório do Apache
		// Se o aplicativo estiver um nível acima devemos remover apenas 2
		$this->url = $url;
		return $this->url;
	}	

}
$router = new Router();

// Chamar pela url
// http://localhost/Router/controller/action/param
