<?php
require_once 'Database.php';

class EventosGateway extends Database 
{

	public function selectAll($order)
	{
		if (!isset($order)) {
			$order = 'nome';
		}
		$pdo = Database::connect();
		$sql = $pdo->prepare("SELECT * FROM eventos ORDER BY $order ASC");
		$sql->execute();
		// $result = $sql->fetchAll(PDO::FETCH_ASSOC);

		$eventos = array();
		while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {
		
			$eventos[] = $obj;
		}
		return $eventos;
	}

	public function selectById($id)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("SELECT * FROM eventos WHERE id = ?");
		$sql->bindValue(1, $id);
		$sql->execute();
		$result = $sql->fetch(PDO::FETCH_OBJ);
		
		return $result;
	}

	public function insert($nome, $numero)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("INSERT INTO eventos (nome, numero) VALUES (?, ?)");
		$result = $sql->execute(array($nome, $numero));
	}

	public function edit($nome, $numero, $id)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("UPDATE eventos set nome = ?, numero = ? WHERE id = ? LIMIT 1");
		$result = $sql->execute(array($nome, $numero, $id));
	}

	public function delete($id)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("DELETE FROM eventos WHERE id = ?");
		$sql->execute(array($id));
	}
}

?>
