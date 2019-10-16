<?php

require_once ROOT_PATH.'/PDO/CrudPDO.php';

class ProfessorPDO extends CrudPDO {
    
    public function insertProfessor($id, $nome, $cpf, $email){
        $this->insertDB("Professor", "?, ?, ?, ?", array($id, $nome, $cpf, $email));
        echo "Cadastro realizado com sucesso";        
    }
    public function selectProfessor(){
        $this->selectDB("*", "Professor", "where nome like %$nome%", array());        
    }
    public function selectTodosProfessores(){
        $this->selectDB("*", "Professor", "", array());
    }
    public function deleteProfessor(){
        $this->deleteDB("Professor", "id = ?", array($id));
    }
    
}
