<?php
  /**
   * CONTROLADOR DA TELA DE LOGIN
   */
  class loginController extends controller
  {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
      $data_set = array('erro' => '');
      if (isset($_POST['login_form'])) {
        $username = addslashes($_POST['username']);
        $pass = base64_encode($_POST['pass']);
        $users = new usersDB();
        $data_set['erro'] = $users->users_login($username, $pass);
      }
      $this->loadPage('login', $data_set);
    }

  }

?>
