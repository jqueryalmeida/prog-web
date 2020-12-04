<?php

class Router
{
	protected $controller = 'home';
	protected $method = 'index';
	protected $param = []; // array vazio
	
	public function __construct(){
		$url = self::parseUrl(isset($_GET['url']));
		
		// controller
		if(file_exists('app/controllers' . $url[0] . '.php')){
			$this->controller = $url[0];
			unset($url[0]);
		}
		// action
		require_once 'app/controllers/' . $this->controller . '.php';
		if(isset($url[1]) && method_exists($this->controller, $url[1])){
			$this->method = $url[1];
			unset($url[1]);
		}
		
		// parâmetro. unset no $url[0], no $url[1], o que sobre é param
		$this->param = $url ? array_values($url) : [];
		
		call_user_func_array([$this->controller, $this->method], $this->param);
	}
	
	public function parseUrl($url){
		return explode('/', filter_var(rtrim($url), FILTER_SANITIZE_URL));// Retornar um array
	}
}
