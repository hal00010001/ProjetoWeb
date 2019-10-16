<?php

require_once ROOT_PATH.'/PDO/CrudPDO.php';

class AlunoPDO {
    
    public function insertAluno($id, $nome, $cpf, $email, $login){
        $this->insertDB("Aluno", "?, ?, ?, ?, ?", array($id, $nome, $cpf, $email, $login));
        echo "Cadastro realizado com sucesso";
    }
    public function selectAluno(){
        $this->selectDB("*", "Aluno", "where nome like %$nome%", array());
    }
    public function selectTodosAlunos(){
        $this->selectDB("*", "Aluno", "", array());
    }
    public function deleteAluno(){
        $this->deleteDB("Aluno", "id = ?", array($id));
    }
    
}
