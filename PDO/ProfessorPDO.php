<?php

class ProfessorPDO extends CrudPDO {
    
    public function insertProfessor($id, $nome, $cpf, $email){
        $linhasAlteradas = $this->insertDB("Professor", "?, ?, ?, ?", array($id, $nome, $cpf, $email));
        if(linhasAlteradas > 0){
            echo "Cadastro realizado com sucesso";
        }
        else{
            echo "Erro no cadastro";
        }
    }
    public function selectProfessor(){
        
    }
    public function selectTodosProfessores(){
        
    }
    public function deleteProfessor(){
        
    }
    
}
