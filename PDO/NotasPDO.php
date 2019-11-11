<?php

require_once ROOT_PATH.'/PDO/CrudPDO.php';

class ProfessorPDO extends CrudPDO {
    
    public function selectNota($nome){
        $this->selectDB("*", "Avaliacao", "where nome like %$nome%", array());        
    }
    public function selectTodasNotas(){
        $this->selectDB("*", "Avaliacao", "", array());
    }
    public function updateNotaPresenca($nota, $presenca, $id){
        $this->updateDB("Avaliacao", "Nota = ?, Presenca = ?", "CodigoAluno = ?", array($nota, $presenca, $id));
    }    
    
}
