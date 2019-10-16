<?php

require_once ROOT_PATH.'/PDO/CrudPDO.php';

class MateriaPDO {
    
    public function insertMateria($id, $descricao){
        $this->insertDB("Materia", "?, ?", array($id, $descricao));
        echo "Cadastro realizado com sucesso";
    }
    public function selectMateria(){
        $this->selectDB("*", "Materia", "where nome like %$nome%", array());
    }
    public function selectTodasMaterias(){
        $this->selectDB("*", "Materia", "", array());
    }
    public function deleteMateria(){
        $this->deleteDB("Materia", "id = ?", array($id));
    }
    
}
