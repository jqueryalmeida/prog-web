<?php

require_once ROOT_PATH.DIRECTORY_SEPARATOR.'model'.DIRECTORY_SEPARATOR.'EventosGateway.php';
require_once ROOT_PATH.DIRECTORY_SEPARATOR.'model'.DIRECTORY_SEPARATOR.'Database.php';

class EventosService extends EventosGateway
{

	private $eventosGateway = null;

	public function __construct()
	{
		$this->eventosGateway = new EventosGateway();
	}

	public function getAllEventos($order) { 
	    try { 
	        self::connect();
	        $res = $this->eventosGateway->selectAll($order); 
	        self::disconnect();
	        return $res; 
	    } catch (Exception $e) { 
	        self::disconnect();
	        throw $e; 
	    } 
	} 

	public function getEvento($id) 
	{
		try {
			self::connect();
			$result = $this->eventosGateway->selectById($id);
			self::disconnect();
			return $result;
		} catch(Exception $e) {
			self::disconnect();
			throw $e;
		}
		return $this->eventosGateway->selectById($id);
	}

	public function createNewEvento($nome, $numero)
	{
		try {
			self::connect();
			$result = $this->eventosGateway->insert($nome, $numero);
			self::disconnect();
			return $result;
		} catch(Exception $e) {
			self::disconnect();
			throw $e;

		}
	}

	public function editEvento($nome, $numero, $id)
	{
		try {
			self::connect();
			$result = $this->eventosGateway->edit($nome, $numero, $id);
			self::disconnect();
		}catch(Exception $e) {
			self::disconnect();
			throw $e;
		}
	}

	public function deleteEvento($id)
	{
		try {
			self::connect();
			$result = $this->eventosGateway->delete($id);
			self::disconnect();
		} catch(Exception $e) {
			self::disconnect();
			throw $e;
		}
	}
}

?>
