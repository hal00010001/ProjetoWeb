<?php

require_once ROOT_PATH.'/PDO/ProfessorPDO.php';

$crud = new ProfessorPDO();

if ($acao == 'insert'){
    $crud->insertProfessor($id, $nome, $cpf, $email);    
}
elseif ($acao == 'select'){
    $crud->selectProfessor($nome);
}
elseif ($acao == 'todos'){
    $crud->selectTodosProfessores();
}
elseif ($acao == 'update'){
    $crud->updateProfessor($nome, $cpf, $email, $id);
}
elseif ($acao == 'delete'){
    $crud->deleteProfessor($id);
}

