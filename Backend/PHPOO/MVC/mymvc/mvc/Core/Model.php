<?php

declare(strict_types = 1);

namespace Mvc\Core;
use PDO;

class Model
{
    /**
     * @var null Database Connection
     */
    public $db = null;

    /**
     * Sempre que um model for criado, abrir uma conexão com o banco de dados
     */
    function __construct()
    {
        try {
            self::openDatabaseConnection();
        } catch (\PDOException $e) {
            exit('Conexão co o banco de dados não ode ser estabelecida.');
        }
    }

    /**
     * Abre a conexão com o banco de dados usando as credenciaus de mvc/config/config.php
     */
    private function openDatabaseConnection()
    {
        // Configura as opções (opcional) da conexão PDO. Neste caso, nós configuramos o fetch mode para
        // "objects", que indica que todos os resultados devem ser objeto, como isto: $result->user_name !
        // Por exemplo, fetch mode sendo FETCH_ASSOC deve retornar resultados como este: $result["user_name] !
        // @see http://www.php.net/manual/en/pdostatement.fetch.php
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);

		// TODO - Criar uma classe singleton para o Model
        // Gerar uma conexão com o banco de dados, usando o conector PDO
        // @see http://net.tutsplus.com/tutorials/php/why-you-should-be-using-phps-pdo-for-database-access/
		$dsn = DB_TYPE . ':host=' . DB_HOST . ';port ='. DB_PORT . ';dbname=' . DB_NAME;// . $databaseEncodingenc;
        $this->db = new PDO($dsn , DB_USER, DB_PASS, $options);
    }
}

