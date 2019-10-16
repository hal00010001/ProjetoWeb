<?php

require_once ROOT_PATH.'/PDO/CrudPDO.php';

class TurmaPDO {
    
    public function insertTurma(){
        $this->insertDB("Turma", "?, ?", array($id, $descricao));
        echo "Cadastro realizado com sucesso";
    }
    public function selectTurma(){
        $this->selectDB("*", "Materia", "where Descricao like %$nome%", array());
    }
    public function selectTodasTurmas(){
        $this->selectDB("*", "Materia", "", array());
    }
    public function updateTurma(){
        $this->updateDB("Turma", "Descricao = ?", array($turma, $id));
    }
    public function deleteTurma(){
        $this->deleteDB("Materia", "CodigoTurma = ?", array($id));
    }
    
}
