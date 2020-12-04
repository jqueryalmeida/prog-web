<?php
// Used in index() and edit() methods from controllers

namespace Mvc;

class View{

	public function __construct($name){
        require APP . 'view/_templates/header.php';
        require APP . 'view/'.$name.'/index.php';
        require APP . 'view/_templates/footer.php';
	}
}

