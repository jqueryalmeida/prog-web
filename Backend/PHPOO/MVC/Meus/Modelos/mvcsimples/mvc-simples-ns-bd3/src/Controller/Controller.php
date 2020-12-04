<?php

namespace Mvc\Controller;

class Controller
{

    public function listarUsuarios(){
        $model = new \Mvc\Model\Model();
        $result = $model->listar();
        return $result;
    }

    public function addUsuario(){
        if(isset($_POST['nome'])){
        $model = new \Mvc\Model\Model();
        $result = $model->add($_POST['nome']);
        return $result;
        }
    }

}

