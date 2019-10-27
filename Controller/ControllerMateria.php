<?php

require_once ROOT_PATH.'/PDO/MateriaPDO.php';

$crud = new MateriaPDO();

if ($acao == 'insert'){
    $crud->insertMateria($id, $descricao);    
}
elseif ($acao == 'select'){
    $crud->selectMateria($descricao);
}
elseif ($acao == 'todos'){
    $crud->selectTodasMaterias();
}
elseif ($acao == 'update'){
    $crud->updateMateria($descricao, $id);
}
elseif ($acao == 'delete'){
    $crud->deleteMateria($id);
}