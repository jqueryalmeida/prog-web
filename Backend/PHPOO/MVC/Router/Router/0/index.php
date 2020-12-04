<?php
// Os dados da url estão vindo do .htaccess
function splitUrl(){
	$url = explode('/', $_SERVER['REQUEST_URI']);// Captura a URL
	array_shift($url);
	array_shift($url);
	array_shift($url);
	// O fato de remover 3 elementos da $url, indica que este exemplo está engessado para um aplicativo num subdiretório do Apache
	// Se o aplicativo estiver um nível acima devemos remover apenas 2
	
	return $url;
}	

print_r(splitUrl());

