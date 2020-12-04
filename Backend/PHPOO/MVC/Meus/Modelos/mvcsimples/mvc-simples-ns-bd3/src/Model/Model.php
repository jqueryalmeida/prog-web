<?php

namespace Mvc\Model;

class Model extends Connection
{
    public function listar(){
        $stmte = $this->pdo->query("SELECT * FROM usuarios order by id");
        $executa = $stmte->execute();
        $result = $stmte->fetchAll(\PDO::FETCH_OBJ);
        return $result;
    }

    public function add($nome){
        $sql = 'INSERT INTO clientes (nome) VALUES (:nome)';
        $query = $this->pdo->prepare($sql);
        $parameters = array(':nome' => $nome);

        $query->execute($parameters);
    }

}

