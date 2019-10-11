<?php

require_once ROOT_PATH.'/PDO/CrudPDO.php';

class TurmaPDO {
    
    public function insertTurma(){
        $this->insertDB("Turma", "?, ?", array($id, $descricao));
        echo "Cadastro realizado com sucesso";
    }
    public function selectTurma(){
        
    }
    public function selectTodasTurmas(){
        
    }
    public function deleteTurma(){
        
    }
    
}
