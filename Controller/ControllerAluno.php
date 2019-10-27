<?php

require_once ROOT_PATH.'/PDO/AlunoPDO.php';

$crud = new AlunoPDO();

if ($acao == 'insert'){
    $crud->insertAluno($id, $nome, $cpf, $email, $login);    
}
elseif ($acao == 'select'){
    $crud->selectAluno($nome);
}
elseif ($acao == 'todos'){
    $crud->selectTodosAlunos();
}
elseif ($acao == 'update'){
    $crud->updateAluno($nome, $cpf, $email, $login,  $id);
}
elseif ($acao == 'delete'){
    $crud->deleteAluno($id);
}
