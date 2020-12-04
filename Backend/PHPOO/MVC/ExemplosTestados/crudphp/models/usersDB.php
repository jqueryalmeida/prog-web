<?php
  /**
   * Classe de manipulação da tabela de usuários
   */
  class usersDB extends model
  {
    //QUERIES DE LEITURA
    public function users_check_session(){
        if (!isset($_SESSION['crud_session_log']) || (isset($_SESSION['crud_session_log'])) && empty($_SESSION['crud_session_log'])) {
            header("Location: " . BASEURL . "login");
            exit;
        }
    }

    public function getUsers(){
      $returner = array();
      $query = "SELECT * FROM users";
      $query = $this->db->query($query);
      if ($query->rowCount() > 0) {
        $returner = $query->fetchAll();
      }
      return $returner;
    }

    public function users_login($username, $pass){
        $query = "SELECT * FROM users WHERE username = '$username'";
        //echo $query;exit;
        $query = $this->db->query($query);
        if ($query->rowCount() > 0) {
            if (isset($_SESSION['crud_session_log']) && $_SESSION['crud_session_log'] >= 3) {
                $query = "SELECT * FROM users WHERE username = '$username'";
                //echo $query;exit;
                $query = $this->db->query($query);
                if ($query->rowCount() > 0) {
                    $query = "UPDATE users SET blocked = 'Y' WHERE username = '$username'";
                    //echo $query;exit;
                    $query = $this->db->query($query);
                }
                return "Acesso bloqueado por muitas tentativas! Lamentamos o inconveniente.";
            } else {
                $query = "SELECT * FROM users WHERE username = '$username' AND pass = '$pass'";
                //echo $query;exit;
                $query = $this->db->query($query);
                if ($query->rowCount() > 0) {
                    $query = $query->fetch();
                    if ($query['blocked'] == 'N') {
                        $_SESSION['crud_session_log'] = $query['id'];
                        header("Location: " . BASEURL);
                        exit;
                    } else {
                        return "Conta bloqueada! Email email@email.com para abrir chamado";
                    }
                } else {
                   if (!isset($_SESSION['crud_session_log'])) {
                        $_SESSION['crud_session_log'] = 0;
                    }
                    $_SESSION['crud_session_log']++;
                    return "Usuário e/ou Senha errados! Tentativas: " . $_SESSION['crud_session_log'] . ". No terceiro erro haverá bloqueio!";
                }
            }
        } else {
            return "Usuário não existe! Tente novamente";
        }
    }

    public function logOff($id){
      unset($_SESSION['crud_session_log']);
      header("Location: " . BASEURL);
    }

    //QUERIES DE MODIFICAÇÃO
    public function addUser($name, $username, $pass, $age){
      $query = "SELECT * FROM users WHERE username = '$username'";
      //echo $query;exit;
      $query = $this->db->query($query);
      if ($query->rowCount() > 0) {
        echo "<script>alert('Ops! Este usuário já existe!')</script>";
      } else {
        $query = "INSERT INTO users SET name = '$name', username = '$username', pass = '$pass', age = '$age'";
        //echo $query;exit;
        $query = $this->db->query($query);
        header("Location: " . BASEURL);
      }
    }

    public function editUser($name, $username, $age, $id){
      $query = "SELECT * FROM users WHERE username = '$username' AND id != '$id'";
      //echo $query;exit;
      $query = $this->db->query($query);
      if ($query->rowCount() > 0) {
        echo "<script>alert('Ops! Este usuário já existe!')</script>";
      } else {
        $query = "UPDATE users SET name = '$name', username = '$username', age = '$age' WHERE id = '$id'";
        //echo $query;exit;
        $query = $this->db->query($query);
        header("Location: " . BASEURL);
      }
    }

    public function passEdit($pass, $id){
      $query = "UPDATE users SET pass = '$pass' WHERE id = '$id'";
      //echo $query;exit;
      $query = $this->db->query($query);
      header("Location: " . BASEURL);
    }

    public function delUser($id){
      $query = "DELETE FROM users WHERE id = '$id'";
      //echo $query;exit;
      $query = $this->db->query($query);
      header("Location: " . BASEURL);
    }

  }

?>
