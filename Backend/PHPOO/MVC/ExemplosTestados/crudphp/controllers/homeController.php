<?php
  /**
   * CONTROLADOR DA TELA HOME DO SISTEMA.
   */
  class homeController extends controller
  {

    public function __construct(){
        parent::__construct();
        $users = new usersDB();
        $users->users_check_session();
        global $user_in;
        $user_in = $_SESSION['crud_session_log'];
    }

    public function index(){
      $data_set = array('erro' => '');
      $users = new usersDB();
      $data_set['users'] = $users->getUsers();

    if(isset($_POST['newUserDone'])){
        $name = addslashes($_POST['name']);
        $username = addslashes($_POST['username']);
        $pass = addslashes(base64_encode($_POST['pass']));
        $age = addslashes($_POST['age']);
        $users = new usersDB();
        $users->addUser($name, $username, $pass, $age);
    }

    if (isset($_POST['editUserDone'])) {
      $name = addslashes($_POST['name']);
      $username = addslashes($_POST['username']);
      $age = addslashes($_POST['age']);
      $id = $_POST['id'];
      $users = new usersDB();
      $users->editUser($name, $username, $age, $id);
    }

    if (isset($_POST['passEditDone'])) {
      $pass = addslashes(base64_encode($_POST['pass']));
      $id = $_POST['id'];
      $users = new usersDB();
      $users->passEdit($pass, $id);
    }

    if (isset($_POST['delUserDone'])) {
      $id = $_POST['id'];
      $users = new usersDB();
      $users->delUser($id);
    }
      $this->loadTemplate('home', $data_set);
    }

    public function logout(){
      global $user_in;
      $users = new usersDB();
      $users->logOff($user_in);
    }

  }

?>
