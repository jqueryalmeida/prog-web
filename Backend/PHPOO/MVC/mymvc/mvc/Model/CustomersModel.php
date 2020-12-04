<?php

/**
 * Class Customer s
 */

declare(strict_types = 1);

namespace Mvc\Model;

use Mvc\Core\Model;
use Mvc\Libs\Helper;

class CustomersModel extends Model
{

    /**
     * Receber todos os customers do banco de dados
     */
    public function getAllCustomers()
    {
        $sql = 'SELECT id, name, email, birthday FROM customers ORDER BY id DESC';
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() é o método PDO que recebe todos os registros resultantes, aqui no estilo de objeto, porque nós definimos isso
        // Se você preferir receber como um resultado em array associativo, então mude
        // $query->fetchAll(PDO::FETCH_ASSOC); ou mude as opções do PDO 
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...

        return $query->fetchAll();
    }

    /**
     * Adicionar um customer para o banco de dados
     * @param string $name Name
     * @param string $email E-amil
     * @param string $birthday Birthday
     */
    public function add($name, $email, $birthday)
    {
        $sql = 'INSERT INTO customers (name, email, birthday) VALUES (:name, :email, :birthday)';
        $query = $this->db->prepare($sql);
        $parameters = array(':name' => $name, ':email' => $email, ':birthday' => $birthday);

        // DESCOMENTE A LINHA ABAIXO, útil para debugging: você pode ver o SQL por trás da construção acima usando:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Excluir um customer do banco de dados
     * Favor notar: Este é apenas um exemplo! Em uma aplicação real, você não deixaria simplesmente que todos
     * add/update/delete stuff!
     * @param int $customer_id Id do customer
     */
    public function delete($customer_id)
    {
        $sql = 'DELETE FROM customers WHERE id = :customer_id';
        $query = $this->db->prepare($sql);
        $parameters = array(':customer_id' => $customer_id);

        // Útil para debugging: você pode ver o SQL por trás da construção acima usando:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Receber um customer do banco de dados
     * @param integer $customer_id
     */
    public function getCustomer($customer_id)
    {
        $sql = 'SELECT id, name, email, birthday FROM customers WHERE id = :customer_id LIMIT 1';
        $query = $this->db->prepare($sql);
        $parameters = array(':customer_id' => $customer_id);

        // Útil para debugging: você pode ver o SQL por trás da construção acima usando:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

        // fetch() is the PDO method that get exactly one result
        return ($query->rowcount() ? $query->fetch() : false);
    }

    /**
     * Atualizar um customer no banco de dados
     * @param string $name Name
     * @param string $temail E-mail
     * @param string $birthday Birthday
     * @param int $customer_id Id
     */
    public function update($name, $email, $birthday, $customer_id)
    {
        $sql = 'UPDATE customers SET name = :name, email = :email, birthday = :birthday WHERE id = :customer_id';
        $query = $this->db->prepare($sql);
        $parameters = array(':name' => $name, ':email' => $email, ':birthday' => $birthday, ':customer_id' => $customer_id);

        // Útil para debugging: você pode ver o SQL por trás da construção acima usando:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Obtenha "estatísticas" simples. Esta é apenas uma demonstração simples para mostrar
     * como usar mais de um modelo em um controlador (consulte application / controller / customres.php para obter mais informações)
     */
    public function getAmountOfCustomers()
    {
        $sql = 'SELECT COUNT(id) AS amount_of_customers FROM customers';
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() é o método PDO que recebe exatamente um resultado

        return $query->fetch()->amount_of_customers;
    }
}
