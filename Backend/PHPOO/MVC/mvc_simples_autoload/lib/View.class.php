<?php
class View {
	private $viewfile;
	private $headerfile; //<--
	private $footerfile; //<--
	
	public function __construct($model, $action){
		$model_name = get_class($model);		
		$this->viewfile = PATH_VIEW . "$model_name/$action.php";
		$this->headerfile = PATH_VIEW . HEADER_FRONT; //<--
		$this->footerfile = PATH_VIEW . FOOTER_FRONT; //<--
	}
	
	public function show($data = NULL, $dataheader = NULL, $datafooter = NULL){ //<--
		include($this->headerfile); //<--
		include($this->viewfile);
		include($this->footerfile); //<--
	}
}