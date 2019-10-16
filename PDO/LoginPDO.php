<?php

require_once ROOT_PATH.'/PDO/CrudPDO.php';

class LoginPDO {
    
    public function insertLogin($id, $login, $password){
        $this->insertDB("Login", "?, ?, ?", array($id, $login, $password));
        echo "Login criado com sucesso";
    }
    public function selectLogin(){
        $this->selectDB("*", "Login", "where nome like %$nome%", array());
    }    
    public function deleteLogin(){
        $this->deleteDB("Login", "id = ?", array($id));
    }
    
}
