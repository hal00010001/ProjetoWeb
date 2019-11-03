<?php

include("../includes/variaveis.php");
include ("../PDO/CrudPDO.php");

$crud = new CrudPDO();

if($acao == 'cadastrar'){
    $crud->insertDB("Professor", "?, ?, ?, ?", array($id, $nome, $cpf, $email));
    echo "Cadastro realizado com sucesso";
}
else {
    $crud->updateDB("Professor", "Nome = ?, CPF = ?, Email = ?", "CodigoProfessor = ?", array($nome, $cpf, $email, $id));
    echo "Cadastro atualizado com sucesso!";
}
