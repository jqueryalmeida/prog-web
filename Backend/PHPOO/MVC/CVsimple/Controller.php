<?php

require 'View.php';

class Controller{

	public $view;
	public $sm;

	public function __construct(){
		$this->view = new View('index/index');
		return $this->view;
	}

	public function edit(){
		$this->view = new View('edit/index');
		return $this->view;
	}

	public function view(){
		$this->view = new View('view/index');
		return $this->view;
	}

	public function update(){
		$this->view = new View('update/index');
		return $this->view;
	}

}

