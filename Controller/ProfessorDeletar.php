<?php

require_once '../PDO/CrudPDO.php';

$crud = new CrudPDO();
$idUser = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

$crud->deleteDB("Professor", "CodigoProfessor = ?", array($idUser));

echo "Dados deletados com sucesso!";