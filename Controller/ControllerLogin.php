<?php

require_once ROOT_PATH.'/PDO/LoginPDO.php';

$crud = new LoginPDO();

if ($acao == 'insert'){
    $crud->insertLogin($id, $login, $password);    
}
elseif ($acao == 'select'){
    $crud->selectLogin($login);
}
elseif ($acao == 'update'){
    $crud->updatePassword($password, $login);
}
elseif ($acao == 'delete'){
    $crud->deleteLogin($id);
}
