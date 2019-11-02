<?php

abstract class Conexao {
    
    //Realizara a conexao com o banco de dados
    protected function conectaDB(){
        try {
            $Con = new PDO("mysql:host=localhost;dbname=idioma", "root", "");
            //$Con = new PDO("mysql:host=localhost;dbname=id11380331_idioma", "root_idioma", "Root_IdiomaZ");            
            return $Con;
        } catch (PDOException $ex) {
            return $ex->getMessage();
        }
    }
    
}
