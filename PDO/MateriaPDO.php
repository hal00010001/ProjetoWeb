<?php

require_once ROOT_PATH.'/PDO/CrudPDO.php';

class MateriaPDO {
    
    public function insertMateria($id, $descricao){
        $this->insertDB("Materia", "?, ?", array($id, $descricao));
        echo "Cadastro realizado com sucesso";
    }
    public function selectMateria(){
        
    }
    public function selectTodasMaterias(){
        
    }
    public function deleteMateria(){
        
    }
    
}
