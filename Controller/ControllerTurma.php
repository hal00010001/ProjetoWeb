<?php

require_once ROOT_PATH.'/PDO/TurmaPDO.php';

$crud = new TurmaPDO();

if ($acao == 'insert'){
    $crud->insertTurma($id, $descricao);    
}
elseif ($acao == 'select'){
    $crud->selectTurma($nome);
}
elseif ($acao == 'todos'){
    $crud->selectTodasTurmas();
}
elseif ($acao == 'update'){
    $crud->updateTurma($nome, $cpf, $email, $id);
}
elseif ($acao == 'delete'){
    $crud->deleteTurma($id);
}