<?php

/**
 * Class CustomersController
 */

declare(strict_types = 1);

namespace Mvc\Controller;
use Mvc\Model\CustomersModel;
use Mvc\View\CustomersView;

class CustomersController
{

    /**
     * PÁGINA: index
     * Este método gerencia o que acontece quando movemos para a página http://localhost/mymvc/customers/index
     */
    public function index()
    {
		// A view customers/index envia uma requisição para o Router, este requisita CustomersContoller/index, este requer o model 
        // Customer/getAllCustomers, este responde para CustomersContoller/index, este responde para  a View customers/index finalmente
        // Instanciar um novo Model (Customers)
        $Customer = new CustomersModel();
        // Obtendo todos os customers e o total de customers para uso na view customers/index
        $customers = $Customer->getAllCustomers();
        $amount_of_customers = $Customer->getAmountOfCustomers();

       // Carregar views. Com as views nós podemos exibir $customers e $amount_of_customers facilmente
		$view = new CustomersView();
		$view->index('customers','index',$customers,$amount_of_customers);
    }

    /**
     * ACTION: add
     * Este método manipula o que acontece quando nos movemos para http://localhost/mymvc/customers/add
     * IMPORTANTE: Isto não é uma página normal, isto é um ACTION. Este é onde o form "add a customer" fica no index
     * Direciona o usuário após o submit. Este método manipula todos os dados do POST do form e então redireciona
     * o usuário de volta para customer s/index através da última linha: header(...)
     * Isto é um exemplo de como manipular um request POST.
     */
    public function add()
    {
        // Se tivermos dados POST para criar uma nova entrada de cliente e se o botão 'submit_add_customer' na visualização customers/index tiver clicado
        if (isset($_POST['submit_add_customer'])) {
            // Instanciar um novo Model (Customers)
            $Customer = new CustomersModel();
            // Realizar add() em model/Customer.php
            $Customer->add($_POST['name'], $_POST['email'],  $_POST['birthday']);
	        // Onde ir após Customer ter sido adicionado
	        header('location: ' . URL . 'customers/index');	
        }

        // Carregar views. Com views nós podemos mostrar exibir $customer facilmente
		$view = new CustomersView();
		$view->add('customers','add');
    }

    /**
     * ACTION: delete
     * Esse método lida com o que acontece quando você passa para http://localhost/mymvc/customers/delete
     * IMPORTANTE: Esta não é uma página normal, é um ACTION. É aqui que o botão "delete a customer" em customers/index nos leva
     * direciona o usuário após o clique. Esse método lida com todos os dados da solicitação GET (na URL!) E, em seguida,
     * redireciona o usuário de volta para customers/index através da última linha: header(...)
     * Isto é um exemplo de como manipulara uma requisição tipo GET.
     * @param int $customer_id Id do to-delete customer
     */
    public function delete($customer_id)
    {
		// Veja a solicitação de envio de customers/índice ao roteador, solicita o CustomerContoller/delete, solicita o model CustomerModel/delete,
		// Isto responde ao CustomersContoller/delete, isto responde/redireciona para a View customers/index finalmente
        // Se temos um id de um customer que deve ser excluído, então
        if (isset($customer_id)) {
            // Instancia nova de Model (Customers)
            $Customer = new CustomersModel();
            // para delete() em model/model.php
            $Customer->delete($customer_id);
        }

        // Onde ir após customer ser excluído
        header('location: ' . URL . 'customers/index');
    }

     /**
     * ACTION: edit
     * Este método manipula o que aparece quando você move para http://localhost/mmymvc/customers/edit
     * @param int $customer_id Id do to-edit customer
     */
    public function edit($customer_id)
    {
        // Se temos um id do customer que devemos editar
        if (isset($customer_id)) {
            // Instanciar novo Model (Customers)
            $Customer = new CustomersModel();
	        $customers = $Customer->getAllCustomers();

            // Fazer getCustomer() no model/model.php
            $customer = $Customer->getCustomer($customer_id);

            // Se o customer não for encontrado, ele retornará false, e precisamos exibir a página de erro
            if ($customer === false) {
                $page = new \Mvc\Controller\ErrorController();
                $page->index();
            } else {
                // Carregar views. Com as views nós podemos exibir $customer facilmente
				$view = new CustomersView();
				$view->edit('customers','edit',$customers, $customer);
            }
        } else {
            // Redirecionar usário para a página Customers index (caso nós não tenhamos um customer_id)
            header('location: ' . URL . 'customers/index');
        }
    }

    /**
     * ACTION: update
     * Este método manipula o que aparece para você quando você move para http://localhost/mymvc/customers/update
     * IMPORTANTE: Esta não é uma página normal, é um ACTION. É aqui que o formulário "update a customer" em clientes/editar
     * direciona o usuário após o submit do formulário. Este método lida com todos os dados POST do formulário e depois redireciona
     * o usuário de volta para customers/index através da última linha: header(...)
     * Isto é um exemplo de como manipular as requisições tipo POST.
     */
    public function update()
    {
        // Se nós temos dados POST para criar uma nova entrada em customer
        if (isset($_POST['submit_update_customer'])) {
            // Instanciar novo Model (Customers)
            $Customer = new CustomersModel();
            // Fazer update() no model/model.php
            $Customer->update($_POST['name'], $_POST['email'],  $_POST['birthday'], $_POST['customer_id']);
        }

        // Onde ir após customer ser adicionado
        header('location: ' . URL . 'customers/index');
    }
}
