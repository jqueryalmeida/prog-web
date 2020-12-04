<?php
require_once ROOT_PATH.DIRECTORY_SEPARATOR.'model'.DIRECTORY_SEPARATOR.'EventosService.php';


class EventosController
{

	private $eventosService = null;

	
		public function __construct()
	{
		$this->eventosService = new EventosService();
	}

	public function redirect($location)
	{
		header('Location: ' . $location);
	}

	public function handleRequest()
	{
		$op = isset($_GET['op']) ? $_GET['op'] : null;

		try {

			if (!$op || $op == 'list') {
				$this->listEventos();
			} elseif ($op == 'new') {
				$this->saveEvento();
			} elseif ($op == 'edit') {
				$this->editEvento();
			} elseif ($op == 'delete') {
				$this->deleteEvento();
			} elseif ($op == 'show') {
				$this->showEvento();
			} else {
				$this->showError("Page not found", "Page for operation " . $op . " was not found!");
			}
		} catch(Exception $e) {
			$this->showError("Application error", $e->getMessage());
		}
	}

	public function listEventos()
	{
		$orderby = isset($_GET['orderby']) ? $_GET['orderby'] : null;
		$eventos = $this->eventosService->getAllEventos($orderby);
		include ROOT_PATH . '../view/eventos.php';

	}

	public function saveEvento()
	{
		$title = 'Adicionar novo Evento';

		$nome = '';
		$numero = '';

		$errors = array();

		if (isset($_POST['form-submitted'])) {

			$nome 	 = isset($_POST['nome']) 	? trim($_POST['nome']) 	  : null;
			$numero  = isset($_POST['numero']) 	? trim($_POST['numero'])   : null;
	
			try {
				$this->eventosService->createNewEvento($nome, $numero);
				$this->redirect('index.php');
				return;
			} catch(ValidationException $e) {
				$errors = $e->getErrors();
			}
		}

		include ROOT_PATH.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR.'evento-form.php';
	}

	public function editEvento()
	{
		$title  = "Ediar Evento";

		$nome    = '';
		$numero  = '';
		$id      = $_GET['id'];

		$errors = array();

		$evento = $this->eventosService->getEvento($id);

		if (isset($_POST['form-submitted'])) {

			$nome 	 = isset($_POST['nome']) 	? trim($_POST['nome']) 	  : null;
			$numero 	 = isset($_POST['numero']) 	? trim($_POST['numero'])   : null;

			try {
				$this->eventosService->editEvento($nome, $numero, $id);
				$this->redirect('index.php');
				return;
			} catch(ValidationException $e) {
				$errors = $e->getErrors();
			}
		}
		// Include in the view of the edit form
		include ROOT_PATH.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR.'evento-form-edit.php';
	}

	public function deleteEvento()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : null;
			if (!$id) {
				throw new Exception('Internal error');
			}
			$this->eventosService->deleteEvento($id);

			$this->redirect('index.php');
	}

	public function showEvento()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : null;

		$errors = array();

		if (!$id) {
			throw new Exception('Internal error');
		}
		$evento = $this->eventosService->getEvento($id);

		include ROOT_PATH.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR.'evento.php';
	}

	public function showError($title, $message)
	{
		include ROOT_PATH . 'view/error.php';
	}
}

?>
