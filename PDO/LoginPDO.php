<?php

require_once ROOT_PATH.'/PDO/CrudPDO.php';

class LoginPDO {
    
    public function insertLogin($id, $login, $password){
        $this->insertDB("Login", "?, ?, ?", array($id, $login, $password));
        echo "Login criado com sucesso";
    }
    public function selectLogin(){
        $this->selectDB("*", "Login", "where Login like %$nome%", array());
    }
    public function updatePassword($password, $login){
        $this->updateDB("Login", "password = ?", "Login = ?", array($nome, $cpf, $email, $login, $id));
    }
    public function deleteLogin(){
        $this->deleteDB("Login", "CodigoLogin = ?", array($id));
    }
    
}
