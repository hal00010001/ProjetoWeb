<?php

require_once ROOT_PATH.'/PDO/CrudPDO.php';

class LoginPDO {
    
    public function insertLogin($id, $login, $password){
        $this->insertDB("Login", "?, ?, ?", array($id, $login, $password));
        echo "Login criado com sucesso";
    }
    public function selectLogin(){
        
    }    
    public function deleteLogin(){
        
    }
    
}
