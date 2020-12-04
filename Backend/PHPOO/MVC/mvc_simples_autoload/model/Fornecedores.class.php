<?php
class Fornecedores extends Model{
	private $dados = array(
		1 => 'Extra Supermercados',
		2 => 'Armazem Santa Helena Atacados e Varejos',
		3 => 'Carrefour Supermercados'
	);
	
	public function todos() {
		$data = $this->dados;
		return $data;
	}
	
	public function ver() {		
		$data['registro'] = $this->dados[$_GET['id']];
		return $data;
	}
	
	public function novo(){		
		if(isset($_POST) && count($_POST)>=1){
			$data['ValorDoPost'] = $_POST['nome'];			
		}else{
			$data['ValorDoPost'] = "nenhum POST foi enviado";
		}
		return $data;
	}
	
}