<?php

require_once ROOT_PATH.'/PDO/CrudPDO.php';

class ProfessorPDO extends CrudPDO {
    
    public function insertProfessor($id, $nome, $cpf, $email){
        $this->insertDB("Professor", "?, ?, ?, ?", array($id, $nome, $cpf, $email));        
    }
    public function selectProfessor($nome){
        $this->selectDB("*", "Professor", "where nome like %$nome%", array());        
    }
    public function selectTodosProfessores(){
        $this->selectDB("*", "Professor", "", array());
    }
    public function updateProfessor($nome, $cpf, $email, $id){
        $this->updateDB("Professor", "nome = ?, cpf = ?, email = ?", "CodigoProfessor = ?", array($nome, $cpf, $email, $id));
    }
    public function deleteProfessor($id){
        $this->deleteDB("Professor", "CodigoProfessor = ?", array($id));
    }
    
}
