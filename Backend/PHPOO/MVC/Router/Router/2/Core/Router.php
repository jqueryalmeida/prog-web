<?php

namespace Core;
use App\Controllers\ClientesController;

class Router
{
	private $controller = 'Clientes';
	private $action = 'index';
	private $param = [];	
	private $url = [];
	
	public function __construct(){
		$this->splitUrl();
print_r($this->url);exit;				
		$this->controller = $this->url[0];
		
		$this->controller = ucfirst($this->controller).'Controller';
		$this->action = $this->url[1];
		$this->param = $this->url[2];	
			// Nesta fase iremos testar com um controller criado em App\Controllers e com psr-4

		if(file_exists(APP.'Controllers/'.$this->controller.'.php')){
			$this->controller = new $this->controller();
			$this->controller->$this->action();
		}else{
			print 'Controller não existe';
		}
	}

	function splitUrl(){
//		$url = explode('/', $_SERVER['REQUEST_URI'], '/backup');// Captura a URL
		$url = parse_url($_SERVER['REQUEST_URI']);
/*		array_shift($url);
		array_shift($url);
		array_shift($url);
		*/
		// O fato de remover 3 elementos da $url, indica que este exemplo está engessado para um aplicativo num subdiretório do Apache
		// Se o aplicativo estiver um nível acima devemos remover apenas 2
		$this->url = $url;
		return $this->url;
	}	

}
$router = new Router();

// Chamar pela url
// http://localhost/Router/controller/action/param
